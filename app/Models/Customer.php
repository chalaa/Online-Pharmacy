<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $fillable = [
            'user_id',
            'first_name',
            'middle_name',
            'last_name',
            'age',
            'phone_number',
            'sex',
            'cutomer_address'
         ];

    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class , 'user_id', 'id');
    }

    public function chat(){
        return $this->hasMany(Chat::class , 'customer_id', 'id');
    }

    public function cart(){
        return $this->hasMany(Cart::class , 'customer_id', 'id');
    }

    public function payment(){
        return $this->hasMany(Payment::class , 'customer_id', 'id');
    }
}
