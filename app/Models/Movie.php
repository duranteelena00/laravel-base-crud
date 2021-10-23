<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table='movies';
    protected $fillable = ['title', 'original_title', 'nationality', 'date', 'vote', 'overview', 'poster_path'];

    public function getCreatedAt(){
        return Carbon::create($this->created_at)->format('d/m/Y');
    }

    public function getUpdatedAt(){
        return Carbon::create($this->updated_at)->format('d/m/Y');
    }
}
