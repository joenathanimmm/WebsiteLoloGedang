{{-- @php
    $vaksin = [
        'Hepatitis B' => 'kurang dari 1 hari (1x24 jam)',
        'Vaksin DPT-HB-Hib 3' => '4 bulan',
        'Vaksin BCG' => '0-1 bulan',
        'Vaksin Polio Tetes 4' => '4 bulan',
        'Vaksin Polio Tetes 1' => '0-1 bulan',
        'Vaksin Polio Suntik (IPV)' => '4 bulan',
        'Vaksin DPT-HB-Hib 1' => '2 bulan',
        'Vaksin Campak-Rubella (MR)' => '9 bulan',
        'Vaksin Polio Tetes 2' => '2 bulan',
        'Vaksin DPT-HibHB Lanjutan' => '11 bulan',
        'Vaksin DPT-HB-Hib 2' => '3 bulan',
        'Vaksin Polio Tetes 3' => '3 bulan',
    ];
@endphp --}}

<table class="divide-y-2 divide-gray-200 bg-white text-sm">
    <thead class="ltr:text-left rtl:text-right">
        <tr>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama Vaksin</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Usia Bayi</th>
        </tr>
    </thead>

    <tbody class="divide-y divide-gray-200">
        @foreach ($jadwals as $jadwal)
            <tr>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $jadwal->nama_vaksin }}</td>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $jadwal->usia_bayix }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
