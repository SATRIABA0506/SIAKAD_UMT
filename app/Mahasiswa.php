<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $primaryKey = 'nim';
    protected $table = 'mahasiswa';
    public $incrementing = false;
    protected $fillable = ['nim', 'nama_lengkap', 'prodi', 'alamat'];
}