<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table='movies';
    protected $fillable = ['title', 'original_title', 'nationality', 'date', 'vote', 'overview', 'poster_path'];
}
