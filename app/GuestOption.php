<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestOption extends Model
{

    protected $table = 'guest_options';
    protected $fillable = [
        'event_id', 
        'guest_id', 
        'gift', 
        'checkin', 
        'photos', 
        'website', 
        'rsp'
    ];

}
