<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    //
    protected $fillable = [
       'blancheId', 'name', "code",
    ];

    protected $table = "line";
}
