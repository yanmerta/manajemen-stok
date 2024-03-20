<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $table = 'price';
    protected $primaryKey = 'harga_id';
    protected $guarded = ['harga_id'];

    protected $fillable = [
        'harga_title',
        'harga_description',
        // Add other fields as needed
    ];
}
