<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    public $timestamps = true;

    protected $fillable = ['judul', 'isi'];
    // protected $guarded = [];
}
