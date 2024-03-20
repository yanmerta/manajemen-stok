<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPrice extends Model
{
    use HasFactory;
    protected $table = 'listprice';
    protected $primaryKey = 'listprice_id';
    protected $guarded = ['listprice_id'];

    protected $fillable = [
        'listprice_image',
        'listprice_title',
        'price',
        'service1',
        'service2',
        'service3',
        'service4',
        'service5',
        'service6',
        'service7',
        'service1_active',
        'service2_active',
        'service3_active',
        'service4_active',
        'service5_active',
        'service6_active',
        'service7_active',
        'listprice_description',
        'button_teks',
        'button_url',
    ];
}
