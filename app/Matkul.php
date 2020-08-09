<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $primaryKey = "kode_matakuliah";
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = "matakuliah";
    protected $fillable = ['kode_matakuliah', 'nama_matakuliah', 'sks', 'semester'];
}
