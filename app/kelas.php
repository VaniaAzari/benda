<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table ='kelas';
     protected $fillable = ['nama_kelas'];

    public function matakuliahkelas()	
    {
   	    return $this->hasMany(MatakuliahKelas::class);	
    }
    public function materi()	
    {
   	    return $this->hasMany(Materi::class);	
    }
   public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
	 public function tugas()
	 {
	    return $this->hasMany(Tugas::class);
	 }
    public function tugasmahasiswa()
    {
        return $this->hasMany(TugasMhs::class);
    }

    public function groupKuis()
    {
        return $this->hasMany(GroupKuis::class);
    }

     public function chat()
    {
        return $this->hasMany(Chat::class);
    }

    public function chatmahasiswa()
    {
        return $this->hasMany(ChatMhs::class);
    }

    public function pengumuman()
    {
   return $this->hasMany(Pengumuman::class);
    }
}
