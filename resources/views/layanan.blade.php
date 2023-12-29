@extends('layouts/layout')

@section('content')
    <div class="container-layout flex flex-col  gap-8  mt-8 mb-8">
        <div class="flex gap-8">
            <img src="./assets/Imunisasi.jpg" alt="">
            <div class="flex items-start flex-col gap-4 justify-center">
                <h1 class="heading ">Imunisasi</h1>
                <p class="paragraph"> Imunisasi pada anak kecil adalah proses memberikan suntikan atau tetesan khusus yang
                    disebut vaksin untuk melindungi mereka dari penyakit. Vaksin mengandung bahan-bahan yang membantu tubuh
                    anak mengenali dan melawan penyakit, sehingga anak menjadi lebih kuat dan terhindar dari penyakit yang
                    berbahaya. Imunisasi adalah cara yang penting dan efektif untuk menjaga anak tetap sehat dan mencegah
                    penyebaran penyakit di antara mereka.</p>
                <a href="/daftar-imunisasi" class="button-primary">
                    Daftar Imunisasi Anak
                </a>
            </div>
        </div>
        <div class="flex items-start flex-col gap-4">
            <h1 class="heading ">Jadwal Imunisasi Anak</h1>
            {{-- @include('ui/jadwal-imun') --}}
            <table class="divide-y-2 divide-gray-200 bg-white text-sm">
                <thead class="ltr:text-left rtl:text-right">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama Vaksin</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Usia Bayi</th>
                    </tr>
                </thead>
            
                <tbody class="divide-y divide-gray-200">
                    @foreach ($jadwals as $jadwal)
                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $jadwal->nama_vaksin }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $jadwal->usia_bayi }}</td>
                        </tr>
                    @endforeach
            
                </tbody>
            </table>            
        </div>
    </div>
@endsection
