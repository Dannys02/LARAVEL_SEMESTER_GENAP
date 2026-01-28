<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $jurusan = Jurusan::all();
        return view("jurusan.index", compact("jurusan"));
    }

    // Form tambah data
    public function create()
    {
        return view("jurusan.form");
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $jurusan = $request->validate([
            "nama_jurusan" => "required|max:255",
        ]);

        Jurusan::create([
            "nama_jurusan" => $jurusan["nama_jurusan"],
        ]);

        return redirect("/jurusan/index")->with("success", "Data berhasil ditambah");
    }

    // Form edit data
    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view("jurusan.edit", compact("jurusan"));
    }

    // Update data di database
    public function update(Request $request, $id)
    {
        // 1. Validasi data (variabel tetap $jurusan sesuai maumu)
        $jurusan = $request->validate([
            "nama_jurusan" => "required|max:255",
        ]);

        // 2. Cari record yang mau diubah berdasarkan ID-nya
        $data = Jurusan::findOrFail($id);

        // 3. Update datanya
        $data->update([
            "nama_jurusan" => $jurusan["nama_jurusan"],
        ]);

        // 4. Redirect (menggunakan path URL biasa agar lebih aman)
        return redirect("/jurusan")->with("success", "Data berhasil diubah");
    }

    // Hapus data
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();
        return redirect()->route("/jurusan/index")->with("success", "Data berhasil dihapus");
    }
}