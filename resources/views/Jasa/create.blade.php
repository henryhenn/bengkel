@extends('admin.layouts.main')

@section('title')
    Tambah Jasa Baru
@endsection

@section('content')
    <div class="col-md-8">
        <h4>Tambah Sparepart Baru</h4>

        <form action="{{ route('jasa.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="nama"
                       class="form-control @error('nama') is-invalid @enderror">
                @error('nama')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Jenis Jasa</label>
                <input type="text" name="jenis"
                       class="form-control @error('jenis') is-invalid @enderror">
                @error('jenis')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Harga Jasa</label>
                <input type="number" name="harga"
                       class="form-control @error('harga') is-invalid @enderror">
                @error('harga')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-outline-primary mt-3" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
