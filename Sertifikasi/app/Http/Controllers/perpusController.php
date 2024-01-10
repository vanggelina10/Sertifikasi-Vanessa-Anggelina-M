<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjam;

class perpusController extends Controller
{
    public function update($title){
        $pinjam = Peminjam::where('judul_buku',$title)->first();

        if(!$pinjam){
            return redirect()->back()->with('error','book not Found');
        }
        if($pinjam->status ==="Dipinjam"){
            $pinjam->update([
                'status'=>"Tersedia"
            ]);
            return redirect()->back()->with('success','Update');
        }
        return redirect()->back();
    }
    //menampilkan data di halaman pencatatan
    public function index(){
        $data = Peminjam::with('insert')->get();
        return view('pencatatan',compact('data'));
    }

}

