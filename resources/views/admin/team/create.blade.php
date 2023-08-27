<x-app-layout title="Tambah Tim">
    <form method="POST" action="{{ route('admin.team.store') }}" class="card bg-white shadow"
        enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="card-title mb-5">Tambah Tim</div>

            <div class="form-control">
                <label for="" class="label">Nama</label>
                <input type="text" class="input input-bordered max-w-xl" name="nama" value="{{ old('nama') }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('nama')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Jabatan</label>
                <input type="text" class="input input-bordered max-w-xl" name="jabatan" value="{{ old('jabatan') }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('jabatan')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Foto</label>
                <input type="file" class="file-input file-input-bordered max-w-xl" name="foto" accept="image/*">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('foto')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Akun Instagram</label>
                <input type="text" class="input input-bordered max-w-xl" name="akun_instagram"
                    value="{{ old('akun_instagram') }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('akun_instagram')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Akun Twitter</label>
                <input type="text" class="input input-bordered max-w-xl" name="akun_twitter"
                    value="{{ old('akun_twitter') }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('akun_twitter')"></x-input-error>
                </div>
            </div>

            <div class="form-control">
                <label for="" class="label">Akun Facebook</label>
                <input type="text" class="input input-bordered max-w-xl" name="akun_facebook"
                    value="{{ old('akun_facebook') }}">
                <div class="label label-alt-text">
                    <x-input-error :messages="$errors->get('akun_facebook')"></x-input-error>
                </div>
            </div>

            {{-- <div x-data="{
                media_sosial: [{
                    medsos: '',
                    akun: '',
                }]
            }" class="form-control">
                <label for="" class="label">Media Sosial</label>
                <template x-for="item, index in media_sosial">
                    <div class="card border mb-4 relative">
                        <button type="button" class="absolute top-2 right-2 material-icons"
                            x-on:click="() => {
                                    media_sosial = media_sosial.filter((_, i) => i != index);
                                }">
                            close
                        </button>
                        <div class="card-body">
                            <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
                                <div class="form-control">
                                    <label for="" class="label">Medsos</label>
                                    <select x-bind:name="`medsos[${index}]['medsos']`" class="input input-bordered"
                                        required>
                                        <option value="">Pilih Medsos</option>
                                        <option value="facebook">Facebook</option>
                                        <option value="twitter">Twitter</option>
                                        <option value="instagram">Instagram</option>
                                        <option value="whatsapp">Whatsapp</option>
                                        <option value="email">Email</option>
                                    </select>
                                </div>
                                <div class="form-control">
                                    <label for="" class="label">Link Akun</label>
                                    <input type="text" class="input input-bordered"
                                        x-bind:name="akun[$ { index }]['akun']" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
                <div class="mt-4">
                    <button class="btn btn-primary btn-sm w-full" type="button"
                        x-on:click="() => {
                    media_sosial = [...media_sosial, {
                      medsos: '',
                      akun: '',
                    }]
                  }">Tambah
                        Media Sosial</button>
                </div>
            </div> --}}

            <div class="flex space-x-4 flex-wrap mt-10">
                <button type="submit" class="btn btn-primary">Tambah Tim</button>
                <a href="{{ route('admin.team.index') }}" class="btn">Kembali</a>
            </div>
        </div>
    </form>
</x-app-layout>
