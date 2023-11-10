<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class BeasiswaController extends Controller
{

    // Nampilin tabel
    public function showScholar()
    {
        $beasiswa = Beasiswa::select('nama', 'tanggal_mulai', 'tanggal_berakhir', 'penyelenggara', 'link_gambar', 'id_kategori_beasiswa')->get();
        return view('scholarInformation.showScholar', compact('beasiswa'));
    }

    // tambah
    public function createScholar()
    {
        return view('scholarInformation.createScholar');
    }

    public function store(Request $request)
    {

        try {
            // Validasi data yang diterima dari formulir
            $request->validate([
                'nama' => 'required',
                'deskripsi' => 'required',
                'tanggal_mulai' => 'required|date',
                'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
                'penyelenggara' => 'required',
                'link_gambar' => 'required|url',
                'id_kategori_beasiswa' => 'required|exists:kategori_beasiswa,id_kategori_beasiswa',
            ]);

            // Simpan data beasiswa ke dalam database
            Beasiswa::create([
                'nama' => $request->input('nama'),
                'deskripsi' => $request->input('deskripsi'),
                'tanggal_mulai' => $request->input('tanggal_mulai'),
                'tanggal_berakhir' => $request->input('tanggal_berakhir'),
                'penyelenggara' => $request->input('penyelenggara'),
                'link_gambar' => $request->input('link_gambar'),
                'id_kategori_beasiswa' => $request->input('id_kategori_beasiswa'),
            ]);
        } catch (\Throwable $th) {
            return redirect('/scholarInformation/createScholar')->with('failed', 'Data beasiswa gagal ditambahkan.' . $th);
        }


        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect('/scholarInformation')->with('success', 'Data beasiswa berhasil ditambahkan.');
    }

    // hapus
    public function destroy($id)
    {
        $beasiswa = Beasiswa::find($id);
        $beasiswa->delete();

        return redirect('/scholarInformation')->with('success', 'Beasiswa berhasil dihapus.');
    }
}
