<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $connection = 'mysql';
    protected $table = 'users';

    public $timestamps = true;
}
