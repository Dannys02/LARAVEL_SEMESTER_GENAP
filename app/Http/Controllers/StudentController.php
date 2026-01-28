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
        $student->jurusan = "rpl";
        $student->save();
        dd($student);
    }

    // fungsi create() untuk create data siswa ke database bisa langsung banyak data
    public function massAsignment()
    {
        $students = [
            ["nama" => "Budi Santoso", "nisn" => "008591001", "umur" => 17, "alamat" => "Jl. Mawar No. 1", "jurusan" => "rpl"],
            ["nama" => "Siti Aminah", "nisn" => "008591002", "umur" => 18, "alamat" => "Jl. Melati No. 2", "jurusan" => "tkj"],
            ["nama" => "Ahmad Fauzi", "nisn" => "008591003", "umur" => 17, "alamat" => "Jl. Anggrek No. 3", "jurusan" => "ak"],
            ["nama" => "Dewi Lestari", "nisn" => "008591004", "umur" => 18, "alamat" => "Jl. Dahlia No. 4", "jurusan" => "bd"],
            ["nama" => "Eko Prasetyo", "nisn" => "008591005", "umur" => 17, "alamat" => "Jl. Kamboja No. 5", "jurusan" => "rpl"],
            ["nama" => "Fitriani", "nisn" => "008591006", "umur" => 18, "alamat" => "Jl. Kenanga No. 6", "jurusan" => "tkj"],
            ["nama" => "Gilang Ramadhan", "nisn" => "008591007", "umur" => 17, "alamat" => "Jl. Tulip No. 7", "jurusan" => "ak"],
            ["nama" => "Hana Pertiwi", "nisn" => "008591008", "umur" => 18, "alamat" => "Jl. Teratai No. 8", "jurusan" => "bd"],
            ["nama" => "Indra Wijaya", "nisn" => "008591009", "umur" => 17, "alamat" => "Jl. Matahari No. 9", "jurusan" => "rpl"],
            ["nama" => "Jajang Sudrajat", "nisn" => "008591010", "umur" => 18, "alamat" => "Jl. Flamboyan No. 10", "jurusan" => "tkj"],
            ["nama" => "Kartika Sari", "nisn" => "008591011", "umur" => 17, "alamat" => "Jl. Sakura No. 11", "jurusan" => "ak"],
            ["nama" => "Lusiiana", "nisn" => "008591012", "umur" => 18, "alamat" => "Jl. Melur No. 12", "jurusan" => "bd"],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }

        return "Sukses buat data siswa baru";
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

    public function massDelete()
    {
        $student = Student::where("jurusan", "bd")->delete();
        return "Berhasil hapus data tertentu";
        dd($student);
    }

    public function all()
    {
        $students = Student::all();
        foreach ($students as $s) {
            echo ("Nama anda: " . $s->nama) . "<br />";
            echo ("Nisn anda: " . $s->nisn) . "<br />";
            echo ("Umur anda: " . $s->umur) . "<br />";
            echo ("Jurusan anda: " . $s->jurusan) . "<br />";
            echo ("Alamat anda: " . $s->alamat) . "<br /> <br />";
        }
    }
}
