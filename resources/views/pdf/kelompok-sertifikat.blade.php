<head>
    <title>{{ $title }}</title>

    <style>
        @page {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            color: #242a42;
        }

        .page-break {
            page-break-after: always;
        }

        .sertifikat {
            display: flex;
            position: relative;
        }

        .sertifikat img {
            width: 100%;
        }

        .sertifikat .name {
            text-align: center;
            position: absolute;
            top: 34%;
            left: 0;
            right: 0;
            font-weight: bold;
            font-size: 50px;
            /* color: #194278; */
        }

        .sertifikat .anggota {
            position: absolute;
            top: 46%;
            left: 18%;
            right: 18%;
            font-size: 20px;
        }

        .sertifikat table {
            width: 100%;
        }

        .sertifikat .anggota table tr td:first-child {
            text-align: left;
        }

        .sertifikat .anggota table tr td:last-child {
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="sertifikat">
        <img src="{{ $image }}">
        <div class="name">
            {{ $nama }}
        </div>
        <div class="anggota">
            <table>
                @foreach ($anggota as $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['nim'] }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
