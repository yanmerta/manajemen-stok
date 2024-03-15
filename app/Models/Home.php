<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'home'; // Specify the table name
    protected $primaryKey = 'home_id'; // Specify the primary key column
    protected $guarded = ['home_id']; // Specify the guarded fields to prevent mass assignment

    // Specify the fillable fields for mass assignment
    protected $fillable = [
        'home_id',
        'home_description',
        'home_title',
        'home_subtitle',
        'home_contactme',
        'home_video',
        'home_image',
        'home_advantage_1',
        'home_advantage_2',
        'home_advantage_3',
        // Add other fields as needed
    ];
}
