<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisMitra extends Model
{
    use HasFactory;
    protected $table = 'jenismitra';
    protected $primaryKey = 'id';
    protected $fillable = [
        "juduljenismitra"
    ];
    public $timestamps = false;
}
