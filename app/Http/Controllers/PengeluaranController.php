<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
class PengeluaranController extends Controller
{
    public function index()
    {
        //total
        $totalJanuary =  DB::table('pengeluaran')->where('bulan','=','1')->get()->sum('biaya');
        $totalFebruary =  DB::table('pengeluaran')->where('bulan','=','2')->get()->sum('biaya');
        $totalMarch =  DB::table('pengeluaran')->where('bulan','=','3')->get()->sum('biaya');
        $totalApril =  DB::table('pengeluaran')->where('bulan','=','4')->get()->sum('biaya');
        $totalMay =  DB::table('pengeluaran')->where('bulan','=','5')->get()->sum('biaya');
        $totalJune =  DB::table('pengeluaran')->where('bulan','=','6')->get()->sum('biaya');
        $totalJuly =  DB::table('pengeluaran')->where('bulan','=','7')->get()->sum('biaya');
        $totalAugust =  DB::table('pengeluaran')->where('bulan','=','8')->get()->sum('biaya');
        $totalSeptember =  DB::table('pengeluaran')->where('bulan','=','9')->get()->sum('biaya');
        $totalOctober =  DB::table('pengeluaran')->where('bulan','=','10')->get()->sum('biaya');
        $totalNovember =  DB::table('pengeluaran')->where('bulan','=','11')->get()->sum('biaya');
        $totalDecember =  DB::table('pengeluaran')->where('bulan','=','12')->get()->sum('biaya');
        $totalTahun = DB::table('Pengeluaran')->where('tahun','=','2019')->get()->sum('biaya');

        return view('Pengeluaran',[
            'totalJanuary'=>$totalJanuary,
            'totalFebruary'=>$totalFebruary,
            'totalMarch'=>$totalMarch,
            'totalApril'=>$totalApril,
            'totalMay'=>$totalMay,
            'totalJune'=>$totalJune,
            'totalJuly'=>$totalJuly,
            'totalAugust'=>$totalAugust,
            'totalSeptember'=>$totalSeptember,
            'totalOctober'=>$totalOctober,
            'totalNovember'=>$totalNovember,
            'totalDecember'=>$totalDecember,
            'totalTahun'=>$totalTahun
            ]);
    }
    public function rata2()
    {
        //Mengambil data dari database dan membuat rata-rata
        $rata2 = DB::table('pengeluaran')->get()->avg('biaya');
        $rata2January =  DB::table('pengeluaran')->where('bulan','=','1')->get()->avg('biaya');
        $rata2February =  DB::table('pengeluaran')->where('bulan','=','2')->get()->avg('biaya');
        $rata2March =  DB::table('pengeluaran')->where('bulan','=','3')->get()->avg('biaya');
        $rata2April =  DB::table('pengeluaran')->where('bulan','=','4')->get()->avg('biaya');
        $rata2May=  DB::table('pengeluaran')->where('bulan','=','5')->get()->avg('biaya');
        $rata2June =  DB::table('pengeluaran')->where('bulan','=','6')->get()->avg('biaya');
        $rata2July =  DB::table('pengeluaran')->where('bulan','=','7')->get()->avg('biaya');
        $rata2August =  DB::table('pengeluaran')->where('bulan','=','8')->get()->avg('biaya');
        $rata2September =  DB::table('pengeluaran')->where('bulan','=','9')->get()->avg('biaya');
        $rata2October =  DB::table('pengeluaran')->where('bulan','=','10')->get()->avg('biaya');
        $rata2November =  DB::table('pengeluaran')->where('bulan','=','11')->get()->avg('biaya');
        $rata2December =  DB::table('pengeluaran')->where('bulan','=','12')->get()->avg('biaya');
        //Mempassing data ke view PengeluaranRata2.blade.php
        return view ('PengeluaranRata2',[
            'rata2'=>$rata2,
            'rata2January'=>$rata2January,
            'rata2February'=>$rata2February,
            'rata2March'=>$rata2March,
            'rata2April'=>$rata2April,
            'rata2May'=>$rata2May,
            'rata2June'=>$rata2June,
            'rata2July'=>$rata2July,
            'rata2August'=>$rata2August,
            'rata2September'=>$rata2September,
            'rata2October'=>$rata2October,
            'rata2November'=>$rata2November,
            'rata2December'=>$rata2December
            ]);
    }
    public function tertinggi()
    {
        $tertinggiTahun = DB::table('pengeluaran')->get()->max('biaya');
        $tertinggiJanuary =  DB::table('pengeluaran')->where('bulan','=','1')->get()->max('biaya');
        $tertinggiFebruary =  DB::table('pengeluaran')->where('bulan','=','2')->get()->max('biaya');
        $tertinggiMarch =  DB::table('pengeluaran')->where('bulan','=','3')->get()->max('biaya');
        $tertinggiApril =  DB::table('pengeluaran')->where('bulan','=','4')->get()->max('biaya');
        $tertinggiMay=  DB::table('pengeluaran')->where('bulan','=','5')->get()->max('biaya');
        $tertinggiJune =  DB::table('pengeluaran')->where('bulan','=','6')->get()->max('biaya');
        $tertinggiJuly =  DB::table('pengeluaran')->where('bulan','=','7')->get()->max('biaya');
        $tertinggiAugust =  DB::table('pengeluaran')->where('bulan','=','8')->get()->max('biaya');
        $tertinggiSeptember =  DB::table('pengeluaran')->where('bulan','=','9')->get()->max('biaya');
        $tertinggiOctober =  DB::table('pengeluaran')->where('bulan','=','10')->get()->max('biaya');
        $tertinggiNovember =  DB::table('pengeluaran')->where('bulan','=','11')->get()->max('biaya');
        $tertinggiDecember =  DB::table('pengeluaran')->where('bulan','=','12')->get()->max('biaya');
        //Mempassing data ke view PengeluaranRata2.blade.php
        return view ('PengeluaranTertinggi',[
            'tertinggiTahun'=>$tertinggiTahun,
            'tertinggiJanuary'=>$tertinggiJanuary,
            'tertinggiFebruary'=>$tertinggiFebruary,
            'tertinggiMarch'=>$tertinggiMarch,
            'tertinggiApril'=>$tertinggiApril,
            'tertinggiMay'=>$tertinggiMay,
            'tertinggiJune'=>$tertinggiJune,
            'tertinggiJuly'=>$tertinggiJuly,
            'tertinggiAugust'=>$tertinggiAugust,
            'tertinggiSeptember'=>$tertinggiSeptember,
            'tertinggiOctober'=>$tertinggiOctober,
            'tertinggiNovember'=>$tertinggiNovember,
            'tertinggiDecember'=>$tertinggiDecember
            ]);
    }
    public function terendah()
    {
        $terendahTahun = DB::table('pengeluaran')->get()->min('biaya');
        $terendahJanuary =  DB::table('pengeluaran')->where('bulan','=','1')->get()->min('biaya');
        $terendahFebruary =  DB::table('pengeluaran')->where('bulan','=','2')->get()->min('biaya');
        $terendahMarch =  DB::table('pengeluaran')->where('bulan','=','3')->get()->min('biaya');
        $terendahApril =  DB::table('pengeluaran')->where('bulan','=','4')->get()->min('biaya');
        $terendahMay=  DB::table('pengeluaran')->where('bulan','=','5')->get()->min('biaya');
        $terendahJune =  DB::table('pengeluaran')->where('bulan','=','6')->get()->min('biaya');
        $terendahJuly =  DB::table('pengeluaran')->where('bulan','=','7')->get()->min('biaya');
        $terendahAugust =  DB::table('pengeluaran')->where('bulan','=','8')->get()->min('biaya');
        $terendahSeptember =  DB::table('pengeluaran')->where('bulan','=','9')->get()->min('biaya');
        $terendahOctober =  DB::table('pengeluaran')->where('bulan','=','10')->get()->min('biaya');
        $terendahNovember =  DB::table('pengeluaran')->where('bulan','=','11')->get()->min('biaya');
        $terendahDecember =  DB::table('pengeluaran')->where('bulan','=','12')->get()->min('biaya');
        //Mempassing data ke view PengeluaranRata2.blade.php
        return view ('PengeluaranTerendah',[
            'terendahTahun'=>$terendahTahun,
            'terendahJanuary'=>$terendahJanuary,
            'terendahFebruary'=>$terendahFebruary,
            'terendahMarch'=>$terendahMarch,
            'terendahApril'=>$terendahApril,
            'terendahMay'=>$terendahMay,
            'terendahJune'=>$terendahJune,
            'terendahJuly'=>$terendahJuly,
            'terendahAugust'=>$terendahAugust,
            'terendahSeptember'=>$terendahSeptember,
            'terendahOctober'=>$terendahOctober,
            'terendahNovember'=>$terendahNovember,
            'terendahDecember'=>$terendahDecember
            ]);
    }
}
