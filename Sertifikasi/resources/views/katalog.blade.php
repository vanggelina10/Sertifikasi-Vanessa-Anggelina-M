<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
    <title>Katalog</title>
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
    {{-- navbar halaman katalog--}}
    <body class="antialiased">
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
        <a class="nav-link" href="/">Log Out</a>
      </div>
    </div>
  </nav>
  {{-- button untuk diarahkan ke form tambah katalog buku perpustakaan --}}
  <a href="/insertbuku" class="btn btn-primary" style="margin-top:25px; margin-left:100px">Tambah Buku</a><div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered" style="font-family:arial">
          <thead>
            <tr>
              {{-- form untuk input data baru katalog buku --}}
              <th scope="col">Judul Buku</th>
              <th scope="col">Penulis</th>
              <th scope="col">Tahun</th>
              <th scope="col">Sinopsis</th>
              <th scope="col">Foto Buku</th>
              <th scope="col">Tindakan</th>
            </tr>
          </thead>
          <tbody>
            {{-- menampilkan data katalog buku dari database --}}
            @foreach($data as $kb)
            <tr>
              <td>{{$kb->judul_buku}}</td>
              <td>{{$kb->penulis}}</td>
              <td>{{$kb->tahun}}</td>
              <td>{{$kb->sinopsis}}</td>
              <td><img src="{{url('public/insertbuku/'.$kb->foto_buku)}}"></td>
              <td>
                {{-- button untuk mengedit data katalog buku --}}
                <a href="{{route('edit.katalog', ['id'=>$kb->id_buku])}}">Edit</a>
                <p></p>
                {{-- button untuk delete katalog buku --}}
                <a href="{{route('delete.katalog', ['id'=>$kb->id_buku])}}" onclick="return confirm('Apakah yakin menghapus katalog ini?')">Delete</a>
              </td>
            </tr>
            @endforeach
          </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></html>
</html>