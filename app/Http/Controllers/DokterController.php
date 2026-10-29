<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    // Menampilkan daftar dokter
    public function index()
    {
        $dokters = Dokter::all();

        return view('dokters.index', compact('dokters'));
    }

    // Menampilkan formulir tambah dokter
    public function create()
    {
        return view('dokters.create');
    }

    // Menyimpan data dokter
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_dokter' => 'required|string|max:255',
            'spesialis' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:50',
            'no_telepon' => 'required|string|max:20',
            'alamat' => 'required|string',
            'jadwal_praktik' => 'required|string|max:255',
        ]);

        $dokter = new Dokter();

        // Membuat kode dokter otomatis
        $dokter->kode_dokter = 'DOK-' . date('YmdHis') . rand(10, 99);

        // Mengisi data dokter
        $dokter->nama_dokter = $validated['nama_dokter'];
        $dokter->spesialis = $validated['spesialis'];
        $dokter->spesialisasi = $validated['spesialis'];
        $dokter->jenis_kelamin = $validated['jenis_kelamin'];
        $dokter->no_telepon = $validated['no_telepon'];
        $dokter->alamat = $validated['alamat'];
        $dokter->jadwal_praktik = $validated['jadwal_praktik'];

        // Menyimpan ke database
        $dokter->save();

        return redirect()
            ->route('dokters.index')
            ->with('success', 'Data dokter berhasil ditambahkan!');
    }

    // Menampilkan detail dokter
    public function show(string $id)
    {
        $dokter = Dokter::findOrFail($id);

        return view('dokters.show', compact('dokter'));
    }

    // Menampilkan formulir edit dokter
    public function edit(string $id)
    {
        $dokter = Dokter::findOrFail($id);

        return view('dokters.edit', compact('dokter'));
    }

    // Memperbarui data dokter
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_dokter' => 'required|string|max:255',
            'spesialis' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:50',
            'no_telepon' => 'required|string|max:20',
            'alamat' => 'required|string',
            'jadwal_praktik' => 'required|string|max:255',
        ]);

        $dokter = Dokter::findOrFail($id);

        $dokter->nama_dokter = $validated['nama_dokter'];
        $dokter->spesialis = $validated['spesialis'];
        $dokter->spesialisasi = $validated['spesialis'];
        $dokter->jenis_kelamin = $validated['jenis_kelamin'];
        $dokter->no_telepon = $validated['no_telepon'];
        $dokter->alamat = $validated['alamat'];
        $dokter->jadwal_praktik = $validated['jadwal_praktik'];

        $dokter->save();

        return redirect()
            ->route('dokters.index')
            ->with('success', 'Data dokter berhasil diperbarui!');
    }

    // Menghapus data dokter
    public function destroy(string $id)
    {
        $dokter = Dokter::findOrFail($id);

        $dokter->delete();

        return redirect()
            ->route('dokters.index')
            ->with('success', 'Data dokter berhasil dihapus!');
    }
}