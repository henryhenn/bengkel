@extends('admin.layouts.main')

@section('title')
    Tambah Transaksi Baru
@endsection

@section('content')
    <div class="col-md-8">
        <h4>Tambah Transaksi Baru</h4>

        <form action="{{ route('transaksi.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Jenis</label>
                <input type="text" name="jenis"
                       class="form-control @error('jenis') is-invalid @enderror">
                @error('jenis')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Jumlah</label>
                <input type="text" name="jumlah"
                       class="form-control @error('jumlah') is-invalid @enderror">
                @error('jumlah')
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
