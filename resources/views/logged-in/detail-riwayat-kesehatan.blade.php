@extends('layouts/layout')

@section('content')
<div class="container-layout flex flex-col gap-8 items-center mt-8 mb-8">
    <div class="flex items-center gap-4">
        {{-- <img class="inline-block h-16 w-16 rounded-full border"
            src="https://overreacted.io/static/profile-pic-c715447ce38098828758e525a1128b87.jpg" alt="Dan_Abromov" /> --}}
        <h1>{{$anak->nama}}</h1>
    </div>
    <section class="mx-auto w-full max-w-7xl px-4 py-4 flex flex-col gap-5">
        <div class="flex flex-col space-y-4 md:flex-row md:items-center md:justify-between md:space-y-0">
            <div>
                <h2 class="text-lg font-semibold">Catatan Imunisasi Sang Kecil</h2>
                <p class="mt-1 text-sm text-gray-700">
                    Ini adalah catatan
                </p>
            </div>
            {{-- <button type="button" id="showModal"
                class="rounded-md bg-teal-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                Tambahkan catatan
            </button> --}}
        </div>
        <div class="mt-6 flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-700">
                                        <span>Jenis Vaksin</span>
                                    </th>
                                    <th scope="col" class="px-12 py-3.5 text-left text-sm font-normal text-gray-700">
                                        Nama Bayi
                                    </th>
                                    <th scope="col" class="px-12 py-3.5 text-left text-sm font-normal text-gray-700">
                                        Umur
                                    </th>
                                    <th scope="col" class="px-12 py-3.5 text-left text-sm font-normal text-gray-700">
                                        Tanggal Pemberian
                                    </th>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-700">
                                        Lokasi Pemberian
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($catatans as $catatan)
                                    <tr>
                                        <td class="whitespace-nowrap px-4 py-4">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                       {{$catatan->vaksin->nama_vaksin}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-12 py-4">
                                            <div class="text-sm text-gray-900 ">{{$anak->nama}}</div>
                                        </td>
                                        <td class="whitespace-nowrap px-12 py-4">
                                            <div class="text-sm text-gray-900 ">1</div>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-4">
                                            <span
                                                class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                                {{$catatan->tanggal_pemberian}}
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-4">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                       {{$catatan->lokasi_pemberian}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="relative z-10 hidden" id="modalCatatan" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-800 bg-opacity-75 transition-opacity"></div>
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="mt-3 text-center sm:mt-0 sm:text-left space-y-5">
                            <div class="flex justify-between">
                                <h3 class="text-2xl font-semibold leading-6 text-gray-900" id="modal-title">
                                    Tambah Jadwal Imunisasi
                                </h3>
                                <button class="" id="closeModal">X</button>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
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