<?php

namespace App\Http\Controllers;

use App\Libraries\Response;
use App\Models\Beasiswa;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class BeasiswaController extends Controller
{

    // Nampilin tabel
    public function show()
    {
        try {
            // $beasiswa = Beasiswa::select('nama', 'tanggal_mulai', 'tanggal_berakhir', 'penyelenggara', 'link_gambar', 'id_kategori_beasiswa')->get();
            $response = Beasiswa::join('kategori_beasiswa', 'beasiswa.id_kategori_beasiswa', '=', 'kategori_beasiswa.id_kategori_beasiswa')->get();
        } catch (\Throwable $th) {
            $response = $th->getMessage();
        }

        $data = [
            'message' => 'Menampilkan semua beasiswa',
            'beasiswa' => $response
        ];

        return view('admin.scholarship.show', $data);
    }

    // tambah
    public function create()
    {
        return view('scholarship.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validator = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
            'penyelenggara' => 'required',
            'link_gambar' => 'required|url',
            'id_kategori_beasiswa' => 'required|exists:kategori_beasiswa,id_kategori_beasiswa',
        ]);

        try {
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
            return redirect('/scholarship/create')->with('failed', 'Data beasiswa gagal ditambahkan.' . $th);
        }

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect('/scholarship')->with('success', 'Data beasiswa berhasil ditambahkan.');
    }

    // hapus
    public function destroy($id)
    {
        $beasiswa = Beasiswa::find($id);
        $beasiswa->delete();

        return redirect('/scholarship')->with('success', 'Beasiswa berhasil dihapus.');
    }
}
