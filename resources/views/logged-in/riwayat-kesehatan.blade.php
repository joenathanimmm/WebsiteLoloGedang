{{-- @php
    $vaksin = [
        'Hepatitis B' => 'kurang dari 1 hari (1x24 jam)',
        'Vaksin DPT-HB-Hib 3' => '4 bulan',
        'Vaksin BCG' => '0-1 bulan',
        'Vaksin Polio Tetes 4' => '4 bulan',
        'Vaksin Polio Tetes 1' => '0-1 bulan',
        'Vaksin Polio Suntik (IPV)' => '4 bulan',
        'Vaksin DPT-HB-Hib 1' => '2 bulan',
        'Vaksin Campak-Rubella (MR)' => '9 bulan',
        'Vaksin Polio Tetes 2' => '2 bulan',
        'Vaksin DPT-HibHB Lanjutan' => '11 bulan',
        'Vaksin DPT-HB-Hib 2' => '3 bulan',
        'Vaksin Polio Tetes 3' => '3 bulan',
    ];
@endphp --}}

@extends('layouts/layout')

@section('content')
    <div class="container-layout flex flex-col gap-8 items-center mt-8 mb-8">
        {{-- <div class="flex items-center gap-4">
            <img class="inline-block h-16 w-16 rounded-full border"
                src="https://overreacted.io/static/profile-pic-c715447ce38098828758e525a1128b87.jpg" alt="Dan_Abromov" />
            <h1>Indah D Ardha</h1>
        </div> --}}
        <section class="mx-auto w-full max-w-7xl px-4 py-4 flex flex-col gap-5">
            <div class="flex flex-col space-y-4 md:flex-row md:items-center md:justify-between md:space-y-0">
                <div>
                    <h2 class="text-lg font-semibold">Cek Catatan Imunisasi Sang Kecil</h2>
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
                                        <th scope="col" class="px-8 py-3.5 text-left text-sm font-normal text-gray-700">
                                            <span>Nama</span>
                                        </th>
                                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-700">
                                            Usia Bayi
                                        </th>
                                       
                                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-700">
                                            Jenis Kelamin
                                        </th>
                                        <th scope="col" class="px-12 py-3.5 text-left text-sm font-normal text-gray-700">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($anaks as $anak )
                                        <tr>
                                            <td class="whitespace-nowrap px-4 py-4">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$anak->nama}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        
                                            <td class="whitespace-nowrap px-4 py-4">
                                                <div class="text-sm text-gray-900 ">2</div>
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-4">
                                                <div class="text-sm text-gray-900 ">{{$anak->jenisKelamin}}</div>
                                            </td>
                                            <td class="whitespace-nowrap px-12 py-4">
                                                <a href="{{route('riwayat-kesehatan.detail',$anak->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
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
                                <div class="w-full h-px flex-1 bg-gray-200"></div>
                                <form action="#" method="POST" id="catatanImunisasi">
                                    <div class="space-y-5">
                                        <div>
                                            <label for="jenisVaksin" class="block text-sm font-medium text-gray-900">
                                                Jenis Vaksin
                                            </label>

                                            <select name="jenisVaksin" id="jenisVaksin" required
                                                class="mt-1.5 p-2 w-full rounded-lg border border-gray-300 text-gray-700 sm:text-sm">
                                                <option value="">Pilih Jenis Vaksin</option>
                                                {{-- @foreach ($vaksin as $namaVaksin => $usiaBayi)
                                                    <option value="{{ $namaVaksin }}">{{ $namaVaksin }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                        <div>
                                            <label for="tanggalVaksin" class="block text-sm font-medium text-gray-900">
                                                Pilih Tanggal
                                            </label>

                                            <input name="tanggalVaksin" id="tanggalVaksin" type="date" required
                                                class="mt-1.5 p-2 w-full rounded-lg border border-gray-300 text-gray-700 sm:text-sm" />

                                        </div>
                                        <div>
                                            <label for="lokasiPemberian" class="block text-sm font-medium text-gray-900">
                                                Lokasi Pemberian
                                            </label>

                                            <input name="lokasiPemberian" id="lokasiPemberian" type="text"
                                                placeholder="Masukkan Lokasi" required
                                                class="mt-1.5 p-2 w-full rounded-lg border border-gray-300 text-gray-700 sm:text-sm" />

                                        </div>

                                        <button type="submit"
                                            class="inline-flex w-full items-center justify-center rounded-md bg-teal-600 px-3.5 py-2.5 font-semibold leading-7 text-white hover:bg-black/80">
                                            Tambah Catatan
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="ml-2">
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const showModalButton = document.querySelector(
                '#showModal'); // Adjust this selector to your "show modal" button
            const closeModalButton = document.querySelector('#closeModal'); // Your close button
            const modal = document.querySelector('#modalCatatan'); // Your modal
            const form = document.querySelector('#catatanImunisasi'); // Your

            // Function to toggle the modal
            const toggleModal = () => {
                modal.classList.toggle('hidden');
            };

            // Event listeners
            showModalButton.addEventListener('click', toggleModal);
            closeModalButton.addEventListener('click', toggleModal);

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                const formData = new FormData(form);
                // Now formData contains the form data

                // Example: Log formData entries
                for (let [key, value] of formData.entries()) {
                    console.log(key, value);
                }

                // Here you can handle the formData, e.g., send it via AJAX
            });
        });
    </script>
@endsection
