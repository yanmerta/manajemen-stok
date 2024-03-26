<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $table = 'testimoni';
    protected $primaryKey = 'testimoni_id';
    protected $guarded = ['testimoni_id'];

    protected $fillable = [
        'testi_name',
        'position',
        'testi_description',
        'image',
        'testi_active_status'

    ];
}
