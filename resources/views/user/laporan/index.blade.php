<x-app-layout title="Laporan">
    <div class="space-y-5">
        <div class="card bg-white shadow">
            <div class="card-body">
                <div class="card-title">
                    Grafik Hasil Penjualan
                </div>
                <div class="h-72"></div>
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
            ];
            
            $result = $medals['bronze'];
        @endphp
        <div class="card bg-white shadow flex lg:flex-row flex-col items-center lg:items-stretch justify-center">
            <img src="{{ $result['img'] }}" alt="" class="w-[250px] lg:ml-[30px] ml-0 mb-[30px]">
            <div class="card-body lg:flex-1 w-full flex items-center justify-center">
                <div class="w-full text-justify">
                    {{ $result['message'] }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
