<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Pendapatan;

class PendapatanController extends Controller
{ 
    public function index()
    {
       //$pendapatan = DB::table('pendapatan')->get();
       $pendapatan=Pendapatan::all();
       return view('index', ['pendapatan' => $pendapatan]);
       //return response()->json(["data"=>$pendapatan]);
    }
}
