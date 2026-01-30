<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PerpustakaanController;

Route::get("/", function () {
  return view("welcome");
});

Route::get("/gallery/index", function () {
  return view("gallery.index");
});

// Prefix untuk beri url tambahan di depan route yang di tampung dalam group
Route::prefix("data")->group(function () {
  // Route dengan parameter opsional & nilai default
  Route::get("/nama/{nama?}/{sekolah?}", function ($nama = "John Doe", $sekolah = "SMK Telkom") {
    return "<h1>Nama saya $nama, sekolah di $sekolah</h1>";
  });

  // Route::get('/siswa/{nama?}/{sekolah?}', [App\Http\Controllers\StudentController::class, 'index']);
});

// Route::get('/student', [StudentController::class, 'index']);
// Route::get('/student/{nama?}', [StudentController::class, 'show']);

Route::prefix("perpus")->group(function () {
  // Route::get('/index', [PerpustakaanController::class, 'index']);
  // Route::get('/tampil-buku', [PerpustakaanController::class, 'tampilBuku']);
  Route::resource('jurusan', JurusanController::class)->except([
    'show'
  ]);
});

// Route Student main data dataan
Route::prefix("student")->group(function () {
  Route::get("/index", [StudentController::class, "index"]);
  Route::get("/cekObject", [StudentController::class, "cekObject"]);
  Route::get("/insert", [StudentController::class, "insert"]);
  Route::get("/massAsignment", [StudentController::class, "massAsignment"]);
  Route::get("/update", [StudentController::class, "update"]);
  Route::get("/massUpdate", [StudentController::class, "massUpdate"]);
  Route::get("/delete", [StudentController::class, "delete"]);
  Route::get("/destroy", [StudentController::class, "destroy"]);
  Route::get("/massDelete", [StudentController::class, "massDelete"]);
  Route::get("/all", [StudentController::class, "all"]);
});

Route::prefix("jurusan")->group(function () {
  Route::get("/index", [JurusanController::class, "index"]);
  Route::get("/create", [JurusanController::class, "create"]);
  Route::post("/store", [JurusanController::class, "store"]);
  Route::get("/edit/{id}", [JurusanController::class, "edit"]);
  Route::put("/update/{id}", [JurusanController::class, "update"]);
  Route::delete("/delete/{id}", [JurusanController::class, "destroy"]);
});
