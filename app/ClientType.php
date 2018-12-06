<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientType extends Model
{
    //
    protected $fillable = [
       'name',
    ];

    protected $table = "client_types";
}
