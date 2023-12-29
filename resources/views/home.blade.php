@extends('layouts/layout')

@section('content')
    {{-- header --}}
    {{-- <section id="header" class="relative" style="background-image: url('./assets/HeaderPus.jpg'); background-size: cover">
        <div class="bg-black opacity-50 w-screen h-[600px] absolute z-1"></div>
        <div class="container-layout relative z-20">
            <div class="lg:flex lg:h-[600px] lg:items-center">
                <div class="max-w-xl text-start">
                    <h1 class="text-3xl font-bold sm:text-5xl text-white">
                        Website Puskesmas
                        <strong class="font-bold text-teal-500 sm:block"> Lolo Gedang </strong>
                    </h1>
                    <p class="mt-4 sm:text-xl/relaxed text-white">
                        Selamat Datang di Website Resmi Puskesmas Desa Lolo Gedang
                    </p>
                    <div class="mt-8 flex flex-wrap  gap-4">
                        <a class="button-primary" href="/registrasi">
                            Jadi Member Puskesmas
                        </a>
                        <a class="button-secondary" href="/informasi-layanan">
                            Jadwal Imunisasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="header" class="lg:flex lg:h-[600px] lg:items-center"
        style="background-image: url('./assets/HeaderPus.jpg'); background-size: cover">
        <div class="bg-black bg-opacity-40 w-full">
            <div class="container-layout">
                <div class="lg:flex lg:h-[600px] lg:items-center">
                    <div class="max-w-xl text-start">
                        <h1 class="text-3xl font-bold sm:text-5xl text-white">
                            Website Puskesmas
                            <strong class="font-bold text-teal-500 sm:block"> Lolo Gedang </strong>
                        </h1>
                        <p class="mt-4 sm:text-xl/relaxed text-white">
                            Selamat Datang di Website Resmi Puskesmas Desa Lolo Gedang
                        </p>
                        <div class="mt-8 flex flex-wrap  gap-4">
                            <a class="button-primary" href="/registrasi">
                                Jadi Member Puskesmas
                            </a>
                            <a class="button-secondary" href="/informasi-layanan">
                                Jadwal Imunisasi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end of header --}}

    {{-- profil puskesmas --}}
    <div class="container-layout flex flex-col items-center mt-8 mb-8 gap-6">
        <div class="flex flex-col gap-3 text-center">
            <h1 class="heading">Profil Puskesmas</h1>
            <p class="max-w-[600px] paragraph">Pada tahun 2015 Puskesmas Kecamatan Kemayoran berpindah lokasi ke Puskesmas
                Kelurahan Harapan Mulia sehubungan dengan Peraturan Gubernur Provinsi DKI Jakarta nomor 173 tahun 2015
                tentang Masa Transisi Pusat Kesehatan Masyarakat Menjadi Rumah Sakit Umum Kelas D yang berimbas gedung
                Puskesmas Kecamatan Kemayoran</p>

        </div>
        <a class="button-primary" href="/about">
            Pelajari Lebih Lanjut
        </a>
    </div>
    {{-- end of profil puskesmas --}}

    {{-- Items --}}
    <div class="bg-teal-600 pt-8 pb-8">
        <div class="container-layout ">
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 ">
                <div
                    class="block rounded-xl bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">

                    <h2 class="mt-2 font-bold">Pelayanan Medis</h2>
                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Mulai dari fasilitas kesehatan mendasar hingga unit-unit perawatan khusus, RS Santo Borromeus
                        dikenal
                        sebagai pusat medis aneka guna yang terus tumbuh untuk memenuhi tuntutan zaman
                    </p>
                </div>
                <div
                    class="block rounded-xl bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">

                    <h2 class="mt-2 font-bold">Rawat Inap</h2>
                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Kami berupaya memberikan pelayanan keperawatan yang menyeluruh sesuai kebutuhan pasien berdasarkan
                        visi,
                        misi dan falsafah keperawatan serta tanpa melupakan kode etik keperawatan
                    </p>
                </div>
                <div
                    class="block rounded-xl bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                    <h2 class="mt-2 font-bold">Penunjang Medis</h2>
                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Kami menyediakan ruang-ruang khusus kepada para pasien untuk menjalankan berbagai kenyamanan dan
                        senantiasa menyediakan kebutuhan yang senantiasa menjaga performa mereka.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- end of items --}}

    {{-- Layanan Publik --}}
    <div class="mt-8 mb-8 flex flex-col items-center gap-6">
        <h1 class="heading">Pelayanan Publik</h1>
        <div class="container-layout grid md:grid-cols-2 gap-4 h-[300px]">
            <a class="block" href="/informasi-layanan">
                <div class="lg:w-[600px] h-full rounded-xl relative grid place-items-center"
                    style="background-image: url('./assets/jadwal-imun.jpg');background-size: cover">
                    <div class="bg-black opacity-30 z-1 rounded-xl absolute w-full h-full"></div>
                    <h1 class="heading text-white z-10">Jadwal Layanan Imunisasi</h1>
                </div>

            </a>
            <a class="block" href="/login">
                <div class="lg:w-[600px] h-full rounded-xl relative grid place-items-center"
                    style="background-image: url('./assets/pendaftaran-online.jpg');background-size: cover">
                    <div class="bg-black opacity-30 z-1 rounded-xl absolute w-full h-full"></div>
                    <h1 class="heading text-white z-10">Pendaftaran Online</h1>
                </div>

            </a>
        </div>
    </div>
    {{-- end of Layanan Publik --}}
@endsection
