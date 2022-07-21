<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'admin_id',
        'pharmacy_name',
        'pharmacy_address',
        'pharmacy_phone_number'

    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public function drug()
    {
        return $this->hasMany(Drug::class, 'pharmacy_id', 'id');
    }

    public function chat()
    {
        return $this->hasMany(Chat::class, 'pharmacy_id', 'id');
    }

    public function contact()
    {
        return $this->hasOne(PharmacyContact::class, 'pharmacy_id', 'id');
    }
}
