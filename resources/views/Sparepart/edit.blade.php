@extends('admin.layouts.main')

@section('title')
    Edit Sparepart
@endsection

@section('content')
    <div class="col-md-8">
        <h4 class="mb-3">Update spareapart</h4>

        <form action="{{ route('sparepart.update', $sparepart->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="nama_brg"
                       class="form-control @error('nama_brg') is-invalid @enderror" value="{{$sparepart->nama_brg}}">
                @error('nama_brg')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Jenis Barang</label>
                <input type="text" name="jenis_brg"
                       class="form-control @error('jenis_brg') is-invalid @enderror" value="{{$sparepart->jenis_brg}}">
                @error('jenis_brg')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Harga Barang</label>
                <input type="number" name="harga_brg"
                       class="form-control @error('harga_brg') is-invalid @enderror" value="{{$sparepart->harga_brg}}">
                @error('harga_brg')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Stok</label>
                <input type="number" name="stok"
                       class="form-control @error('stok') is-invalid @enderror" value="{{$sparepart->stok}}">
                @error('stok')
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
