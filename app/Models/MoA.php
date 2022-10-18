<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoA extends Model
{
    protected $table = 'moas';
    protected $dates = ['tglmulai', 'tglselesai'];

    public function kerjasama()
    {
        return $this->belongsTo(TambahKerjasama::class);
    }
}
