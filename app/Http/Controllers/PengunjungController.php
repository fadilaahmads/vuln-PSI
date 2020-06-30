<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
class PengunjungController extends Controller
{
    public function index()
    {
        $pengunjung = DB::table('pengunjung')->get();
        return view('pengunjung', ['pengunjung' => $pengunjung]);
    }
}
