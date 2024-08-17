<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videogallery extends Model
{
    protected $table = "videogallery";

    protected $fillable = [
        'id_event', 'guest_code', 'video'
    ];
}
