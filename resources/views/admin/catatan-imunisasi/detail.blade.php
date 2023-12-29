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
        

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Anak
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Umur
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis Kelamin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anaks as $anak)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$anak->nama}}
                    </th>
                    <td class="px-6 py-4">
                        {{$anak->umur}}
                    </td>
                    <td class="px-6 py-4">
                        {{$anak->jenisKelamin}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('detail-anak.imunisasi', ['id' => $anak->user_id, 'id_anak' => $anak->id]) }}">Detail</a>

                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
    </div>

    
</body>
</html>