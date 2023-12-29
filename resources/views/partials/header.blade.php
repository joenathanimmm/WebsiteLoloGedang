<header id="navbar" class="bg-gray-900 ">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex-1 md:flex md:items-center md:gap-12">
                <a class="flex gap-4 items-center" href="/">
                    <span class="sr-only">Home</span>
                    <img src="{{asset('assets/Logo.png')}}" class="h-10 w-10" alt="" srcset="">
                    <div class="bg-white w-[1px] h-10"></div>
                    <div class="text-white">
                        <p>Puskesmas Desa</p>
                        <p>Lolo Gedang</p>
                    </div>
                </a>
            </div>

            <div class="md:flex md:items-center md:gap-12">
                <nav aria-label="Global" class="hidden md:block">
                    <ul class="flex items-center gap-6 text-sm ">
                        <li>
                            <a class="text-gray-100 transition hover:text-gray-100/75" href="/"> Beranda</a>
                        </li>
                        <li>
                            <a class="text-gray-100 transition hover:text-gray-100/75" href="/profil"> Profil </a>
                        </li>
                        <li>
                            <a class="text-gray-100 transition hover:text-gray-100/75" href="/informasi-layanan">
                                Informasi Layanan
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-100 transition hover:text-gray-100/75" href="/kontak"> Kontak </a>
                        </li>
                    </ul>
                </nav>

                <div class="flex items-center gap-4">
                <div class="sm:flex sm:gap-4 items-center">
                @if (auth()->check())
                    <div class="relative">
                    <div class="inline-flex items-center overflow-hidden rounded-md">
                        <button class="flex items-center h-full p-2 text-white">
                            <p>Hello, {{ auth()->user()->name }}</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <div
                        class="absolute hidden end-0 mt-2 w-56 rounded-md border border-gray-100 bg-white shadow-lg"
                        role="menu" id="dropdownMenu">
                        <div class="p-2">
                            <a href="/profil-pengguna"
                                class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                role="menuitem">
                                Profil Pengguna
                            </a>

                            <a href="/riwayat-kesehatan"
                                class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                role="menuitem">
                                Riwayat Kesehatan
                            </a>

                            <a href="{{route('logout')}}"
                                class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                role="menuitem">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
                @else
    <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow"
        href="/login">
        Masuk
    </a>

    <div class="hidden sm:flex">
        <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
            href="/registrasi">
            Daftar
        </a>
    </div>
@endif

                    </div>

                    <div class="block md:hidden">
                        <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const dropdownButton = document.querySelector('.inline-flex button');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownButton.addEventListener('click', function() {
            if (dropdownMenu.classList.contains('hidden')) {
                setTimeout(() => {
                    dropdownMenu.classList.remove('hidden')
                }, 100);
                // Opening the menu
                dropdownMenu.classList.remove('opacity-0', 'scale-95');
                dropdownMenu.classList.add('transition', 'ease-out', 'duration-100', 'opacity-100',
                    'scale-100');
            } else {
                setTimeout(() => {
                    dropdownMenu.classList.add('hidden')
                }, 100);
                // Closing the menu
                dropdownMenu.classList.remove('transition', 'ease-out', 'duration-100', 'opacity-100',
                    'scale-100');
                dropdownMenu.classList.add('transition', 'ease-in', 'duration-75', 'opacity-0',
                    'scale-95');
            }
        });
    });
</script>
