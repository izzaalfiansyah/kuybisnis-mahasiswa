@props(['value'])

@php
    $tanggal = date('d', strtotime($value));
    $bulan = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'][(int) date('m', strtotime($value))];
    $tahun = date('Y', strtotime($value));
@endphp

{{ $tanggal }} {{ $bulan }} {{ $tahun }}
