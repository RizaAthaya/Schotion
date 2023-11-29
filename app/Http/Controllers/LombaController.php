<?php

namespace App\Http\Controllers;

use App\Models\KategoriLomba;
use App\Models\Lomba;
use Illuminate\Http\Request;

class LombaController extends Controller
{
    /*====================== View Admin ======================*/

    public function show()
    {
        try {
            $response = Lomba::join('kategori_lomba', 'lomba.id_kategori_lomba', '=', 'kategori_lomba.id_kategori_lomba')
                ->select('lomba.*', 'kategori_lomba.nama as kategori')
                ->get();
        } catch (\Throwable $th) {
            $response = $th->getMessage();
        }

        $data = [
            'lomba' => $response
        ];

        return view('admin.competition.show', $data);
    }

    public function create()
    {
        try {
            $response = KategoriLomba::all();
        } catch (\Throwable $th) {
            $response = $th->getMessage();
        }

        $data = [
            'lomba' => $response
        ];

        return view('admin.competition.create', $data);
    }

    public function edit($id)
    {
        try {
            $response = Lomba::find($id);
            $other = KategoriLomba::all();
        } catch (\Throwable $th) {
            $response = $th->getMessage();
            dd($th->getMessage());
        }

        $data = [
            'lomba' => $response,
            'kategori' => $other
        ];

        return view('admin.competition.edit', $data);
    }

    /*====================== View Mahasiswa ======================*/


    public function showCompetition()
    {
        $dataCompetition = Lomba::with('kategori')->get();
        $categories = KategoriLomba::all(); // Mengambil semua kategori lomba

        return view('competition.index', ['competition' => $dataCompetition, 'categories' => $categories]);
    }

    public function searchCompetition(Request $request)
    {
        try {
            // Ambil data dari input pencarian
            $searchTerm = $request->input('search');

            // Lakukan operasi pencarian sesuai kebutuhan Anda
            // Contoh: Ambil data dari database dengan menggunakan $searchTerm
            $searchResults = Lomba::where('nama', 'like', '%' . $searchTerm . '%')
                ->get();

            $dataCompetition = [
                'competition' => $searchResults
            ];

            // Kembalikan hasil pencarian ke tampilan competition
            return view('competition', $dataCompetition);
        } catch (\Throwable $th) {
            // Tangani kesalahan jika terjadi
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }

    public function showDetail($id)
    {
        try {
            // Logika untuk mendapatkan data beasiswa berdasarkan ID
            $competition = Lomba::findOrFail($id);

            $data = [
                'competition' => $competition,
            ];

            return view('competition.detail', $data);
        } catch (\Throwable $th) {
            // Tangani kesalahan jika terjadi, misalnya redirect atau tampilkan pesan kesalahan
            return redirect('/competition')->with('error', 'Gagal menampilkan detail lomba.');
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
                'id_kategori_lomba' => 'required|exists:kategori_lomba,id_kategori_lomba',
            ]);

            Lomba::create($validator);
        } catch (\Throwable $th) {
            return redirect('/admin/competition/create')->with('failed', 'Data lomba gagal ditambahkan.' . $th->getMessage());
        }

        return redirect('/admin/competition')->with('success', 'Data lomba berhasil ditambahkan.');
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
                'id_kategori_lomba' => 'required|exists:kategori_lomba,id_kategori_lomba',
            ]);

            $updated = Lomba::find($id);
            $updated->update($validator);
        } catch (\Throwable $th) {
            return redirect('/admin/competition/edit/' . $id)->with('failed', 'Data lomba gagal diperbarui.' . $th->getMessage());
        }

        return redirect('/admin/competition')->with('success', 'Data lomba berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $lomba = Lomba::find($id);
        $lomba->delete();

        return redirect('/admin/competition')->with('success', 'lomba berhasil dihapus.');
    }
}
