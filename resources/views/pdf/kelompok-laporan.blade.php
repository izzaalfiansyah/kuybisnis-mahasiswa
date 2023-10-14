<head>
    <title>{{ $title }}</title>

    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        table th {
            text-transform: uppercase;
            /* font-weight: normal; */
        }

        table th,
        table td {
            border: 1px solid black;
            padding: 5px;
        }

        .ttd {
            position: relative;
        }

        .ttd>div {
            position: absolute;
            top: 0;
            right: 0;
        }

        .ttd div img {
            width: 180px;
            margin-top: -10px;
            margin-bottom: -18px;
        }
    </style>
</head>

<body>
    {{ strtoupper($title) }}
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Waktu</th>
                <th>Jumlah Penjualan</th>
                <th>Harga Jual</th>
                <th>Total Penjualan</th>
                <th>Total Biaya</th>
                <th>Nilai Keuntungan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td style="white-space: nowrap">
                        {{ $item->tanggal ?: $item->pekan ?: $item->bulan ?: '-' }}</td>
                    <td>{{ $item->penjualan_bersih }}</td>
                    <td>
                        <x-format-money :value="$item->harga_jual_produk"></x-format-money>
                    </td>
                    <td>
                        <x-format-money :value="$item->total_penjualan_bersih"></x-format-money>
                    </td>
                    <td>
                        <x-format-money :value="$item->total_biaya"></x-format-money>
                    </td>
                    <td>
                        <x-format-money :value="$item->nilai_keuntungan_bersih"></x-format-money>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if ($validated)
        <br><br>
        <div class="ttd">
            <div>
                <div>Ketua Program Studi Agribisnis</div>
                <img src="{{ $ttd }}" alt="">
                <div>Fefi Nurdiana Widjayanti, S.P., M.P.</div>
            </div>
        </div>
    @endif
</body>
