<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Insert;

class katalogController extends Controller
{
        // insert data dan memilih file gambar untuk penambahan buku baru
        public function insertbuku(Request $request){
            $insertbuku = new Insert();
            $insertbuku->judul_buku = $request->input('judul_buku');
            $insertbuku->penulis = $request->input('penulis');
            $insertbuku->tahun = $request->input('Tahun');
            $insertbuku->sinopsis = $request->input('Sinopsis');
            $filename = time().'.'.$request->foto_buku->extension();
                $request->foto_buku->storeAs('public/insertbuku',$filename);
                $insertbuku->foto_buku = $filename;
                $insertbuku->save();
            return redirect('/katalog')->with('insertbuku',$insertbuku);
        }
        // fetch data di halaman katalog buku
        public function fetch(){
            $data = Insert::all();
            return view('katalog',compact('data'));
        }
        // edit data buku di halaman katalog
        public function edit($id){
            $katalog = Insert::find($id);
            if(!$katalog){
                return redirect('/katalog')->with('error', 'Book not found');
            }
            return view('edit')->with('katalog',$katalog);
        }
        // update data buku di halaman katalog
        public function update(Request $request,$id){
            $katalog = Insert::find($id);
            if(!$katalog){
                return redirect('/katalog')->with('error', 'Buku tidak ditemukan');
            }
            $validatedData = $request->validate([
                'judul_buku' => 'required',
                'penulis' => 'required',
                'tahun' => 'required',
                'sinopsis' => 'required'
            ]);
            $katalog->update($validatedData);
            return redirect('/katalog')->with('berhasil', 'Buku berhasil diperbarui');
        }

        // delete data buku di katalog
        public function deleteKatalog($id_buku){
            $buku = Insert::find($id_buku);
        
            if($buku){
                $buku->delete();
            }
        
            return redirect('/katalog');
        }
        
}
