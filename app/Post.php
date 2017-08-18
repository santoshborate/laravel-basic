<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @var string
     */
    protected $table = 'posts';

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'content'
    ];
}
