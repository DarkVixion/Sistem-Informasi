<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoU extends Model
{
    protected $table = 'mous';
    protected $fillable = [
        'Judul',
        'tglmulai',
        'tglselesai',
        'path'
    ];
    protected $dates = ['tglmulai', 'tglselesai'];

    public function kerjasama()
    {
        return $this->belongsTo(TambahKerjasama::class);
    }
}
