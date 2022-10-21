<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    use HasFactory;
    protected $table = 'kerjasama';
    protected $primaryKey = 'id';
    protected $fillable = [
        "status",
        "namamitra",
        "jenismitra",
        "bulaninput",
        "alamat",
        "website",
        "notelpmitra",
        "negara"
    ];
}
