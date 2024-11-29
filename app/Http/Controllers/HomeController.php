<?php

namespace App\Http\Controllers;

use App\Models\PaketBelajar;
use App\Models\Pembelajaran;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $paketBelajars = PaketBelajar::all();
        $pembelajarans = Pembelajaran::all();

        return view("index", compact('paketBelajars','pembelajarans'));
    }

    public function login(){
        return view("login");
    }

    public function registration(){
        return view("register");
    }

    public function home(){
        return view ("hal1");
    }
}
