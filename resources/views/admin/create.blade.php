@extends('layout.mainadmin')
@section('title', 'BACARAB | Admin - Dictionary')

@section('content')

    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                {{-- form --}}
                <form action="{{ route('admin.store') }}" method="POST" class="shadow p-3 mb-5 bg-white"
                    enctype="multipart/form-data">
                    @csrf
                    <h3 style="margin-bottom: 20px;"><b> Form Mini Kamus </b></h3>
                    <hr>
                    <div class="form-group">
                        {{-- gambar --}}
                        <div class="form-group">
                            <label for="gambar"><strong>Gambar</strong> </label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar"
                                name="gambar" value="{{ old('gambar') }}">
                            @error('gambar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- indonesia --}}
                        <div class="form-group mt-3">
                            <label for="indonesia"><strong> Kata Dalam Bahasa Indonesia</strong></label>
                            <input type="text" class="form-control @error('indonesia') is-invalid @enderror"id="indonesia" name="indonesia" value="{{ old('indonesia') }}">
                            @error('indonesia')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- arab --}}
                        <div class="form-group mt-3">
                            <label for="arab"><strong>Kata Dalam Bahasa Arab</strong> </label>
                            <input type="text" class="form-control @error('arab') is-invalid @enderror" id="arab"
                                name="arab" value="{{ old('arab') }}">
                            @error('arab')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Kelompok --}}
                        <div class="form-group mb-1 mt-3">
                            <label><strong>Kelompok</strong> </label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="angka"
                                        value="Angka" {{ old('kelompok') == 'Angka' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="angka"> Angka </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="huruf"
                                        value="Huruf" {{ old('kelompok') == 'Huruf' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="huruf"> Huruf </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelompok" id="kata"
                                        value="Kata" {{ old('kelompok') == 'Kata' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="kata"> Kata </label>
                                </div>
                            </div>
                            @error('kelompok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Pelafalan --}}
                        <div class="form-group mt-3">
                            <label for="alamat"><strong>Pelafalan</strong> </label>
                            <input type="text" class="form-control @error('pelafalan') is-invalid @enderror"id="pelafalan" name="pelafalan" value="{{ old('pelafalan') }}">
                        </div>
                        {{-- Button --}}
                        <button type="submit" class="btn btn-primary mt-2">Send</button>
                    </div>
                </form>
                {{-- end form --}}

            </div>
        </div>
    </div>

@endsection
