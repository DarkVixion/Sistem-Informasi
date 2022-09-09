<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambahKerjasama extends Model
{
    use HasFactory;
    protected $table = 'tambahkerjasama';
    protected $primaryKey = 'id';
    protected $fillable = [
        "namamitra",
        "jenismitra",
        "judulkerjasama",
        "skalakerjasama",
        "alamat",
        "negara",
        "notelp",
        "web",
        "bulankerjasama",
        "nilaikontrak",
        "tglmulai",
        "tglselesai",

        'pic',
        'no_telp_pic',
        'email_pic'
    ];
