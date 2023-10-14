<x-app-layout title="Laporan">
    @if (request()->user()->kelompok)
        @if ($kelompok->status == '0' || $kelompok->status == '')
            <div class="card bg-white shadow">
                <div class="card-body">
                    <div class="text-center">
                        Untuk melihat laporan kamu harus menunggu persetujuan dari dosen terlebih dahulu.
                    </div>
                </div>
            </div>
        @else
            <div>
                <div class="space-y-5">
                    @php
                        $nextLink = null;
                        $prevLink = null;

                        if ($data_penjualan) {
                            $nextLink = $data_penjualan->toArray()['next_page_url'];
                            $prevLink = $data_penjualan->toArray()['prev_page_url'];
                        }
                    @endphp

                    <div class="card bg-white shadow">
                        <div class="card-body">
                            <div class="card-title mb-5">Video Motivasi</div>
                            <iframe src="{{ $app_pengaturan?->link_video_hasil_akhir_kegiatan }}"
                                class="w-full h-80 rounded-lg">
                            </iframe>
                        </div>
                    </div>

                    @if ($hasil && $data_penjualan)
                        <div class="card bg-white shadow">
                            <div class="p-4">
                                <div class="flex items-center justify-center space-x-4">
                                    <a href="{{ $nextLink }}" {{ !$nextLink ? 'disabled' : '' }}
                                        class="btn btn-primary text-xl">&laquo;</a>
                                    <a href="{{ $prevLink }}" {{ !$prevLink ? 'disabled' : '' }}
                                        class="btn btn-primary text-xl">&raquo;</a>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-white shadow">
                            <div class="card-body">
                                <div class="card-title">
                                    Grafik Penjualan
                                </div>
                                <canvas id="grafikHasilPenjualan"></canvas>
                            </div>
                        </div>
                        <div class="card bg-white shadow">
                            <div class="card-body">
                                <div class="card-title">
                                    Grafik Nilai Keuntungan
                                </div>
                                <canvas id="grafikNilaiKeuntungan"></canvas>
                            </div>
                        </div>

                        <div class="card bg-white shadow">
                            <div class="p-4">
                                <div class="flex items-center justify-center space-x-4">
                                    <a href="{{ $nextLink }}" {{ !$nextLink ? 'disabled' : '' }}
                                        class="btn btn-primary text-xl">&laquo;</a>
                                    <a href="{{ $prevLink }}" {{ !$prevLink ? 'disabled' : '' }}
                                        class="btn btn-primary text-xl">&raquo;</a>
                                </div>
                            </div>
                        </div>
                        @php
                            $medals = [
                                'gold' => [
                                    'img' => 'https://static.vecteezy.com/system/resources/previews/006/873/343/non_2x/gold-medal-award-trophy-winner-medal-vector.jpg',
                                    'message' => 'Good Job.. Super duper keren.. kalian adalah pengusaha handal, capaian kalian saat ini membuktikan
                        bahwa kalian mampu bersaing dan menjadi winner nya, tetap pertahankan dan lebih semangat lagi agar usaha kalian makin dikenal dan berkembang pesat, namun jangan lupa selalu bersyukur dan berdoa agar Allah selalu menolong dan menjadi penguat di hati kalian.',
                                ],
                                'silver' => [
                                    'img' => 'https://static.vecteezy.com/system/resources/previews/006/871/497/non_2x/award-trophy-medal-silver-vector.jpg',
                                    'message' => 'Super keren, Selamat buat kalian karena sudah mendapatkan keuntungan diatas 50% artinya kalian sudah melampaui Titik Impas, biaya produksi sudah dapat ditutup artinya kalian sudah menghasilkan penerimaan lebih besar daripada pengeluaran, usaha kalian masih bisa diperbesar lagi dan agar capaian keuntungan lebih tinggi dari sekarang, yuk..semangat lagi agar impian menjadi pengusaha akan segera terwujud…',
                                ],
                                'bronze' => [
                                    'img' => 'https://static.vecteezy.com/system/resources/previews/006/871/494/non_2x/award-trophy-medal-bronze-vector.jpg',
                                    'message' => 'Kalian sudah keren banget ketika sampai di titik ini,  titik dimana penerimaan sama dengan modal yang dikeluarkan, tidak terjadi kerugian atau keuntungan dan di titik ini kalian sudah dapat mengidentifikasi sejauh mana kalian mencapai tingkat produksi yang menghasilkan penerimaan yang cukup untuk menutupi biaya produksi, maka untuk mendapatkan keuntungan kalian perlu menaikkan harga produk atau mengurangi biaya produksi.',
                                ],
                                'nope' => [
                                    'img' => 'https://www.freepnglogos.com/uploads/x-png/x-png-x-drawing-transparent-background-32.png',
                                    'message' => 'Sedikit lagi kamu akan berhasil. Aku tahu bahwa mencapai target yang kamu inginkan bisa menjadi sesuatu yang sulit, dan aku merasa sedih mendengar bahwa kamu menghadapi kegagalan ini. Tetapi ingatlah, kegagalan hanyalah satu langkah menuju kesuksesan. Jangan biarkan kegagalan ini menghentikanmu atau meruntuhkan semangatmu.',
                                ],
                            ];

                            $result = $medals[$hasil['medal']];
                        @endphp
                        <div class="stats w-full shadow">
                            <div class="stat">
                                <div class="stat-figure text-orange-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        class="inline-block w-8 h-8 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="stat-title">Modal Usaha</div>
                                <div class="stat-value text-orange-500"><x-format-money
                                        :value="$hasil['modal']"></x-format-money>
                                </div>
                            </div>
                            <div class="stat">
                                <div class="stat-figure text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                    </svg>

                                </div>
                                <div class="stat-title">Penghasilan</div>
                                <div class="stat-value text-green-500"><x-format-money
                                        :value="$hasil['total']"></x-format-money>
                                </div>
                            </div>
                        </div>
                        <div
                            class="card bg-white shadow flex lg:flex-row flex-col items-center lg:items-stretch justify-center">
                            <img src="{{ $result['img'] }}" alt=""
                                class="w-[250px] lg:ml-[30px] ml-0 mb-[30px] {{ $hasil['medal'] == 'nope' ? 'mt-6' : '' }}">
                            <div class="card-body lg:flex-1 w-full flex items-center justify-center">
                                <div class="w-full text-justify">
                                    @if ($kelompok->status == '1')
                                        <div class="flex flex-row">
                                            <span
                                                class="mb-4 flex bg-green-500 rounded px-3 py-0.5 items-center space-x-2 text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6 stroke-2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                                </svg>
                                                <span class="text-sm font-semibold">Tervalidasi</span>
                                            </span>
                                        </div>
                                    @else
                                        <div class="flex flex-row">
                                            <span
                                                class="mb-4 flex bg-red-500 rounded px-3 py-0.5 items-center space-x-2 text-white">
                                                <span class="text-sm font-semibold">Belum Tervalidasi</span>
                                            </span>
                                        </div>
                                    @endif
                                    {{ $result['message'] }}
                                </div>
                            </div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            const canvasHasilPenjualan = document.getElementById('grafikHasilPenjualan');

                            new Chart(canvasHasilPenjualan, {
                                type: 'bar',
                                data: {
                                    labels: JSON.parse('{!! $grafik['labels'] !!}').reverse(),
                                    datasets: [{
                                        label: '# Penjualan Bersih',
                                        data: JSON.parse('{!! $grafik['penjualan'] !!}').reverse(),
                                        // backgroundColor: '#057aff',
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });

                            const canvasNilaiKeuntungan = document.getElementById('grafikNilaiKeuntungan');

                            new Chart(canvasNilaiKeuntungan, {
                                type: 'line',
                                data: {
                                    labels: JSON.parse('{!! $grafik['labels'] !!}').reverse(),
                                    datasets: [{
                                            label: '# Total Penjualan',
                                            data: JSON.parse('{!! $grafik['total_penjualan'] !!}').reverse(),
                                            borderColor: '#057aff',
                                            borderWidth: 2.5
                                        },
                                        {
                                            label: '# Total Biaya',
                                            data: JSON.parse('{!! $grafik['total_biaya'] !!}').reverse(),
                                            borderColor: '#ff4d59',
                                            borderWidth: 2.5
                                        },
                                        {
                                            label: '# Nilai Keuntungan',
                                            data: JSON.parse('{!! $grafik['nilai_keuntungan'] !!}').reverse(),
                                            borderColor: '#00e0c0',
                                            borderWidth: 2.5
                                        },
                                    ]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>
                        <div class="card bg-white shadow">
                            <div class="card-body">

                                <a href="{{ route('admin.kelompok.penjualan.print', $kelompok->id) }}?{{ http_build_query(request()->all()) }}"
                                    target="_blank" class="btn btn-primary">Print Laporan</a>

                                @if ($kelompok->status == '1')
                                    <a href="{{ route('admin.kelompok.sertifikat', $kelompok->id) }}" target="_blank"
                                        class="btn btn-primary">Print Sertifikat</a>
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="card bg-white shadow">
                            <div class="card-body">
                                <div class="text-center">
                                    Kamu harus mengisi pemasaran bisnis dan melakukan penjualan terlebih dahulu
                                </div>
                                <div class="flex flex-col items-center space-y-3 justify-center mt-5">
                                    <a href="{{ route('user.pemasaran-bisnis.index') }}" class="btn btn-primary">Isi
                                        Pemasaran
                                        Bisnis</a>
                                    <a href="{{ route('user.penjualan.index') }}" class="btn btn-primary">Lakukan
                                        Penjualan</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
        @endif
    @else
        <x-no-kelompok></x-no-kelompok>
    @endif
</x-app-layout>
