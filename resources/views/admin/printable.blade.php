@extends('layout.mainadmin')
@section('title', 'BACARAB | Admin - Printable')

@section('content')

    <!-- Contextual Classes -->

    <div class="card mt-5 mx-4">
        <div class="row">
            <div class="col col-10">
                <h5 class="card-header" id="printable">Printable</h5>
            </div>
            <div class="col col-2">
                {{-- ADD --}}
                <a href="{{ route('admin.create') }}" class="btn btn-info btn-sm mt-4">Tambah printable</a>

            </div>
            @if (session()->has('pesan'))
                <div class="alert alert-success mx-3 col col-11">
                    {{ session()->get('pesan') }}
                </div>
            @endif

            <div class="table-responsive text-nowrap mt-3">
                <table class="table text-center" style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="width: 30%;">Gambar</th>
                            <th>Src Gambar</th>
                            <th>Kelompok</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($printable as $printable)
                            <tr class="table-info">
                                {{-- <th>{{ $loop->iteration }}</th> --}}
                                <td>
                                    {{-- <img src="{{ asset('printable/' . $printable->gambar) }}" alt="" class="img-fluid"
                                        style="width: 100px;"> --}}

                                    @if ($printable->gambar)
                                        <img src="{{ asset('assets/img/printable/' . $printable->gambar) }}"
                                            alt="{{ $printable->indonesia }}" class="img-fluid" style="width: 80px;">
                                    @else
                                        <img src="{{ asset('assets/img/printable/default.jpg') }}" alt="gambar-default"
                                            class="img-fluid" style="width: 100px;">
                                    @endif
                                </td>
                                <td>{{ $printable->src_gambar }}</td>
                                <td><span class="badge bg-label-info me-1">{{ $printable->kelompok }}</span></td>
                                <td>
                                    <div class="button-row"
                                        style="
                                        display: flex;
                                        flex-wrap: nowrap;
                                        justify-content: flex-start;
                                        align-items: center;
                                        gap: 10px;">
                                        <a href="{{ route('admin.edit', ['printable' => $printable->id]) }}"
                                            class="btn btn-info btn-sm mt-1" style="padding: 3px 20px;">Edit</a>
                                        <form action="{{ route('admin.destroy', ['printable' => $printable->id]) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-info btn-sm mt-1"
                                                style="padding: 3px 12px;">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            @empty
                        @endforelse

            </div>
        </div>
        </td>
        </tr>
        </tbody>
        </table>
    </div>

    <!--/ Contextual Classes -->


@endsection
