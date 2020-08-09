<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matkul;

class MatkulController extends Controller
{
    public function matkul()
    {
        $matkul = Matkul::all();
        return view('Matkul.matkul', ['matkul' => $matkul]);
    }

    public function tambah()
    {
        return view('Matkul.tambah_matkul');
    }

    public function create(Request $request)
    {
    
        $messages = ['unique' => 'Kode Matakuliah sudah ada!'];

        $this->validate($request, [
            'kode_matakuliah' => 'unique:matakuliah,kode_matakuliah'
        ], $messages);

        Matkul::create($request->all());
        return redirect('/matkul')->with('sukses', 'Data Berhasil diinput!');
    }

    public function edit($id)
    {
        $matkul = Matkul::find($id);
        return view('Matkul.edit_matkul', ['matkul' => $matkul]);
    }

    public function update(Request $request, $id)
    {
        $matkul = Matkul::find($id);
        $matkul->update($request->all());
        return redirect('/matkul')->with('sukses', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $matkul = Matkul::find($id);
        $matkul->delete($matkul);
        return redirect('/matkul')->with('sukses', 'Data berhasil dihapus!');
    }
}