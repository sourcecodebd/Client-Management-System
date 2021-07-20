<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = null;
    public $timestamps = false;

    protected $primaryKey = 'id';
}
