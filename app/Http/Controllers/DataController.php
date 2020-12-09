<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DataController extends Controller
{
    public function data() {
        $data = "Data All data";
        return response()->json($data, 200);
    }

    public function dataAuth() {
        $data = "Welcome " . Auth::user()->name;
        return response()->json($data, 200);
    }
}