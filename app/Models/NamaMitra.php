<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaMitra extends Model
{
    protected $table = 'nama_mitras';
    protected $primaryKey = 'id';
    protected $fillable = [
        "nama",
        "jenismitra",
        "alamat",
        "negara",
        "notelpmitra",
        "website"
    ];
}
