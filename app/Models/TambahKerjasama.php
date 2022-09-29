<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambahKerjasama extends Model
{
    use HasFactory;
    protected $table = 'tambahkerjasama';
    protected $primaryKey = 'id';
    /*protected $fillable = [
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

        "judul_mou",
        "path_mou",
        "judul_moa",
        "path_moa",

        "pic",
        "notelpic",
        "emailpic"
    ];*/

    protected $dates = ['tglmulai_mou', 'tglselesai_mou','tglmulai_moa', 'tglselesai_moa'];

    public $timestamp = false;
}
