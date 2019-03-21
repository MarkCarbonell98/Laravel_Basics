<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model //models are used to handle the database info
{
    use SoftDeletes;
    //
    //thinks we have a posts table
    // protected $table = 'posts'; 
    // protected $primary_key = 'id';

    protected $dates = ['deleted_at'];

    protected $fillable = [ //allows mass assignment without exception yuhuuuuuuuuu
        'title', 
        'body',
    ];
}
