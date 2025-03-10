<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $totalPegawai = DB::table('pegawais')->count();

        return view('dashboard.admin.index', ['totalPegawai' => $totalPegawai]);
    }
}
