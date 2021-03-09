<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class session extends Controller
{
    public function sesi(request $req){
        $data=$req->input();
        $req->session()->put('data',$data); 
        echo session('data');
    }
}
