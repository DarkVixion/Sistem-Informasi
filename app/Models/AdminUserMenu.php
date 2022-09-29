<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUserMenu extends Model
{
    use HasFactory;
    protected $table = 'adminusermenu';
    /*protected $fillable = [
        "namaakunuser",
        "ssoakunuser",
        "passwordakunuser",
        "emailakunuser",
        "nipakunuser",
        "notelpakunuser",
        "roleakunuser",
        "statusakunuser",
        "path_profileakunuser"
    ];*/

    public $timestamp = false;
}
