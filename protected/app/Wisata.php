<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata';
    protected $fillable = [
    'nama', 
    'id_wisata',
    'image',
    'deskripsi', 
    'alamat',
    'latitude',
    'longtitude',
    'wilayah',
    'aff',
    ];	
}
