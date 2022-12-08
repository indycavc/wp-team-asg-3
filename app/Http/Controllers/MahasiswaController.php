<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $mahasiswas = Mahasiswa::all();
        return view('index', compact('mahasiswas'));
    }

    public function form(){
        return view('form-pendaftaran');
    }

    public function prosesForm(Request $request){
        $request->validate([
            'nim' => 'required|size:10',
            'nama' => 'required|min:4|max:50',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'alamat' => ''
        ]);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();
        return redirect()->route('index')->with('danger', "data invalid");
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa-edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id){
        $validateData = $request->validate([
            'nama' => 'required|min:4|max:50',
            'jurusan' => 'required',
            'alamat' => ''
        ]);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($validateData);
        return redirect()->route('index')->with('success', "Update data $mahasiswa->nama berhasil");
    }

    public function destroy($id){
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('index')->with('success',"Delete data $data->nama berhasil");
    }
}
