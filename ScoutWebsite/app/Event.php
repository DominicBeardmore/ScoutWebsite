<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events_table';

    // protected $fillable = [
    //     'event_title',
    //     'event_location',
    //     'event_description',
    //     'event_date',
    //     'event_start_time',
    //     'event_finish_time'
    // ];

    // protected $hidden = [
    //     'created_at',
    //     'updated_at'
    // ];

    protected $dates = ['event_date'];
}
