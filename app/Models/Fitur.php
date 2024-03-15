<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    use HasFactory;

    protected $table = 'fitur';
    protected $primaryKey = 'fitur_id';
    protected $guarded = ['fitur_id'];

    protected $fillable = [
        'fitur_title',
        'fitur_subtitle',
        // Add other fields as needed
    ];
}
