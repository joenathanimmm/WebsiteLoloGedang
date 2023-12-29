@extends('layouts/layout')

@section('content')
    <div class="container-layout mb-8 flex flex-col justify-center ">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4">
                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <div class="grid grid-cols-2 mt-8 mb-8 gap-8" id="daftar-imunisasi">
            
            <form action="{{route('daftar-imunisasi-anak')}}" method="POST" >
            @method('post')
            @csrf
            <div class="bg-[#87CDE6] p-6 rounded-xl">
                <h1 class="heading">Pendaftaran Anak</h1>
                <div class="space-y-4">
                    <div>
                        <label class="" for="nama">Nama</label>
                        <input class="w-full rounded-lg border border-gray-200 p-3 text-sm" placeholder="Masukkan nama..." type="text"
                            id="nama" name="nama" required />
                    </div>
                    <div>
                        <label class="" for="umur">Umur</label>
                        <input required class="w-full rounded-lg border border-gray-200 p-3 text-sm" placeholder="Masukkan Umur..."
                            type="text" pattern="[0-9]*" name="umur"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="umur" />
                    </div>
                    <div>
                        <label class="" for="nik">NIK</label>
                        <input class="w-full rounded-lg border border-gray-200 p-3 text-sm" placeholder="Masukkan nik..." type="text"
                            pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            id="nik" name="nik" required />
                    </div>
                    <div>
                        <label for="jenisKelamin" class="block text-sm font-medium text-gray-900">Jenis Kelamin</label>
                
                        <select required name="jenisKelamin" id="jenisKelamin"
                            class="w-full rounded-lg border border-gray-200 p-3 text-sm">
                            <option value="">Pilih Kelamin</option>
                            <option value="Laki-laki">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                  
                    
                </div>
            </div>
            <div class="flex w-fuil justify-start mt-4"><button class="button-primary">Daftar</button></div>
            </form>
            {{-- <div class="bg-[#A3C4AE] p-6 rounded-xl">
                <h1 class="heading">Pendaftaran Anak</h1>
                @include('forms/form-pendaftaran')
            </div> --}}
        </div>
        {{-- <div class="flex w-fuil justify-start"><button class="button-primary">Daftar</button></div> --}}
    </div>
@endsection
