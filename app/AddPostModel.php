<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddPostModel extends Model
{
    protected $connection = 'dop_servachek';
    protected $table = 'user_posts';
}
