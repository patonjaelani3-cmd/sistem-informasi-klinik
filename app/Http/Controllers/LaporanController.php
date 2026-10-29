<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index()
    {
        $totalPasien = DB::table('pasiens')->count();
        $totalDokter = DB::table('dokters')->count();
        $totalPendaftaran = DB::table('pendaftarans')->count();

        $pendaftarans = DB::table('pendaftarans')
            ->join('pasiens', 'pendaftarans.pasien_id', '=', 'pasiens.id')
            ->join('dokters', 'pendaftarans.dokter_id', '=', 'dokters.id')
            ->select(
                'pendaftarans.no_pendaftaran',
                'pendaftarans.tanggal_pendaftaran',
                'pendaftarans.keluhan',
                'pendaftarans.status',
                'pasiens.nama_pasien',
                'dokters.nama_dokter'
            )
            ->orderByDesc('pendaftarans.tanggal_pendaftaran')
            ->get();

        return view('laporan.index', compact(
            'totalPasien',
            'totalDokter',
            'totalPendaftaran',
            'pendaftarans'
        ));
    }
}