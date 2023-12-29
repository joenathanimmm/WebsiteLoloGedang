<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('NIK');

        $nik = $request->input('NIK');

        // Temukan pengguna berdasarkan NIK
        $user = User::where('NIK', $nik)->first();

        if ($user) {
            // Masuk sebagai pengguna dengan NIK yang sesuai
            Auth::loginUsingId($user->id);
            return redirect()->intended('/profil-pengguna');
        }

        // Jika NIK tidak valid, kembalikan ke halaman login dengan pesan error
        return back()->withErrors(['NIK' => 'NIK yang Anda masukkan tidak valid.']);
    }

    public function registrasi(Request $request){
        // Validasi input dari form
        
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|size:16|unique:users,NIK',
            'jenisKelamin' => 'required|string',
            'umur' => 'required|integer',
            'alamat' => 'required|string',
        ], [
            'nama.required' => 'Kolom nama harus diisi.',
            'nik.required' => 'Kolom NIK harus diisi.',
            // 'nik.string' => 'Kolom NIK harus berupa string.',
            'nik.size' => 'Kolom NIK harus memiliki panjang 16 karakter.',
            'nik.unique' => 'NIK ini sudah digunakan.',
            'jenisKelamin.required' => 'Kolom jenis kelamin harus diisi.',
            'umur.required' => 'Kolom umur harus diisi.',
            'umur.integer' => 'Kolom umur harus berupa angka.',
            'alamat.required' => 'Kolom alamat harus diisi.',
        ]);

        // Simpan data pendaftaran ke dalam tabel "users"
        User::create([
            'name' => $validatedData['nama'],
            'NIK' => $validatedData['nik'],
            'jenis_kelamin' => $validatedData['jenisKelamin'],
            'umur' => $validatedData['umur'],
            'alamat' => $validatedData['alamat'],
            'email' => $request->input('email'), // Sesuaikan dengan field email yang sesuai
            // 'password' => bcrypt($request->input('password')), // Sesuaikan dengan field password yang sesuai
        ]);

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil.');


    }


    public function profilePengguna(){
        $user = Auth::user();

        $getAnak = Anak::where('user_id',$user->id)->get();

    

        return view('logged-in.profil-pengguna',[
            'users' => $user,
            'anaks' => $getAnak 
        ]);
       
    }

    public function updatePengguna(Request $request){
        // Validasi input dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jenisKelamin' => 'required|string',
            'umur' => 'required|integer',
            'alamat' => 'required|string',
        ]);

        // Mengambil data user yang sedang login
        
        
        $user = User::findOrFail(auth()->user()->id);


        // Update data profil wali
        $user->update([
            'name' => $validatedData['nama'],
            'jenis_kelamin' => $validatedData['jenisKelamin'],
            'umur' => $validatedData['umur'],
            'alamat' => $validatedData['alamat'],
        ]);

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('profile-pengguna')->with('success', 'Profil berhasil diperbarui.');
    }

    public function adminLogin(Request $request){
        // Validasi data login
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, redirect ke halaman yang sesuai
            return redirect()->intended('admin');
        } else {
            // Jika otentikasi gagal, kembali ke halaman login
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
