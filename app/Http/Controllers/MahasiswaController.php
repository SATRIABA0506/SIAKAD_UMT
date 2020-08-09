<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        return view('Mahasiswa.mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
        return view('Mahasiswa.tambah_mahasiswa');
    }

    public function create(Request $request)
    {
    
        $messages = ['unique' => 'NIM sudah ada!'];

        $this->validate($request, [
            'nim' => 'unique:mahasiswa,nim'
        ], $messages);

        Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('sukses', 'Data Berhasil diinput!');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('Mahasiswa.edit_mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete($mahasiswa);
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil dihapus!');
    }
}
