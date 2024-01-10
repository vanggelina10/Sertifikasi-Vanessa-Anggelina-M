<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Login;
use Session;

class loginController extends Controller
{
    // function untuk cek saat input username dan password
    public function Login(Request $req){
        $username = $req->input('username');
        $password = $req->input('password');

        $model = new Login;
        $check = $model->ceklogin($username, $password);
        // dd($check,$admin);
        if($check == true){
            $redirectPath = '/pencatatan';
        } else {
            return redirect('/');
        }
        return redirect($redirectPath);
    }
}