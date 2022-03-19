<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;
    protected $table = 'tbl_kabupaten';
    protected $fillable = [
        'kab_nama',
        'kab_prov'
    ];
    protected $primaryKey = 'kab_kode';
    public $incrementing = false;
    protected $keyType = 'string';
}
