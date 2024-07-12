<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;

class MahasiswaController extends Controller
{
    public function tampilmahasiswa()
    {
        $mahasiswa = MahasiswaModel::select('*')
            ->get();

        return view('tampilmahasiswa',['mahasiswa'=>$mahasiswa]);
    }
    
    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa');
    }

    public function simpanmahasiswa(Request $request)
    {
        $santri = MahasiswaModel::create([
            'nm_mahasiswa' => $request->nm_mahasiswa,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('tampilmahasiswa');
    }

    public function ubahmahasiswa($id_mahasiswa)
    {
        $mahasiswa = MahasiswaModel::select('*')
        ->where('id_mahasiswa', $id_mahasiswa)
        ->get();

        return view('ubahmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function updatemahasiswa(Request $request)
    {
        $mahasiswa = MahasiswaModel::where('id_mahasiswa', 
        $request->id_mahasiswa)
        ->update([
        'nm_mahasiswa' => $request->nm_mahasiswa,
        'tmp_lahir' => $request->tmp_lahir,
        'tgl_lahir' => $request->tgl_lahir,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('tampilmahasiswa');
    }

    public function hapusmahasiswa($id_mahasiswa)
    {
        $mahasiswa = MahasiswaModel::where('id_mahasiswa', 
        $id_mahasiswa)->delete();

        return redirect()->route('tampilmahasiswa');
    }

}
