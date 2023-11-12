<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Peran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /*====================== View ======================*/

    public function show()
    {
        try {
            $response = Pengguna::join('peran', 'Pengguna.id_peran', '=', 'peran.id_peran')
                ->select('Pengguna.*', 'peran.nama as role')
                ->get();
        } catch (\Throwable $th) {
            $response = $th->getMessage();
        }

        $data = [
            'pengguna' => $response
        ];

        return view('admin.account.show', $data);
    }

    public function create()
    {
        try {
            $response = Peran::all();
        } catch (\Throwable $th) {
            $response = $th->getMessage();
        }

        $data = [
            'peran' => $response
        ];

        return view('admin.account.create', $data);
    }

    public function edit($id)
    {
        try {
            $response = Pengguna::find($id);
            $other = Peran::all();
        } catch (\Throwable $th) {
            $response = $th->getMessage();
            dd($th->getMessage());
        }

        $data = [
            'pengguna' => $response,
            'peran' => $other
        ];

        return view('admin.account.edit', $data);
    }


    /*====================== Database ======================*/

    public function store(Request $request)
    {
        try {
            $validator = $request->validate([
                'nama_lengkap' => 'required|string',
                'email' => 'required|email',
                'password' => 'required|string|min:6',
                'id_peran' => 'required|exists:peran,id_peran',
            ]);

            $validator['password'] = Hash::make($validator['password']);

            Pengguna::create($validator);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect('/admin/account/create')->with('failed', 'Data Pengguna gagal ditambahkan.' . $th->getMessage());
        }

        return redirect('/admin/account')->with('success', 'Data Pengguna berhasil ditambahkan.');
    }


    public function update(Request $request, $id)
    {
        try {
            $validator = $request->validate([
                'nama_lengkap' => 'required|string',
                'email' => 'required|email',
                'password' => 'nullable|string|min:6',
                'id_peran' => 'required|exists:peran,id_peran',
            ]);

            if (!empty($validator['password'])) {
                $validator['password'] = Hash::make($validator['password']);
            } else {
                unset($validator['password']);
            }

            $updated = Pengguna::find($id);
            $updated->update($validator);
        } catch (\Throwable $th) {
            return redirect('/admin/account/edit/' . $id)->with('failed', 'Data Pengguna gagal diperbarui.' . $th->getMessage());
        }

        return redirect('/admin/account')->with('success', 'Data Pengguna berhasil diperbarui.');
    }



    public function destroy($id)
    {
        $Pengguna = Pengguna::find($id);
        $Pengguna->delete();

        return redirect('/admin/account')->with('success', 'Pengguna berhasil dihapus.');
    }
}
