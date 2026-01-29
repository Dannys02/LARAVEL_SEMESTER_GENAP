<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
  public function index()
  {
    $jurusan = Jurusan::all();
    return view("jurusan.index", compact("jurusan"));
  }

  public function create()
  {
    return view("jurusan.form");
  }

  public function store(Request $request)
  {
    $jurusan = $request->validate([
      "nama_jurusan" => "required|max:255",
    ]);

    Jurusan::create([
      "nama_jurusan" => $jurusan["nama_jurusan"],
    ]);

    return redirect("/jurusan/index")->with(
      "success",
      "Data berhasil ditambah"
    );
  }

  public function edit($id)
  {
    $jurusan = Jurusan::findOrFail($id);
    return view("jurusan.edit", compact("jurusan"));
  }

  public function update(Request $request, $id)
  {
    $jurusan = $request->validate([
      "nama_jurusan" => "required|max:255",
    ]);

    $data = Jurusan::findOrFail($id);

    $data->update([
      "nama_jurusan" => $jurusan["nama_jurusan"],
    ]);

    return redirect("/jurusan/index")->with("success", "Data berhasil diubah");
  }

  public function destroy($id)
  {
    $jurusan = Jurusan::findOrFail($id);
    $jurusan->delete();
    return redirect()
      ->back()
      ->with("success", "Data berhasil dihapus");
  }
}
