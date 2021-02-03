<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_room',
        'image_path1',
        'image_path2',
        'image_path3',
        'description',
        'price'
    ];
}
