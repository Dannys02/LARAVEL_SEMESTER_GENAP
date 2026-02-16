<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Major;

class MajorController extends Controller
{
    public function index() {
        $major = Major::all();
        return view('major.index', compact('major'));
    }
}
