<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
class SiswaController extends Controller
{
    //controller untuk memfetch data
    public function siswa(){
        $siswa = siswa::simplePaginate(20);
        return view('base.siswa',['siswa' => $siswa]);
    }

//=========================================================

    //controller untuk menambah data siswa
    public function tambahsis(){
        return view('content.tambah');
    }

    public function TambahSiswa(Request $request){
        $m = [
            'required' => 'input wajib di isi',
        ];

        $this->validate($request,[
            'nama' => 'required|string',
            'umur' => 'required|numeric',
        ],$m);

        siswa::create([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
        ]);

        return redirect('/siswa');
    }
//=============================================================
//controller untuk mengedit data siswa

public function Editsis($id){
    // $siswa = siswa::find($id);
    return view('content.edit',['siswa' => siswa::find($id)]);
}

public function EditSiswa(Request $request){
    $messages = [
        'required' => 'input wajib di isi'
    ];

    $this->validate($request,[
        'nama' => 'required|string',
        'umur' => 'required|numeric',
    ],$messages);

    $id = $request->input('id');
    $siswa = siswa::find($id);
    $siswa->nama = $request->input('nama');
    $siswa->umur = $request->input('umur');
    $siswa->save();

    return redirect('/siswa');

}

//=============================================================

//controller unutk menghapus siswa

public function hapussis($id){
    $siswa = siswa::find($id);
    $siswa->delete();

    return redirect('/siswa');
}
//=============================================================

//controller unutk mencari data siswa

public function serch(Request $request){
    $nama = $request->input('param');
$siswa = siswa::where('nama','like','%'.$nama.'%')->simplePaginate(20);

return view('base.siswa',['siswa' => $siswa ]);
}

}
