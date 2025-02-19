<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return ' Nama : Ivansyah Eka Oktaviadi Santoso <br> Nim : 2341720126';
    }

    public function article($id) {
       return "Halaman artikel dengan ID ".$id;  
    }
}
