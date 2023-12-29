<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|size:16|unique:users,NIK',
            'jenisKelamin' => 'required|string',
            'umur' => 'required',
            
        ], [
            'nama.required' => 'Kolom nama harus diisi.',
            'nik.required' => 'Kolom NIK harus diisi.',
            // 'nik.string' => 'Kolom NIK harus berupa string.',
            'nik.size' => 'Kolom NIK harus memiliki panjang 16 karakter.',
            'nik.unique' => 'NIK ini sudah digunakan.',
            'jenisKelamin.required' => 'Kolom jenis kelamin harus diisi.',
            'umur.required' => 'Kolom umur harus diisi.',
            // 'umur.integer' => 'Kolom umur harus berupa angka.',
        ]);

        $anak = Anak::create([
            'user_id' => auth()->user()->id,
            'nama' => $validatedData['nama'],
            'nik' => $validatedData['nik'],
            'jenisKelamin' => $validatedData['jenisKelamin'],
            'umur' => $validatedData['umur'],
            // 'password' => bcrypt($request->input('password')), // Sesuaikan dengan field password yang sesuai
        ]);

        return redirect()->route('profile-pengguna')->with('success', 'Anak berhasil di daftarkan');


    }
}
