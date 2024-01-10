<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insert extends Model
{
    // table katalog_buku
    use HasFactory;
    public $timestamps = false;
    protected $table = 'katalog_buku';
    protected $guarded = ['tindakan'];
    protected $primaryKey = 'id_buku';

    public function peminjams(){
        return $this->hasMany(Peminjam::class);
    }
}