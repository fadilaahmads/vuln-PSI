<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Pengunjung;
use App\Exports\PengunjungExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class PengunjungController extends Controller
{
    public function index()
    {
        //total
        $totalJanuary =  DB::table('pengunjung')->where('bulan','=','1')->get()->sum('jumlah');
        $totalFebruary =  DB::table('pengunjung')->where('bulan','=','2')->get()->sum('jumlah');
        $totalMarch =  DB::table('pengunjung')->where('bulan','=','3')->get()->sum('jumlah');
        $totalApril =  DB::table('pengunjung')->where('bulan','=','4')->get()->sum('jumlah');
        $totalMay =  DB::table('pengunjung')->where('bulan','=','5')->get()->sum('jumlah');
        $totalJune =  DB::table('pengunjung')->where('bulan','=','6')->get()->sum('jumlah');
        $totalJuly =  DB::table('pengunjung')->where('bulan','=','7')->get()->sum('jumlah');
        $totalAugust =  DB::table('pengunjung')->where('bulan','=','8')->get()->sum('jumlah');
        $totalSeptember =  DB::table('pengunjung')->where('bulan','=','9')->get()->sum('jumlah');
        $totalOctober =  DB::table('pengunjung')->where('bulan','=','10')->get()->sum('jumlah');
        $totalNovember =  DB::table('pengunjung')->where('bulan','=','11')->get()->sum('jumlah');
        $totalDecember =  DB::table('pengunjung')->where('bulan','=','12')->get()->sum('jumlah');
        $totalTahun = DB::table('pengunjung')->where('tahun','=','2019')->get()->sum('jumlah');

        return view('pengunjung',[
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
        $rata2 = DB::table('pengunjung')->get()->avg('jumlah');
        $rata2January =  DB::table('pengunjung')->where('bulan','=','1')->get()->avg('jumlah');
        $rata2February =  DB::table('pengunjung')->where('bulan','=','2')->get()->avg('jumlah');
        $rata2March =  DB::table('pengunjung')->where('bulan','=','3')->get()->avg('jumlah');
        $rata2April =  DB::table('pengunjung')->where('bulan','=','4')->get()->avg('jumlah');
        $rata2May=  DB::table('pengunjung')->where('bulan','=','5')->get()->avg('jumlah');
        $rata2June =  DB::table('pengunjung')->where('bulan','=','6')->get()->avg('jumlah');
        $rata2July =  DB::table('pengunjung')->where('bulan','=','7')->get()->avg('jumlah');
        $rata2August =  DB::table('pengunjung')->where('bulan','=','8')->get()->avg('jumlah');
        $rata2September =  DB::table('pengunjung')->where('bulan','=','9')->get()->avg('jumlah');
        $rata2October =  DB::table('pengunjung')->where('bulan','=','10')->get()->avg('jumlah');
        $rata2November =  DB::table('pengunjung')->where('bulan','=','11')->get()->avg('jumlah');
        $rata2December =  DB::table('pengunjung')->where('bulan','=','12')->get()->avg('jumlah');
        //Mempassing data ke view pengunjungRata2.blade.php
        return view ('pengunjungRata2',[
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
        $tertinggiTahun = DB::table('pengunjung')->get()->max('jumlah');
        $tertinggiJanuary =  DB::table('pengunjung')->where('bulan','=','1')->get()->max('jumlah');
        $tertinggiFebruary =  DB::table('pengunjung')->where('bulan','=','2')->get()->max('jumlah');
        $tertinggiMarch =  DB::table('pengunjung')->where('bulan','=','3')->get()->max('jumlah');
        $tertinggiApril =  DB::table('pengunjung')->where('bulan','=','4')->get()->max('jumlah');
        $tertinggiMay=  DB::table('pengunjung')->where('bulan','=','5')->get()->max('jumlah');
        $tertinggiJune =  DB::table('pengunjung')->where('bulan','=','6')->get()->max('jumlah');
        $tertinggiJuly =  DB::table('pengunjung')->where('bulan','=','7')->get()->max('jumlah');
        $tertinggiAugust =  DB::table('pengunjung')->where('bulan','=','8')->get()->max('jumlah');
        $tertinggiSeptember =  DB::table('pengunjung')->where('bulan','=','9')->get()->max('jumlah');
        $tertinggiOctober =  DB::table('pengunjung')->where('bulan','=','10')->get()->max('jumlah');
        $tertinggiNovember =  DB::table('pengunjung')->where('bulan','=','11')->get()->max('jumlah');
        $tertinggiDecember =  DB::table('pengunjung')->where('bulan','=','12')->get()->max('jumlah');
        //Mempassing data ke view pengunjungRata2.blade.php
        return view ('pengunjungTertinggi',[
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
        $terendahTahun = DB::table('pengunjung')->get()->min('jumlah');
        $terendahJanuary =  DB::table('pengunjung')->where('bulan','=','1')->get()->min('jumlah');
        $terendahFebruary =  DB::table('pengunjung')->where('bulan','=','2')->get()->min('jumlah');
        $terendahMarch =  DB::table('pengunjung')->where('bulan','=','3')->get()->min('jumlah');
        $terendahApril =  DB::table('pengunjung')->where('bulan','=','4')->get()->min('jumlah');
        $terendahMay=  DB::table('pengunjung')->where('bulan','=','5')->get()->min('jumlah');
        $terendahJune =  DB::table('pengunjung')->where('bulan','=','6')->get()->min('jumlah');
        $terendahJuly =  DB::table('pengunjung')->where('bulan','=','7')->get()->min('jumlah');
        $terendahAugust =  DB::table('pengunjung')->where('bulan','=','8')->get()->min('jumlah');
        $terendahSeptember =  DB::table('pengunjung')->where('bulan','=','9')->get()->min('jumlah');
        $terendahOctober =  DB::table('pengunjung')->where('bulan','=','10')->get()->min('jumlah');
        $terendahNovember =  DB::table('pengunjung')->where('bulan','=','11')->get()->min('jumlah');
        $terendahDecember =  DB::table('pengunjung')->where('bulan','=','12')->get()->min('jumlah');
        //Mempassing data ke view pengunjungRata2.blade.php
        return view ('pengunjungTerendah',[
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
    public function export_excel()
    {
        return Excel::download(new PengunjungExport, 'Data Pengunjung XploreJogja.xlsx');
    }
    
}
