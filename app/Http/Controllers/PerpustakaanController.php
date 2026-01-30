<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function index() {
        return "Selamat Datang di Perpustakaan Digital";
    }

    public function tampilBuku() {
        $buku = ["Laskar Pelangi", "Filosofi Teras", "Bumi Manusia", "Hujan", "Dongeng Kancil"];
        
        return view("perpustakaan.index", compact("buku"));
    }
}