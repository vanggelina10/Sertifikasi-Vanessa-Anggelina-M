<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
<body>
    {{-- form login admin --}}
    <form action="/loginadmin" method="POST">
        <div class="home_body" style="text-align:center;">
            <h1 style="text-align:center; padding-top:200px ; padding-bottom:25px; font-family: arial">Log In</h1>        
        <div class="wrapper-main">
            <form action="" method="post">
                @csrf
                <div class="group">
                    <label for="username">Username</label>
                    <div class="icons">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                        <input type="text" name="username" placeholder=" " required>
                </div>
                <div class="group">
                    <label for="password">Password</label>
                    <div class="icons">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <input type="password" name="password"placeholder=" " required>
                </div>
            {{-- button login ke dalam halaman perpustakaan --}}
        <button type="submit" class="btn btn-primary" style="margin-top:20px">Log In</button>
      </form>
    </body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></html>