<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $table = 'events_table';

    protected $primaryKey = "events_id";

    protected $dates = ['event_date'];
}
