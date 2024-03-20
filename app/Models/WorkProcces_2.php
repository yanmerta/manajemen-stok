<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkProcces_2 extends Model
{
    use HasFactory;

    protected $table = 'workprocces_2'; // M
    protected $primaryKey = 'id'; 
    protected $guarded = ['id']; 
    protected $fillable = [
        'title',
        'description',
        'image',
        'list1',
        'list2',
        'list3'
    ]; 
}
