<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;

    public $timestamps = false;

    //Es un array en el cual indico los campos que se pueden cargar de forma masiva por ejemplo cuando uso tinker para cargar una tabla 
    public $fillable = ['title'];
}
