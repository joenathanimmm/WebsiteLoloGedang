@extends('layouts/layout')

@section('content')
    {{-- hero --}}
    <section id="header" class="relative" style="background-image: url('./assets/HeaderPus.jpg'); background-size: cover">
        <div class="bg-black opacity-50 w-screen h-[300px] absolute z-1"></div>
        <div class="container-layout relative z-20">
            <div class="lg:flex lg:h-[300px] lg:items-center">
                <div class="max-w-xl text-start text-white flex flex-col gap-4">
                    <h1 class="text-3xl font-bold sm:text-5xl text-white">
                        Website Puskesmas
                        <strong class="font-bold text-teal-500 sm:block"> Lolo Gedang </strong>
                    </h1>
                    <h1 class="heading">S.M.A.R.T</h1>
                    <P>
                        (Sigap, Menarik, Antusias, Ramah, Teliti)</P>
                </div>
            </div>
        </div>
    </section>

    {{-- profil puskesmas --}}
    <div class="bg-gray-100">
        <div class="container-layout flex flex-col items-center pt-8 pb-8 gap-6">
            <div class="flex flex-col gap-3 text-center">
                <h1 class="heading">Profil Puskesmas</h1>
                <p class="max-w-[600px] paragraph">Puskesmas Lolo memiliki sarana kesehatan diantaranya Pustu, Poskesdes,
                    Polindes, sarana Upaya Kesehatan Bersumber daya Masyarakat (UKBM), sarana produksi dan distribusi
                    kefarmasian dan alat kesehatan.UKBM antara lain terdiri dari Pos Pelayanan Terpadu (Posyandu), Posbindu
                    (Pos
                    Pembinaan Terpadu), Pos Kesehatan Desa (Poskesdes) di Desa Siaga, Tanaman Obat Keluarga (Toga).
                    Untuk meningkatkan jangkauan pelayanan puskesmas terhadap masyarakat diwilayah kerjanya, puskesmas
                    didukung
                    oleh sarana pelayanan kesehatan berupa puskesmas pembantu disetiap desanya.</p>
            </div>
            <div class="flex flex-col gap-3 text-center">
                <h1 class="heading">Luas Wilayah</h1>
                <p class="max-w-[600px] paragraph">Puskesmas Lolo terletak di bagian timur Puskesmas Lolo denga ketinggian
                    800-1000 dlp.
                    Daerah ini beriklim tropis dengan suhu rata-rata sekitar 220 C </p>
            </div>
            <div class="flex flex-col gap-3 text-center">
                <h1 class="heading">Batas-batas wilayah Puskesmas Lolo</h1>
                <ul class="paragraph">
                    <li>Sebelah Utara : Jujun Kec. Keliling Danau</li>
                    <li>Sebelah Selatan : wilayah kerja Puskesmas Lempur</li>
                    <li>Sebelah Timur : wilayah kerja Puskesmas Bukit Kerman</li>
                    <li>Sebelah Barat : provinsi Bengkulu</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- end of profil puskesmas --}}

    {{-- visi dan misi --}}
    <div class="container-layout grid grid-cols-2 gap-4 pt-8 pb-8">
        <a class="rounded-xl flex flex-col items-center bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
            href="/accountant">
            <h2 class="mt-2 heading">Visi</h2>
            <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                Kami berupaya memberikan pelayanan keperawatan yang menyeluruh sesuai kebutuhan pasien berdasarkan
                visi,
                misi dan falsafah keperawatan serta tanpa melupakan kode etik keperawatan
            </p>
        </a>
        <a class="rounded-xl flex flex-col items-center bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
            href="/accountant">
            <h2 class="mt-2 heading">Misi</h2>
            <ul class="sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                <li>Memberikan pelayanan yang bermutu bagi masyarakat.</li>
                <li>Menjamin keselamatan dan kepuasan pelanggan dengan meningkatkan profesionalisme.</li>
                <li>Mengembangkan kerjasama antar unsur-unsur terkait bidang kesehatan dan lintas sektor</li>
            </ul>
        </a>
    </div>
    {{-- end of visi dan misi --}}

    {{-- Tujuan --}}
    <div class="bg-[#A3C4AE]">
        <div class="container-layout flex flex-col items-center pt-8 pb-8 gap-6">
            <h1 class="heading">Tujuan UPTD Puskesmas Lolo</h1>
            <ol class="paragraph text-center">
                <li> Memberikan pelayanan kesehatan melalui penyelenggaraan upaya kesehatan masyarakat dan upaya kesehatan
                    perseorangan, dengan lebih mengutamakan upaya promotif dan preventif, untuk mewujudkan masayarakat
                    Sampang
                    yang sehat serta Memelihara dan meningkatkan kesehatan serta mencegah dan menanggulangi timbulnya
                    masalah kesehatan dengan
                    sasaran keluarga, kelompok, dan masyarakat.</li>
            </ol>
        </div>
    </div>

    {{-- Tata nilai --}}
    <div class="flex flex-col items-center pt-8 pb-8 gap-6">
        <h1 class="heading">Tata Nilai UPTD Puskesmas Lolo (SMART)</h1>
        <div class="container-layout grid grid-cols-3 gap-8 ">
            <a class="rounded-xl flex flex-col items-center bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                href="/accountant">
                <h2 class="mt-2 heading">Sigap (S)</h2>
                <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Dalam memberikan pelayanan kesehatan, kami menekankan kecepatan dan kesiapan dalam menanggapi kebutuhan
                    pasien.</p>
            </a>
            <a class="rounded-xl flex flex-col items-center bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                href="/accountant">
                <h2 class="mt-2 heading">Menarik (M)</h2>
                <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Kami berkomitmen untuk menciptakan pengalaman pelayanan yang menarik, baik melalui interaksi positif
                    maupun penyampaian informasi yang menarik perhatian pasien.</p>

            </a>
            <a class="rounded-xl flex flex-col items-center bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                href="/accountant">
                <h2 class="mt-2 heading">Antusias (A)</h2>
                <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Semangat antusias menjadi bagian integral dari layanan kesehatan kami, memastikan setiap pasien
                    mendapatkan perawatan dengan semangat yang penuh dedikasi.</p>

            </a>
            <a class="rounded-xl flex flex-col items-center bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                href="/accountant">
                <h2 class="mt-2 heading">Ramah (R)</h2>
                <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Kami mengedepankan sikap ramah dalam setiap interaksi dengan pasien, menciptakan lingkungan yang nyaman
                    dan mendukung.</p>

            </a>
            <a class="rounded-xl flex flex-col items-center bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                href="/accountant">
                <h2 class="mt-2 heading">Teliti (T)</h2>
                <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Ketelitian menjadi prinsip utama dalam setiap langkah pelayanan kami, memastikan bahwa setiap tindakan
                    dan informasi disampaikan dengan akurat dan cermat.</p>

            </a>
        </div>
    </div>
@endsection
