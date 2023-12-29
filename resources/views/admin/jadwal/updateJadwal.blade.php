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

        {{-- icon back --}}
        <div class="">
            <h1 class="text-2xl font-semibold mb-4">
                <a href="{{route('admin.jadwal-imunisasi.home')}}" class="flex items-center text-gray-600 dark:text-white hover:text-gray-900 dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="24" height="24" viewBox="0 0 1024 1024">
                        <path d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path>
                        <path d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path>
                    </svg>
                    
                </a>
            </h1>
        </div>
        
        <form class="max-w-md mx-auto">
            <!-- Form fields here -->
        </form>
        

        <div class="max-w-md mx-auto">
            <h1 class="text-2xl font-semibold mb-4 ">Ubah Jadwal Imunisasi</h1>
        </div>

        <form method="POST" action="{{route('admin.jadwal-imunisasi.update',$jadwal->id)}}" class="max-w-md mx-auto">
            @csrf
            @method('put')
            <div class="mb-8">
                <label for="nama_vaksin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Vaksin</label>
                <input type="text" name="nama_vaksin" id="nama_vaksin" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  required value="{{$jadwal->nama_vaksin}}">
            </div>
            <div class="mb-8">
                <label for="usia_bayi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia Bayi</label>
                <input type="text" name="usia_bayi" id="usia_bayi" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required value="{{$jadwal->usia_bayi}}">
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah Jadwal Imunisasi</button>
        </form>
        
  
    </div>

    
</body>
</html>