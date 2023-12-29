@extends('layouts/layout')

@section('content')
    <div action="" class="container-layout mt-8 mb-8">
        @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.293 5.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.293a1 1 0 111.414-1.414L10 8.586l4.293-4.293z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
        @endif
        <div class="space-x-6 grid grid-cols-2">
            <form action="{{route('update.profile-pengguna')}}" method="POST" >
                @method('put')
                @csrf
                <div class="space-y-4 ">
                    <h1 class="heading">Profile Wali</h1>
                    {{-- <label class="sr-only" for="fotoWali">Foto</label>
                    <div class="relative w-24 h-20 rounded-full overflow-hidden">
                        <img src="./assets/defaultprofile.jpg" class="" alt="">
                    </div> --}}
                    {{-- <input class="w-full rounded-lg  p-3 text-sm"  type="file"
                        accept="image/*" id="fotoWali" name="fotoWali" /> --}}
                    {{-- @include('forms/form-pendaftaran') --}}
                    <div class="space-y-4">
                        <div>
                            <label class="" for="nama">Nama</label>
                            <input class="w-full rounded-lg border border-gray-200 p-3 text-sm" placeholder="Masukkan nama..." type="text"
                                id="nama" name="nama" required value="{{$users->name}}"/>
                        </div>
                        <div>
                            <label class="" for="nik">NIK</label>
                            <h1 class="w-full   p-3 text-sm">{{$users->NIK}}</h1>
                        </div>
                        <div>
                            <label for="jenisKelamin" class="block text-sm font-medium text-gray-900">Jenis Kelamin</label>
                    
                            <select required name="jenisKelamin" id="jenisKelamin"
                                class="w-full rounded-lg border border-gray-200 p-3 text-sm">
                                <option value="">Pilih Kelamin</option>
                                <option value="Laki-laki">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div>
                            <label class="" for="umur">Umur</label>
                            <input required class="w-full rounded-lg border border-gray-200 p-3 text-sm" placeholder="Masukkan Umur..."
                                type="text" pattern="[0-9]*" name="umur"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="umur" value="{{$users->umur}}" />
                        </div>
                        <div>
                            <label class="" for="alamat">Alamat</label>
                            <input required class="w-full rounded-lg border border-gray-200 p-3 text-sm" placeholder="Masukkan alamat..."
                                type="text" id="alamat" name="alamat" value="{{$users->alamat}}" />
                        </div>
                    </div>
                    <button class="button-primary" type="submit">Update Profil Wali </button>
                </div>
            </form>
            <div class="relative overflow-x-auto space-y-4 ">
                <h1 class="heading">Daftar Anak</h1>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-[#87CDE6]">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Anak
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Usia
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Kelamin
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Action
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anaks as $anak)
                            
                      
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$anak->nama}}
                            </th>
                            <td class="px-6 py-4">
                                {{$anak->umur}} Bulan
                            </td>
                            <th scope="col" class="px-6 py-3">
                                {{$anak->jenisKelamin}}
                            </th>
                            
                            {{-- <td class="px-6 py-4">
                                <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                            </td> --}}
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const formWali = document.getElementById('form-wali');
            const formPasien = document.getElementById('form-pasien');

            // Function to handle form submission
            function handleFormSubmit(event) {
                event.preventDefault(); // Prevent the default form submission
                const formData = new FormData(event.target);

                // Log formData entries
                for (let [key, value] of formData.entries()) {
                    console.log(key, value);
                }
            }

            formWali.addEventListener('submit', handleFormSubmit);
            formPasien.addEventListener('submit', handleFormSubmit);
        });
    </script>
@endsection
