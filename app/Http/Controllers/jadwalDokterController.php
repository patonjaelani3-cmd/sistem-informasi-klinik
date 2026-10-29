<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{
    // Menampilkan semua jadwal dokter
    public function index()
    {
        $jadwals = JadwalDokter::with('dokter')
            ->orderBy('hari')
            ->get();

        return view('jadwal-dokter.index', compact('jadwals'));
    }

    // Menampilkan formulir tambah jadwal
    public function create()
    {
        $dokters = Dokter::all();

        return view('jadwal-dokter.create', compact('dokters'));
    }

    // Menyimpan jadwal dokter
    public function store(Request $request)
    {
        $validated = $request->validate([
            'dokter_id' => 'required|exists:dokters,id',
            'hari' => 'required|string|max:20',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
            'keterangan' => 'nullable|string|max:255',
        ]);

        JadwalDokter::create($validated);

        return redirect()
            ->route('jadwal-dokter.index')
            ->with('success', 'Jadwal dokter berhasil ditambahkan!');
    }

    // Menampilkan detail jadwal
    public function show(string $id)
    {
        $jadwal = JadwalDokter::with('dokter')->findOrFail($id);

        return view('jadwal-dokter.show', compact('jadwal'));
    }

    // Menampilkan formulir edit
    public function edit(string $id)
    {
        $jadwal = JadwalDokter::findOrFail($id);
        $dokters = Dokter::all();

        return view('jadwal-dokter.edit', compact('jadwal', 'dokters'));
    }

    // Memperbarui jadwal
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'dokter_id' => 'required|exists:dokters,id',
            'hari' => 'required|string|max:20',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $jadwal = JadwalDokter::findOrFail($id);
        $jadwal->update($validated);

        return redirect()
            ->route('jadwal-dokter.index')
            ->with('success', 'Jadwal dokter berhasil diperbarui!');
    }

    // Menghapus jadwal
    public function destroy(string $id)
    {
        JadwalDokter::findOrFail($id)->delete();

        return redirect()
            ->route('jadwal-dokter.index')
            ->with('success', 'Jadwal dokter berhasil dihapus!');
    }
}