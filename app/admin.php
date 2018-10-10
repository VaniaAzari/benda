<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table ='admin';

    protected $dates = [
    'current_sign_in_at'
    // your other new column
];
}
