<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminViewUser extends Model
{
    use HasFactory;
    protected $table = 'adminusermenu';
    protected $primaryKey = 'id';
    protected $fillable = [
        "nama",
        "username",
        "password",
        "email",
        "nip",
        "notelp",
        "role",
        "status",
        "path_profile"
    ];

    public $timestamp = false;
}
