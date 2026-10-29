<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    // ==========================================
    // MENAMPILKAN DAFTAR PENDAFTARAN
    // ==========================================
    public function index()
    {
        $pendaftarans = DB::table('pendaftarans')
            ->join('pasiens', 'pendaftarans.pasien_id', '=', 'pasiens.id')
            ->join('dokters', 'pendaftarans.dokter_id', '=', 'dokters.id')
            ->select(
                'pendaftarans.*',
                'pasiens.nama_pasien',
                'pasiens.no_rm',
                'dokters.nama_dokter'
            )
            ->orderByDesc('pendaftarans.id')
            ->get();

        $pasiens = DB::table('pasiens')->get();
        $dokters = DB::table('dokters')->get();

        return view('pendaftaran.index', compact(
            'pendaftarans',
            'pasiens',
            'dokters'
        ));
    }


    // ==========================================
    // MENYIMPAN PENDAFTARAN BARU
    // ==========================================
    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'dokter_id' => 'required|exists:dokters,id',
            'tanggal_pendaftaran' => 'required|date',
            'keluhan' => 'required|string',
            'status' => 'nullable|in:Menunggu,Diperiksa,Selesai',
        ]);

        DB::table('pendaftarans')->insert([
            'no_pendaftaran' => 'REG-' . date('YmdHis'),
            'pasien_id' => $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'tanggal_pendaftaran' => $request->tanggal_pendaftaran,
            'keluhan' => $request->keluhan,
            'status' => $request->input('status', 'Menunggu'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('pendaftaran.index')
            ->with('success', 'Pendaftaran pasien berhasil disimpan.');
    }


    // ==========================================
    // MENAMPILKAN FORM EDIT
    // ==========================================
    public function edit($id)
    {
        $pendaftaran = DB::table('pendaftarans')
            ->where('id', $id)
            ->first();

        if (!$pendaftaran) {
            abort(404, 'Data pendaftaran tidak ditemukan.');
        }

        $pasiens = DB::table('pasiens')->get();
        $dokters = DB::table('dokters')->get();

        return view('pendaftaran.edit', compact(
            'pendaftaran',
            'pasiens',
            'dokters'
        ));
    }


    // ==========================================
    // MENYIMPAN PERUBAHAN DATA
    // ==========================================
    public function update(Request $request, $id)
{
    $request->validate([
        'pasien_id' => 'required|exists:pasiens,id',
        'dokter_id' => 'required|exists:dokters,id',
        'tanggal_pendaftaran' => 'required|date',
        'keluhan' => 'required|string',
        'status' => 'required|in:Menunggu,Diperiksa,Selesai',
    ]);

    $pendaftaran = DB::table('pendaftarans')
        ->where('id', $id)
        ->first();

    if (!$pendaftaran) {
        abort(404, 'Data pendaftaran tidak ditemukan.');
    }

    DB::table('pendaftarans')
        ->where('id', $id)
        ->update([
            'pasien_id' => $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'tanggal_pendaftaran' => $request->tanggal_pendaftaran,
            'keluhan' => $request->keluhan,
            'status' => $request->status,
            'updated_at' => now(),
        ]);

    return redirect()
        ->route('pendaftaran.index')
        ->with('success', 'Data pendaftaran berhasil diperbarui.');
}


    // ==========================================
    // MENGHAPUS PENDAFTARAN
    // ==========================================
    public function destroy($id)
    {
        $jumlah = DB::table('pendaftarans')
            ->where('id', $id)
            ->count();

        if ($jumlah === 0) {
            abort(404, 'Data pendaftaran tidak ditemukan.');
        }

        DB::table('pendaftarans')
            ->where('id', $id)
            ->delete();

        return redirect()
            ->route('pendaftaran.index')
            ->with('success', 'Data pendaftaran berhasil dihapus.');
    }
}