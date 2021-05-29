<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function index()
    {
        $data = DB::table("tbl_jadwal")
            ->select("setup_kelas.nama_kelas","setup_pelajaran.nama_pelajaran", "data_guru.nama_guru")
            ->join("data_guru", "data_guru.id_guru", "tbl_jadwal.id_guru")
            ->join("setup_pelajaran", "setup_pelajaran.id_pelajaran", "tbl_jadwal.id_pelajaran")
            ->join("setup_kelas", "setup_kelas.id_kelas", "tbl_jadwal.id_kelas")
            ->get();

        return view("table-0011", compact('data'));
    }
}
