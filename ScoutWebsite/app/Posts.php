<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
\Carbon\Carbon::setToStringFormat('d/m/Y');
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use SoftDeletes;

    protected $table = 'posts_table';

    protected $primaryKey = 'post_id';

    protected $dates = [
        'created_at',
        'deleted_at'
    ];
}
