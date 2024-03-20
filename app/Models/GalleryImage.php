<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;
    protected $table = 'gallery_image';
    protected $primaryKey = 'gallery_image_id';
    protected $guarded = ['gallery_image_id'];


    protected $fillable = [
        'gallery_image',
        'gallery_active_status',
    ];
}
