<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'akun';
    public $timestamp = false;
    protected $fillable = [
        "namaakun",
        "userssoakun",
        "emailakun",
        "nipakun",
        "notelpakun",
        "roleakun",
        "statusakun"
    ];

}
