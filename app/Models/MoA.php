<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoA extends Model
{
    public function kerjasama()
    {
        return $this->belongsTo(TambahKerjasama::class);
    }
}
