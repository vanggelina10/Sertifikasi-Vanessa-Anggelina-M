<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model
{
    // untuk cek login admin
   public function ceklogin($username, $password){
    $check = "SELECT count(*) ceklogin FROM admin WHERE username='".$username."' AND password='".$password."';";
    $login = DB::select($check);
    // dd($auth, $login);
    if(($login[0])->ceklogin == 1){
        return true;
    }else{
        return false;
    }
}
}