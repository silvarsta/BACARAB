@extends('layout.mainadmin')
@section('title', 'BACARAB | Admin - Dictionary')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="{{ route('admin.update', $kamus->id) }}" method="POST" class="shadow p-3 mb-5 bg-white">
                    @method('PATCH')
                    @csrf
                    <h3 style="margin-bottom: 20px;"><b> Edit {{ $kamus->indonesia }} </b></h3>
                    <hr>
                    <div class="form-group">
                        {{-- gambar --}}
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar"
                                name="gambar" value="{{ old('gambar') }}">
                            @error('gambar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- indonesia --}}
                        <div class="form-group mt-3">
                            <label for="indonesia">Kata Dalam Bahasa Indonesia</label>
                            <input type="text" class="form-control @error('indonesia') is-invalid @enderror"
                                id="indonesia" name="indonesia" value="{{ old('indonesia') ?? $kamus->indonesia }}">
                            @error('indonesia')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- arab --}}
                        <div class="form-group mt-3">
                            <label for="arab">Kata Dalam Bahasa Arab</label>
                            <input type="text" class="form-control @error('arab') is-invalid @enderror" id="arab"
                                name="arab" value="{{ old('arab') ?? $kamus->arab }}">
                            @error('arab')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-1 mt-3">
                            <label>Kelompok</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="angka"
                                        value="Angka"
                                        {{ (old('kelompok') ?? $kamus->kelompok) == 'Angka' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="angka"> Angka </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="huruf"
                                        value="Huruf"
                                        {{ (old('kelompok') ?? $kamus->kelompok) == 'Huruf' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="huruf"> Huruf </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="kata"
                                        value="Kata"
                                        {{ (old('kelompok') ?? $kamus->kelompok) == 'Kata' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kata"> Kata </label>
                                </div>
                            </div>
                            @error('kelompok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- pelafalan --}}
                        <div class="form-group mt-3">
                            <label for="alamat">Pelafalan</label>
                            <input type="text" class="form-control @error('pelafalan') is-invalid @enderror"
                                id="pelafalan" name="pelafalan" value="{{ old('pelafalan') ?? $kamus->pelafalan }}">
                        </div>
                        {{-- button --}}
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                    </div>
                </form>
                {{-- end form --}}

            </div>
        </div>
    </div>
@endsection
