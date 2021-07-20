<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = null;
    public $timestamps = false;

    protected $primaryKey = 'id';
}
