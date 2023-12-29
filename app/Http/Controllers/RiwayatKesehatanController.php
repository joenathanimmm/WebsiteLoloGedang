<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;
use App\Models\JadwalImunisasi;
use App\Models\CatatanImunisasi;

class RiwayatKesehatanController extends Controller
{
    public function home(){

        $getCatatan = Anak::where('user_id', auth()->user()->id)->get();

        return view('logged-in.riwayat-kesehatan',[
            'anaks' => $getCatatan
        ]);
    }

    public function detail($id){
        $anak =  Anak::findOrFail($id);
        $getCatatanImunisasi = CatatanImunisasi::where('id_anak',$id)->get();
       
        return view('logged-in.detail-riwayat-kesehatan',[
            'catatans' => $getCatatanImunisasi,
            'anak' => $anak
        ]);
    }
}
