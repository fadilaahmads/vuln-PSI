<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendapatan;

class PendapatanController extends Controller
{ 
    public function index()
    {
        $pendapatan = DB::tabel('pendapatan')->get();
        return view('index', ['pendapatan' => $pendapatan]);
    }
}
