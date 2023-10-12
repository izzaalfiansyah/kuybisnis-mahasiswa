<x-app-layout :title="'Kelompok ' . $kelompok->nama">
    <div class="space-y-5">
        <div class="card bg-white shadow">
            <div class="card-body">
                <div>
                    <div class="mb-5 pb-5 border-b">
                        <div class="mb-3">Nama Kelompok</div>
                        <div class="text-xl font-semibold">{{ $kelompok->nama }}</div>
                    </div>
                    <div class="mb-5 pb-5 border-b">
                        <div class="mb-3">Asal Universitas</div>
                        <div class="text-xl font-semibold">{{ $kelompok->asal_universitas }}</div>
                    </div>
                </div>
                <div>
                    <div class="flex lg:flex-row flex-col gap-x-3 items-center justify-between">
                        <div class="lg:flex-1 w-full mb-5">
                            <div class="pb-5 border-b">
                                <div class="mb-3">Nama Ketua</div>
                                <div class="text-xl font-semibold">{{ $kelompok->ketua_nama }}</div>
                            </div>
                        </div>
                        <div class="lg:flex-1 w-full mb-5">
                            <div class="pb-5 border-b">
                                <div class="mb-3">NIM Ketua</div>
                                <div class="text-xl font-semibold">{{ $kelompok->ketua_nim }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body bg-white shadow" x-data="{
            query: (new URLSearchParams(location.search)),
            selectedTab: 1,
            setSelectedTab(val) {
                this.query.set('tab', val)
                this.selectedTab = val;
        
                const newURL = '{{ route('admin.kelompok.show', $kelompok->id) }}?' + this.query.toString();
                history.pushState({ path: newURL }, '', newURL);
            }
        }" x-init="() => {
            selectedTab = parseInt(query.get('tab') || '1');
        }">
            <div class="tabs">
                <a href="javascript:void(0)" x-on:click="setSelectedTab(1)"
                    x-bind:class="'tab tab-lg tab-bordered ' + (selectedTab == 1 ? 'tab-active' : '')">Daftar
                    Anggota</a>
                <a href="javascript:void(0)" x-on:click="setSelectedTab(2)"
                    x-bind:class="'tab tab-lg tab-bordered ' + (selectedTab == 2 ? 'tab-active' : '')">Jenis Usaha</a>
                <a href="javascript:void(0)" x-on:click="setSelectedTab(3)"
                    x-bind:class="'tab tab-lg tab-bordered ' + (selectedTab == 3 ? 'tab-active' : '')">Pemasaran
                    Bisnis</a>
                <a href="javascript:void(0)" x-on:click="setSelectedTab(4)"
                    x-bind:class="'tab tab-lg tab-bordered ' + (selectedTab == 4 ? 'tab-active' : '')">Hasil
                    Kegiatan</a>
            </div>

            <div class="mt-10">
                <div x-show="selectedTab == 1">
                    @include('admin.kelompok.partials.anggota')
                </div>
                <div x-show="selectedTab == 2">
                    @include('admin.kelompok.partials.usaha')
                </div>
                <div x-show="selectedTab == 3">
                    @include('admin.kelompok.partials.pemasaran')
                </div>
                <div x-show="selectedTab == 4">
                    @include('admin.kelompok.partials.laporan')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
