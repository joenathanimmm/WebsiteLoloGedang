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
        {{-- <h1 class="text-2xl font-semibold mb-4">This admin dashboard</h1> --}}
        <!-- Isi konten dashboard lainnya -->
        @if(session('success'))
        <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ms-3 text-sm font-medium">
                {!! session('success') !!}
            </div>
            
        </div>
        @endif

        <div>
            <h1 class="text-2xl font-semibold mb-4">Jadwal Imunisasi</h1>
        </div>
        <div>
            <a type="button" href="{{route('admin.jadwal-imunisasi.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Jadwal Imunisasi</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Vaksin
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Usia Bayi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwals as $jadwal)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{$jadwal->nama_vaksin}}
                        </td>
                        <td class="px-6 py-4">
                            {{$jadwal->usia_bayi}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.jadwal-imunisasi.viewUpdate', $jadwal->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('admin.jadwal-imunisasi.delete', $jadwal->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</button>
                            </form>                            
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

    
</body>
</html>