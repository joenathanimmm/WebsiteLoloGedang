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
        <div>
            <h1 class="text-2xl font-semibold mb-4">Daftar Orang Tua</h1>
        </div>
        {{-- <div>
            <a type="button" href="{{route('admin.jadwal-imunisasi.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Jadwal Imunisasi</a>
        </div> --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Orang Tua
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Umur
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{$user->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->umur}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('detail.imunisasi',$user->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                            {{-- 
                            <form action="{{ route('admin.jadwal-imunisasi.delete', $jadwal->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</button>
                            </form>                             --}}
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