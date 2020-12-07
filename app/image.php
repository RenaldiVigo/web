<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $fillable=[
        'titel_image',
        'nama_image',
        'ukuran_image',
        'extension_image'
    ];
}
