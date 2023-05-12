<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Biodata {{ $kamus->indonesia }}</title>
</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h1 class="h2 mr-auto">Biodata {{ $kamus->indonesia }}</h1>
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <a href="{{ route('admin.edit', ['kamus' => $kamus->id]) }}"
                        class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.destroy', ['kamus' => $kamus->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger mx-3">Hapus</button>
                    </form>
                </div>
                <hr>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif

                <ul>
                    {{-- <li>NIM: {{ $kamus->nim }} </li> --}}
                    <li>Kata Dalam Bahasa Indonesia: {{ $kamus->indonesia }} </li>
                    <li>Kata Dalam Bahasa Arab: {{ $kamus->arab }} </li>
                    <li>Kelompok
                        {{ $kamus->kelompok == 'Angka' ? 'Angka' : ($kamus->kelompok == 'Huruf' ? 'Huruf' : 'Kata') }}
                    </li>
                    <li>Pelafalan : {{ $kamus->pelafalan }} </li>
                </ul>

            </div>
        </div>
    </div>

</body>

</html>
