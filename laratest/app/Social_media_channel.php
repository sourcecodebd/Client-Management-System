<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social_media_channel extends Model
{
    protected $table = null;
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'id';
}

