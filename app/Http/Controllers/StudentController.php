<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // // public function index($nama = "John Doe", $sekolah = "SMK Telkom")
    // // {
    // //     return "<h1>Nama saya $nama, sekolah di $sekolah</h1>";
    // // }

    // public function index() {
    //     $students = ['Lala', 'Nova', 'Lia'];
    //     $class = ['RPL 1','RPL 2','RPL 3'];
    //     return view("student.index", compact("class", "students"));
    // }

    // public function show($nama = "") {
    //     return "Nama siswa : $nama";
    // }

    public function cekObject()
    {
        $student = new Student();
        dump($student);
    }

    public function insert()
    {
        $student = new Student();
        $student->nama = "Dannys Martha Favrillia";
        $student->nisn = "008592312";
        $student->umur = 18;
        $student->alamat = "jl nasional no 3 pandan temurejo";
        $student->jurusan = "Rekayas Perangkat Lunak";
        $student->save();
        dd($student);
    }

    // fungsi create() untuk create data siswa ke database bisa langsung banyak data
    public function massAsignment()
    {
        Student::create([
            "nama" => "Nopal Muhammad",
            "nisn" => "008599912",
            "umur" => 18,
            "alamat" => "jl nasional no 12 pandan temurejo",
            "jurusan" => "Rekayas Perangkat Lunak",
        ]);

        Student::create([
            "nama" => "Lia repan",
            "nisn" => "008598867",
            "umur" => 18,
            "alamat" => "jl nasional no 9 pandan temurejo",
            "jurusan" => "Rekayas Perangkat Lunak",
        ]);

        return "Sukses buat data siswa";
    }

    public function update(Request $request)
    {
        $student = Student::find(3);
        $student->nama = "Lia pacar Repan";
        $student->save();

        dd($student);

        return "update berhasil";
    }

    public function massUpdate()
    {
        Student::where("jurusan", "bd")->update([
            "jurusan" => 'BD'
        ]);

        return "sukses update data siswa";
    }

    public function delete()
    {
        $student = Student::find(3);
        $student->delete();

        return "Berhasil hapus data";

        dd($student);
    }

    public function destroy()
    {
        $student = Student::destroy([1, 2]);

        return "Berhasil hapus beberapa data";

        dd($student);
    }
}
