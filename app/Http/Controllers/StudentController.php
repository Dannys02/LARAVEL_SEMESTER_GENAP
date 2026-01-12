<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function index($nama = "John Doe", $sekolah = "SMK Telkom")
    // {
    //     return "<h1>Nama saya $nama, sekolah di $sekolah</h1>";
    // }

    public function index() {
        return "Halaman Student";
    }

    public function show($nama = "") {
        return "Nama siswa : $nama";
    }
}
