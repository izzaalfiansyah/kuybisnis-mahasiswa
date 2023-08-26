<x-app-layout title="Beranda">
    <div class="space-y-5">
        <div class="card bg-white shadow">
            <div class="card-body">
                Selamat datang {{ request()->user()->name }}!
            </div>
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
            <div class="card bg-white shadow">
                <div class="card-body">
                    <div class="flex items-center justify-between">
                        <div class="card-title">Total Pengguna</div>
                        <div class="text-5xl font-semibold text-primary">{{ $totalUser }}</div>
                    </div>
                </div>
            </div>
            <div class="card bg-white shadow">
                <div class="card-body">
                    <div class="flex items-center justify-between">
                        <div class="card-title">Total Kelompok</div>
                        <div class="text-5xl font-semibold text-primary">{{ $totalKelompok }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-white shadow">
            <div class="card-body space-y-5">
                <div class="card-title">Pengaturan Aplikasi</div>
                <div class="overflow-x-auto">
                    <table>
                        <tbody>
                            <tr>
                                <td>Nama Aplikasi</td>
                                <td class="px-4">:</td>
                                <td>{{ $app_pengaturan?->nama_aplikasi }}</td>
                            </tr>
                            <tr>
                                <td>Link Video Homepage</td>
                                <td class="px-4">:</td>
                                <td>{{ $app_pengaturan?->link_video_homepage }}</td>
                            </tr>
                            <tr>
                                <td>Link Video Bisnis Plan</td>
                                <td class="px-4">:</td>
                                <td>{{ $app_pengaturan?->link_video_bisnis_plan }}</td>
                            </tr>
                            <tr>
                                <td>Link Video Strategi Marketing</td>
                                <td class="px-4">:</td>
                                <td>{{ $app_pengaturan?->link_video_strategi_marketing }}</td>
                            </tr>
                            <tr>
                                <td>Link Video Hasil Akhir</td>
                                <td class="px-4">:</td>
                                <td>{{ $app_pengaturan?->link_video_hasil_akhir_kegiatan }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="border-b"></div>
                <div class="card-title">Pengaturan Email</div>
                <div class="overflow-x-auto">
                    <table>
                        <tbody>
                            <tr>
                                <td>Host</td>
                                <td class="px-4">:</td>
                                <td>{{ $app_pengaturan?->mail_host }}</td>
                            </tr>
                            <tr>
                                <td>Port</td>
                                <td class="px-4">:</td>
                                <td>{{ $app_pengaturan?->mail_port }}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td class="px-4">:</td>
                                <td>{{ $app_pengaturan?->mail_username }}</td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td class="px-4">:</td>
                                <td>{{ $app_pengaturan?->mail_password }}</td>
                            </tr>
                            <tr>
                                <td>Enkripsi</td>
                                <td class="px-4">:</td>
                                <td>{{ $app_pengaturan?->mail_enkripsi }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <a href="{{ route('admin.pengaturan.index') }}" class="btn btn-primary">Ubah Pengaturan</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
