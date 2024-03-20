<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combine extends Model
{
    use HasFactory;
    protected $table = 'combine';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'title',
        'description',
        'list1',
        'list2',
        'list3',
        'image',
        'contact',
    ];
}
