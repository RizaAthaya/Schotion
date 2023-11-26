<?php

namespace App\Http\Controllers;

use App\Libraries\Response;
use App\Models\Beasiswa;
use App\Models\KategoriBeasiswa;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class BeasiswaController extends Controller
{
    /*====================== View ======================*/

    public function show()
    {
        try {
            $response = Beasiswa::join('kategori_beasiswa', 'beasiswa.id_kategori_beasiswa', '=', 'kategori_beasiswa.id_kategori_beasiswa')
                ->select('beasiswa.*', 'kategori_beasiswa.nama as kategori')
                ->get();
        } catch (\Throwable $th) {
            $response = $th->getMessage();
        }

        $data = [
            'beasiswa' => $response
        ];

        return view('admin.scholarship.show', $data);
    }

    public function create()
    {
        try {
            $response = KategoriBeasiswa::all();
        } catch (\Throwable $th) {
            $response = $th->getMessage();
        }

        $data = [
            'beasiswa' => $response
        ];

        return view('admin.scholarship.create', $data);
    }

    public function edit($id)
    {
        try {
            $response = Beasiswa::find($id);
            $other = KategoriBeasiswa::all();
        } catch (\Throwable $th) {
            $response = $th->getMessage();
            dd($th->getMessage());
        }

        $data = [
            'beasiswa' => $response,
            'kategori' => $other
        ];

        return view('admin.scholarship.edit', $data);
    }
    // ======================== view mahasiswa =================
    public function showScholarship()
    {
        $dataScholar = Beasiswa::with('kategori')->get();
        $categories = KategoriBeasiswa::all();

        return view('scholarship.index', ['scholarship' => $dataScholar, 'categories' => $categories]);
    }

    public function searchScholarship(Request $request)
    {
        try {
            // Ambil data dari input pencarian
            $searchTerm = $request->input('search');

            // Lakukan operasi pencarian sesuai kebutuhan Anda
            // Contoh: Ambil data dari database dengan menggunakan $searchTerm
            $searchResults = Beasiswa::where('nama', 'like', '%' . $searchTerm . '%')
                ->get();

            $dataScholar = [
                'scholarship' => $searchResults
            ];

            // Kembalikan hasil pencarian ke tampilan competition
            return view('scholarship.index', $dataScholar);
        } catch (\Throwable $th) {
            // Tangani kesalahan jika terjadi
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }

    public function showDetail($id)
    {
        try {
            // Logika untuk mendapatkan data beasiswa berdasarkan ID
            $scholarship = Beasiswa::findOrFail($id);

            $data = [
                'scholarship' => $scholarship,
            ];

            return view('scholarship.detail', $data);
        } catch (\Throwable $th) {
            // Tangani kesalahan jika terjadi, misalnya redirect atau tampilkan pesan kesalahan
            return redirect('/scholarship')->with('error', 'Gagal menampilkan detail beasiswa.');
        }
    }

    /*====================== Database ======================*/

    public function store(Request $request)
    {
        try {
            $validator = $request->validate([
                'nama' => 'required',
                'deskripsi' => 'required',
                'tanggal_mulai' => 'required|date',
                'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
                'penyelenggara' => 'required',
                'link_gambar' => 'required|url',
                'id_kategori_beasiswa' => 'required|exists:kategori_beasiswa,id_kategori_beasiswa',
            ]);

            Beasiswa::create($validator);
        } catch (\Throwable $th) {
            return redirect('/admin/scholarship/create')->with('failed', 'Data beasiswa gagal ditambahkan.' . $th->getMessage());
        }

        return redirect('/admin/scholarship')->with('success', 'Data beasiswa berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = $request->validate([
                'nama' => 'required',
                'deskripsi' => 'required',
                'tanggal_mulai' => 'required|date',
                'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
                'penyelenggara' => 'required',
                'link_gambar' => 'required|url',
                'id_kategori_beasiswa' => 'required|exists:kategori_beasiswa,id_kategori_beasiswa',
            ]);

            $updated = Beasiswa::find($id);
            $updated->update($validator);
        } catch (\Throwable $th) {
            return redirect('/admin/scholarship/edit/' . $id)->with('failed', 'Data beasiswa berhasil diperbarui.');
        }

        return redirect('/admin/scholarship')->with('success', 'Data beasiswa berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $beasiswa = Beasiswa::find($id);
        $beasiswa->delete();

        return redirect('/admin/scholarship')->with('success', 'Beasiswa berhasil dihapus.');
    }
}
