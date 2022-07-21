<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'pharmacy_id',
        'drug_name',
        'drug_description',
        'drug_price',
        'drug_quantity',
        'drug_image',
        'drug_form',
        'drug_dosage',
        'drug_manufacturer',
        'drug_expiry_date',
        'drug_manufacture_date',
    ];

    protected $guarded = [];

    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class, 'pharmacy_id', 'id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'drug_id', 'id');
    }

    public function payment()
    {
        return $this->hasMany(Payment::class, 'drug_id', 'id');
    }

}
