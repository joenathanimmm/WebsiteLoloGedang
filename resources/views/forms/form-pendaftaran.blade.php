<div class="space-y-4">
    <div>
        <label class="" for="nama">Nama</label>
        <input class="w-full rounded-lg border border-gray-200 p-3 text-sm" placeholder="Masukkan nama..." type="text"
            id="nama" name="nama" required />
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
    <div>
        <label class="" for="umur">Umur</label>
        <input required class="w-full rounded-lg border border-gray-200 p-3 text-sm" placeholder="Masukkan Umur..."
            type="text" pattern="[0-9]*" name="umur"
            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="umur" />
    </div>
    <div>
        <label class="" for="alamat">Alamat</label>
        <input required class="w-full rounded-lg border border-gray-200 p-3 text-sm" placeholder="Masukkan alamat..."
            type="text" id="alamat" name="alamat" />
    </div>
</div>
