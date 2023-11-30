<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
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
        'birth_date' => 'date',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function scopeOrderByBirthday($query)
    {
        $query->orderByRaw('date_format(birth_date, "%m-%d")');
    }

    public function scopeWhereBirthdayThisWeek($query)
    {

//        $query->whereRaw('date_format(birth_date, "%m-%d") between ? and ?', [
//           Carbon::now()->startOfWeek()->format('m-d'),
//           Carbon::now()->endOfWeek()->format('m-d'),
//        ]);


//        --------------------------------------------------------------------------------------------------------------

//        Carbon::setTestNow(Carbon::parse('January 1 2020'));
//
//        $query->whereRaw('date_format(birth_date, "%m-%d") between ? and ?', [
//            Carbon::now()->startOfWeek()->format('m-d'),
//            Carbon::now()->endOfWeek()->format('m-d'),
//        ]);


//        --------------------------------------------------------------------------------------------------------------


//        $dates = Carbon::now()->startOfWeek()
//            ->daysUntil(Carbon::now()->endOfWeek())
//            ->map(fn ($date) => $date->format('m-d'));
//
//        $query->whereRaw('date_format(birth_date, "%m-%d") in (?,?,?,?,?,?,?)', iterator_to_array($dates));



//        --------------------------------------------------------------------------------------------------------------

        Carbon::setTestNow(Carbon::parse('January 1 2020'));

        $dates = Carbon::now()->startOfWeek()
            ->daysUntil(Carbon::now()->endOfWeek())
            ->map(fn ($date) => $date->format('m-d'));

        $query->whereRaw('date_format(birth_date, "%m-%d") in (?,?,?,?,?,?,?)', iterator_to_array($dates));


    }

}
