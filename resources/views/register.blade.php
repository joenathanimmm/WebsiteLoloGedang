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
                <div class="flex justify-between">
                    <a href="/">
                        <p class="underline text-teal-600">
                            < Home</p>
                    </a>
                    <a href="/login">
                        <p class="underline text-teal-600">Login ></p>
                    </a>
                </div>
                <div>
                    <h1 class="heading">Pendaftaran Online</h1>
                    <h1 class="heading">Puskesmas Desa Lolo Gedang.</h1>
                </div>

                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                    <ul class="list-disc ml-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{route('registrasi')}}" method="POST" class="flex flex-col gap-4" >
                    @csrf
                    @method('post')
                    @include('forms/form-pendaftaran')
                    <button class="button-primary" type="submit">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('registrationForm');
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
