<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-screen grid grid-cols-[25%_75%] h-screen">
        <div class="bg-white grid place-items-center p-8">
            <div class="flex flex-col gap-4">
                <div>
                    <h1 class="heading">Registrasi Online</h1>
                </div>
                <p>Melayani Pasien Dengan Lebih baik</p>
                <img src="./assets/login.png" alt="">
            </div>
        </div>
        <div class="bg-[#87CDE6] grid place-items-center">
            <div class="flex flex-col gap-4">
                <a href="/">
                    <p class="text-teal-600 underline">
                        < Home</p>
                </a>
                <div>
                    <h1 class="heading">Pendaftaran Online</h1>
                    <h1 class="heading">Puskesmas Desa Lolo Gedang.</h1>
                </div>
                @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.293 5.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.293a1 1 0 111.414-1.414L10 8.586l4.293-4.293z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
                @endif
                <form method="POST" action="{{route('login')}}"  class="flex flex-col gap-4">
                    @csrf
                    @method('post')
                    <label for="nik" class="block text-sm font-medium text-gray-900">
                        Masukkan NIK Pasien
                    </label>
                    <input class="w-full rounded-lg border border-gray-200 p-3 text-sm" placeholder="Masukkan NIK..."
                        type="text" pattern="[0-9]*" required
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        id="nik" name="NIK" />
                    <button class="button-primary" type="submit">Masuk</button>
                </form>
                <p>Pasien Belum Daftar? <span><a href="/registrasi" class="text-teal-600 underline">Daftar</a></span>
                </p>
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('myForm');
        console.log(form);
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            const formData = new FormData(form);

            // Log formData entries
            for (let [key, value] of formData.entries()) {
                console.log(key, value);
            }

            // Here you can handle the formData, e.g., send it via AJAX
        });
    })
</script>

</html>
