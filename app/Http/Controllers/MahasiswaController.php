<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Tampilkan semua data (Bisa diakses Admin & Mahasiswa)
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(5);
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    // Form Tambah (Hanya Admin - diatur di Route nanti)
    public function create()
    {
        return view('mahasiswas.create');
    }

    // Simpan Data
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'jurusan' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    // Form Edit
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    // Update Data
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Data berhasil diupdate');
    }

    // Hapus Data
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Data berhasil dihapus');
    }
}