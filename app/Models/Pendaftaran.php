<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendaftaran extends Model
{
    use SoftDeletes;
    use HasFactory;
    public $table = "databalita";
    protected $fillable = [
        'nama_anak',
        'nama_ayah',
        'nama_ibu',
        'jenis_kelamin',
        'tanggal_lahir',
        'tinggi_badan',
        'berat_badan'
    ];

    protected $hidden = [];

    protected $casts = [
        'jenis_kelamin' => 'array',
    ];

    public $timestamps = false;
    protected $primaryKey = 'id';

    // public funtion daftar(){
    //     return $this->belongs
    // }
}
