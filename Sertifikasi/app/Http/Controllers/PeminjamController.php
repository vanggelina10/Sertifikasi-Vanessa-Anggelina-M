<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjam;
use App\Models\Insert;

class PeminjamController extends Controller
{
     //dropdown insert judul buku 
     public function list(){
        $data = Insert::with('peminjams')->get();
        // dd($data);
        return view('insert',compact('data'));
    }
     //fetch data untuk tambah data peminjam buku
     public function insert(Request $request){
        $katalog = Insert::all();
        $judul = $request->input('dropdown');
        $namapeminjam = $request->input('nama_peminjam');

        $history = Insert::where('judul_buku',$judul)->first();       

        $history->peminjams()->create([
            'judul_buku' => $judul,
            'nama_peminjam' => $namapeminjam,
            'tanggal_pinjam' => now(),
            'tanggal_pengembalian' => now()->addWeek(),
            'status' => 'Dipinjam',
        ]);
        return redirect('/pencatatan');
    }
}
