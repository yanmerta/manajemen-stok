<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeImageSlider extends Model
{
    use HasFactory;

    protected $table = 'home_image_slider';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];


    protected $fillable = [
        'image',
        'hms_active_status',
    ];
}
