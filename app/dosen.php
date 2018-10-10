<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table ='dosen';
    protected $fillable = ['username','nama','jenis_kelamin','email','password','file_name'];
}
