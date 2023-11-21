<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        //'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function scopeSearch($query, string $terms = null)
    {
        collect(str_getcsv($terms, ' ', '"'))->filter()->each(function ($term) use ($query){
            $term = $term.'%';
            // where in
                // derived table
                    // find user by first and last name
                    // union
                    // find user by company name
            $query->whereIn('id', function ($query) use ($term) {
               $query->select('id')
                   ->from(function ($query) use ($term) {
                        $query->select('id')
                            ->from('users')
                            ->where('first_name', 'like', $term)
                            ->orWhere('last_name', 'like', $term)
                            ->union(
                                $query->newQuery()
                                    ->select('users.id')
                                    ->from('users')
                                    ->join('companies', 'companies.id', '=', 'users.company_id')
                                    ->where('companies.name', 'like', $term)
                            );
                   }, 'matches');
            });
        });
    }
}
