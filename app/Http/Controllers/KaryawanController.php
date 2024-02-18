<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;

class KaryawanController extends Controller
{
    // public function karyawanView() {
    //     return view('dashboard');
    // }
    public function addKaryawanView() {
        return view('addKaryawan');
    }

    public function addKaryawan(Request $request) {
        karyawan::create([
            'nama' => $request -> nama,
            'umur' => $request -> umur,
            'alamat' => $request -> alamat,
            'noTelp' => $request -> noTelp
        ]);
        return redirect('/dashboard');
    } 
    public function viewKaryawan() {
        $karyawans = karyawan::all();
        return view('dashboard') -> with('semuaKaryawan', $karyawans);
    }
    public function deleteKaryawan($id) {
        $karyawans = karyawan::find($id);
        $karyawans -> delete();
        return redirect('/dashboard');
    }
    public function editKaryawanView($id) {
        $karyawans = karyawan::find($id);
        return view('editKaryawan', compact('karyawans'));
    }
    public function editKaryawan(Request $request, $id) {
        $karyawans = karyawan::find($id);
        $karyawans -> update($request -> all());
        return redirect('/dashboard');
    }
}
