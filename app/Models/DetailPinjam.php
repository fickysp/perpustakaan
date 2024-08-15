<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPinjam extends Model
{


    use HasFactory;
    protected $fillable = [
        'pinjam_id',
        'buku_id'
    ];

    public function pinjam()
    {
        return $this->belongsTo(Pinjam::class, 'pinjam_id', 'id');
    }
}
