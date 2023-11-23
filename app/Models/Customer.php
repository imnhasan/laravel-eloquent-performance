<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function salesRep()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function scopeVisibleTo($query, User $user)
    {
        if($user->is_owner){
            return;
        }
        $query->where('seller_id', $user->id);
    }
}
