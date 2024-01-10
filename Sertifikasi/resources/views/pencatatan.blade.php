<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Perpustakaan</title>

    <style>
        .container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td, th {
    vertical-align: middle;
  }
}
    </style>

      
    </head>
    {{-- navbar halaman pencatatan--}}
    <body class="antialiased">
      <form action="/babi" method="post">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-weight:bold">Perpustakaan Jaya</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/katalog">Katalog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pencatatan">Pencatatan</a>
        </li>
      </ul>
      {{-- button logout --}}
      <a class="nav-link" href="/">Log Out</a>
    </div>
  </div>
</nav>
{{-- button untuk diarahkan ke form peminjaman --}}
<a href="/insert" class="btn btn-primary" style="margin-top:25px; margin-left:100px">Pinjam Buku</a><div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered" style="font-family:arial">
        <thead>
          <tr>
            {{-- form untuk input data peminjaman buku --}}
            <th scope="col">ID</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Pengembalian</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          {{-- menampilkan data peminjaman dari database --}}
          @foreach ($data as $ps)
          <tr>
            <td>{{$ps->id}}</td>
            <td>{{$ps->judul_buku}}</td>
            <td>{{$ps->nama_peminjam}}</td>
            <td>{{ date("Y-m-d", strtotime($ps->tanggal_pinjam)) }}</td>
            <td>{{ date("Y-m-d", strtotime($ps->tanggal_pengembalian)) }}</td>
            
            @if($ps->insert){
              @if($ps->status == "Dipinjam"){
                <td>
                <a href="{{route('babi.modar', ['title'=>$ps->judul_buku])}}">Dipinjam</a>
                </td>
              }
              @else{
                <td>
                  Tersedia
                </td>
              }
              @endif
            }
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></html>