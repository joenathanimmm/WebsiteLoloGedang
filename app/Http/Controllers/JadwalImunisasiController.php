<?php

namespace App\Http\Controllers;

use App\Models\JadwalImunisasi;
use Illuminate\Http\Request;

class JadwalImunisasiController extends Controller
{
    public function home(){
        $jadwalImunisasi = JadwalImunisasi::all();

        return view('admin.jadwal.home',[
            'jadwals' => $jadwalImunisasi
        ]);
    }

    public function create(){
        return view('admin.jadwal.tambahJadwal');
    }

    public function store(Request $request){
        try {
            $createJadwal = JadwalImunisasi::create($request->all());
            return redirect()->route('admin.jadwal-imunisasi.home')->with('success', 'Jadwal berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->route('admin.jadwal-imunisasi.create')->with('error', 'Terjadi kesalahan saat menambahkan jadwal');
        }
        
    }

    public function updateView($id){
        $jadwalImunisasi = JadwalImunisasi::findOrFail($id);

        return view('admin.jadwal.updateJadwal',[
            'jadwal' => $jadwalImunisasi
        ]);
    }

    public function update(Request $request, $id){
        $jadwalImunisasi = JadwalImunisasi::findOrFail($id);

        if ($jadwalImunisasi) {
            $jadwalImunisasi->update($request->all());
            return redirect()->route('admin.jadwal-imunisasi.home')->with('success', 'Jadwal berhasil diperbarui');
        } else {
            return redirect()->route('admin.jadwal-imunisasi.home')->with('error', 'Jadwal tidak ditemukan');
        }
    }

    public function delete($id){
        $jadwalImunisasi = JadwalImunisasi::findOrFail($id);
        $jadwalImunisasi->delete();

        return redirect()->route('admin.jadwal-imunisasi.home')->with('success', 'Jadwal berhasil dihapus');
    }
    

    public function jadwalImun(){
        $jadwal = JadwalImunisasi::all();

        return view('layanan', [
            'jadwals' => $jadwal
        ]);
    }

}
