@extends('admin.layouts.main')

@section('title')
    Edit Transaksi
@endsection

@section('content')
    <div class="col-md-8">
        <h4>Edit Transaksi</h4>

        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post">
            @csrf
            {{method_field('put')}}
            <div class="form-group">
                <label for="name">Jenis</label>
                <input type="text" name="jenis"
                       class="form-control @error('jenis') is-invalid @enderror" value="{{$transaksi->jenis}}">
                @error('jenis')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Jumlah</label>
                <input type="text" name="jumlah"
                       class="form-control @error('jumlah') is-invalid @enderror" value="{{$transaksi->jumlah}}">
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
