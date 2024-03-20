<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkProcces extends Model
{
    use HasFactory;

    protected $table = 'workprocces'; // M
    protected $primaryKey = 'id'; 
    protected $guarded = ['id']; 
    protected $fillable = [
        'title',
        'sub_title',
        'title_description',
        'description',
        'list1',
        'list2',
        'list3',
        'image'
    ]; 
}
