<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'akun';
    protected $fillable = [
        "namaakun",
        "userssoakun",
        "emailakun",
        "nipakun",
        "notelpakun",
        "roleakun",
        "statusakun",
        "_token"
    ];

    public $timestamp = false;
}
