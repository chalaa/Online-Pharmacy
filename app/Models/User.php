<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'is_approved',
        'is_admin',
        'is_pharmacy',
        'is_customer'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function admin()
    {
        return $this->hasOne(Admin::class , 'user_id' , 'id');
    }
    
    public function pharmacy()
    {
        return $this->hasOne(Pharmacy::class , 'user_id' , 'id');
    }

    public function customer()
    {
        return $this->hasOne(Customer::class , 'user_id' , 'id');
    }

    public function sender()
    {
        return $this->hasMany(ChatMessage::class , 'sender_id' , 'id');
    }

    public function receiver()
    {
        return $this->hasMany(ChatMessage::class , 'reciver_id' , 'id');
    }
}
