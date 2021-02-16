<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "Risang Daniswara - 1941720166";
    }

    public function artikel($id){
        return "Halaman Artikel ".$id;
    }
}
