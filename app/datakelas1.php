<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datakelas1 extends Model
{
    protected $fillable=[
        'nama',
        'kelas',
        'agama',
        'kelamin'
    ];
}
