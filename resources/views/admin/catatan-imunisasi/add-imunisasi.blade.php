<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="relative">

    @include('partials.sidebar')
    <div class="p-4 sm:ml-64">
        @if(session('success'))
        <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ms-3 text-sm font-medium">
                {!! session('success') !!}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif

    
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
                    <button type="button" id="showModal"
                        class="rounded-md bg-teal-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                        Tambahkan catatan
                    </button>
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
                                    <div class="w-full h-px flex-1 bg-gray-200"></div>
                                    <form action="{{route('tambah-catatan.imunisasi',['id' => $anak->user_id, 'id_anak' => $anak->id])}}" method="POST" id="">
                                        @method('POST')
                                        @csrf
                                        <div class="space-y-5">
                                            <div>
                                                <label for="jenisVaksin" class="block text-sm font-medium text-gray-900">
                                                    Jenis Vaksin
                                                </label>
                                               
    
                                                <select name="jenisVaksin" id="jenisVaksin" required
                                                    class="mt-1.5 p-2 w-full rounded-lg border border-gray-300 text-gray-700 sm:text-sm">
                                                    <option value="">Pilih Jenis Vaksin</option>
                                                    @foreach ($vaksins as $vaksin)
                                                        <option value="{{ $vaksin->id }}">{{ $vaksin->nama_vaksin }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            {{-- <div>
                                                <label for="usia_bayi" class="block text-sm font-medium text-gray-900">
                                                    Usia Bayi
                                                </label>
    
                                                <input name="usia_bayi" id="usia_bay" type="text"
                                                    placeholder="Masukan usia bayi saat ini" required
                                                    class="mt-1.5 p-2 w-full rounded-lg border border-gray-300 text-gray-700 sm:text-sm" />
                                            </div> --}}
                                            <div>
                                                <label for="tanggalVaksin" class="block text-sm font-medium text-gray-900">
                                                    Pilih Tanggal
                                                </label>
    
                                                <input name="tanggal_pemberian" id="tanggalVaksin" type="date" required
                                                    class="mt-1.5 p-2 w-full rounded-lg border border-gray-300 text-gray-700 sm:text-sm" />
    
                                            </div>
                                            <div>
                                                <label for="lokasiPemberian" class="block text-sm font-medium text-gray-900">
                                                    Lokasi Pemberian
                                                </label>
    
                                                <input name="lokasi_pemberian" id="lokasiPemberian" type="text"
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
</body>
</html>