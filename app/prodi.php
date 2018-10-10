<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    protected $table ='prodi';
    protected $fillable = ['nama_prodi'];

public function mahasiswa()
{
    return $this->hasMany(Mahasiswa::class);
}

}












