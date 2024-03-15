<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturContainerMenu extends Model
{
    use HasFactory;
    protected $table = 'fitur_menu';
    protected $primaryKey = 'fitur_menu_id';
    protected $guarded = ['fitur_menu_id'];

    protected $fillable = [
        'fitur_menu_title',
        'fitur_menu_description',
        'fitur_menu_image'
    ];
}
