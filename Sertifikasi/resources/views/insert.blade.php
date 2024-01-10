<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
<body>
    {{-- form insert pinjam buku --}}
    <form action="/insert" method="POST">
        @csrf
        <table>
        {{-- textbox untuk admin dapat insert data peminjam buku --}}
        <div class="home_body" style="text-align:center;">
            <h1 style="text-align:left; padding-left:15px; padding-top:20px ; padding-bottom:5px; font-family: arial; font-size:25px; font-weight:bold">Data Peminjam</h1>            
          <div class="wrapper-main">
                <div class="group" style="text-align:left; margin-left:15px">
                    <label for="judul_buku">Judul Buku</label>
                    <br>
                    <select name="dropdown">
                        @foreach($data as $option)
                        <option value="{{$option->judul_buku}}">{{$option->judul_buku}}</option>
                        @endforeach
                    </select>
                    <div class="icons">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                </div>
                <div class="group" style="text-align:left; margin-left:15px">
                  <label for="nama_peminjam">Nama Peminjam</label>
                  <div class="icons">
                      <i class="fa-solid fa-circle-user"></i>
                  </div>
                      <input type="text" name="nama_peminjam" placeholder=" " required>
              </div>
        </table>
              {{-- button submit untuk mengirim data yang diinput ke dalam database --}}
        <button type="submit" class="btn btn-primary" style="margin-top:15px; margin-left:15px">Submit</button>

    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></html>