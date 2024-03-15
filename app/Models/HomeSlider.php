<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeSlider extends Model
{
    use HasFactory;

    protected $table = 'home_slider';
    protected $primaryKey = 'hms_id';
    protected $guarded = ['hms_id'];

    protected $fillable = [
        'hms_title',
        'hms_description',
        'hms_active_status',
        // Add other fields as needed
    ];
}
