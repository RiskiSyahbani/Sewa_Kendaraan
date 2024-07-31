<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipe;

class HomeController extends Controller
{
    public function index () {
        $param = [
            "title" => "Home",
            "active" => "home",
            "listtipemobil" => Tipe::all()
        ];
        return view('home', $param);
    }
}
