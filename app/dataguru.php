<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataguru extends Model
{
    protected $fillable=[
        'nama_guru',
        'tanggal_lahir',
        'jenis_kelamin',
        'nip',
        'jabatan',
        'bekerja'
        ];
}
