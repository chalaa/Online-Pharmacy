<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Drug extends Model
{
    use HasFactory, SoftDeletes;

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

    public function scopeFilter($query, array $filters)
    {
       if($filters['drug'] ?? false){
          $query->where('drug_form','like','%'.request('drug').'%'); 
       }
       if($filters['search'] ?? false){
          $query->where('drug_name','like','%'.request('search').'%')
          ->orWhere('drug_description','like','%'.request('search').'%')
          ->orWhere('drug_manufacturer','like','%'.request('search').'%'); 
       }
       if($filters['min_price'] ?? false){
          $query->where('drug_price','>=',request('min_price'))
          ->where('drug_price','<=',request('max_price')); 
       }
    }

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
