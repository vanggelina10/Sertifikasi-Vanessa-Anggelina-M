<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    // table perpustakaan dan insert data tanggal
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pencatatanbuku';
    protected $guarded = [];
    protected $casts = [
        'tanggal_pinjam' => 'date',
        'tanggal_pengembalian' => 'date',
    ];

    public function insert(){
        return $this->belongsTo(Insert::class);
    }
}
