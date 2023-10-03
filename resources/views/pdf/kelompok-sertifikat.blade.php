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
            top: 45%;
            left: 0;
            right: 0;
            font-weight: bold;
            font-size: 50px;
            color: #194278;
        }
    </style>
</head>

<body>
    <div class="sertifikat">
        <img src="{{ $image }}">
        <div class="name">
            {{ $nama }}
        </div>
    </div>
</body>
