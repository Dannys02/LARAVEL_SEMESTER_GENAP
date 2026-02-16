<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Major;

class MajorController extends Controller
{
    public function index()
    {
        $major = Major::all();
        return view('major.index', compact('major'));
    }

    public function create()
    {
        return view('major.create');
    }

    public function store(Request $request)
    {
        $major = $request->validate(
            [
                "major_name" => "required|max:255",
            ],
            [
                "major_name.required" => "Nama major wajib diisi",
                "major_name.max" => "Nama major maksimal 255 karakter",
            ]
        );

        Major::create([
            "major_name" => $major["major_name"],
        ]);

        return redirect("/major/index")->with(
            "success",
            "Data berhasil ditambah"
        );
    }

    public function edit($id)
    {
        $major = Major::findOrFail($id);
        return view("major.edit", compact("major"));
    }

    public function update(Request $request, $id)
    {
        $major = $request->validate(
            [
                "major_name" => "required|max:255",
            ],
            [
                "major_name.required" => "Nama major wajib diisi",
                "major_name.max" => "Nama major maksimal 255 karakter",
            ]
        );

        Major::where("id", $id)->update([
            "major_name" => $major["major_name"],
        ]);

        return redirect("/major/index")->with(
            "success",
            "Data berhasil diupdate"
        );
    }

    public function destroy($id)
    {
        $major = Major::destroy($id);
        return redirect("/major/index")->with(
            "success",
            "Data berhasil dihapus"
        );
    }
}
