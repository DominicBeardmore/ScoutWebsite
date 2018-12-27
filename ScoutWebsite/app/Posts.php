<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
\Carbon\Carbon::setToStringFormat('d/m/Y');

class Posts extends Model
{
    protected $table = 'posts_table';

    protected $dates = [
        'created_at',
    ];
}
