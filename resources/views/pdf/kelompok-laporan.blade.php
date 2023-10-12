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
</body>
