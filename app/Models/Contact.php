<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'title',
       'button_teks',
        'button_url',
    ];
}
