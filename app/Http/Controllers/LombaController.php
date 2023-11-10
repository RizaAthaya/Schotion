<?php

namespace App\Http\Controllers;

use App\Models\KategoriLomba;
use App\Models\Lomba;
use Illuminate\Http\Request;

class LombaController extends Controller
{
    /*====================== View ======================*/

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
            return redirect('/competition/create')->with('failed', 'Data lomba gagal ditambahkan.' . $th->getMessage());
        }

        return redirect('/competition')->with('success', 'Data lomba berhasil ditambahkan.');
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
            return redirect('/competition/edit/' . $id)->with('failed', 'Data lomba gagal diperbarui.' . $th->getMessage());
        }

        return redirect()->route('competition.show')->with('success', 'Data lomba berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $lomba = Lomba::find($id);
        $lomba->delete();

        return redirect('/competition')->with('success', 'lomba berhasil dihapus.');
    }
}
