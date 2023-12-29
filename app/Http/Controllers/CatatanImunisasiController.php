<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CatatanImunisasi;
use App\Models\JadwalImunisasi;

class CatatanImunisasiController extends Controller
{
    public function home(){
        $users = User::all();

        return view('admin.catatan-imunisasi.home',[
            'users' => $users
        ]);
    }

    public function detail($id){
        $anak  = Anak::where('user_id',$id)->get();

        return view('admin.catatan-imunisasi.detail',[
            'anaks' => $anak
    ]);
    }

    public function detailAnak($id, $id_anak){

        $anak =  Anak::findOrFail($id_anak);
        $catatan = CatatanImunisasi::where('id_anak',$id_anak)->get();
        $getVaksin = JadwalImunisasi::all();
        

        return view('admin.catatan-imunisasi.add-imunisasi',[
            'catatans' => $catatan,
            'anak' => $anak,
            'vaksins' => $getVaksin
        ]);
    }

    public function store(Request $request, $id,$id_anak ){
        $catatan = CatatanImunisasi::create([
            'id_vaksin' => $request->jenisVaksin,
            'id_anak' => $id_anak,
            'usia_bayi' => 0,
            'tanggal_pemberian' => $request->tanggal_pemberian,
            'lokasi_pemberian' => $request->lokasi_pemberian
        ]);

        return redirect()->back()->with('success','Catatan berhasil ditambahkan');
    }



}
