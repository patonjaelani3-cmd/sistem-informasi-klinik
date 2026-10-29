<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::latest()->get();

        return view('pasien.index', compact('pasiens'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'no_rm' => 'required|string|max:255|unique:pasiens,no_rm',
            'nama_pasien' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'nullable|string',
            'no_telepon' => 'nullable|string|max:20',
        ]);

        Pasien::create($data);

        return redirect()
            ->route('pasien.index')
            ->with('success', 'Data pasien berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $pasien = Pasien::findOrFail($id);

        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, string $id)
    {
        $pasien = Pasien::findOrFail($id);

        $data = $request->validate([
            'no_rm' => 'required|string|max:255|unique:pasiens,no_rm,' . $pasien->id,
            'nama_pasien' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'nullable|string',
            'no_telepon' => 'nullable|string|max:20',
        ]);

        $pasien->update($data);

        return redirect()
            ->route('pasien.index')
            ->with('success', 'Data pasien berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect()
            ->route('pasien.index')
            ->with('success', 'Data pasien berhasil dihapus.');
    }
}