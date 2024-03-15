<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContainerMenu extends Model
{
    use HasFactory;

    protected $table = 'container_menu';
    protected $primaryKey = 'container_id';
    protected $guarded = ['container_id'];

    protected $fillable = [
        'container_title',
        'container_description',
        'logo'
    ];
}
