@extends('admin.layouts.main')

@section('title')
    Edit Jasa
@endsection

@section('content')
    <div class="col-md-8">
        <h4>Edit Jasa</h4>

        <form action="{{ route('jasa.update', $jasa->id) }}" method="post">
            @csrf
            {{method_field('put')}}
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="nama"
                       class="form-control @error('nama') is-invalid @enderror" value="{{$jasa->nama}}">
                @error('nama')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Jenis Jasa</label>
                <input type="text" name="jenis"
                       class="form-control @error('jenis') is-invalid @enderror" value="{{$jasa->jenis}}">
                @error('jenis')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Harga Jasa</label>
                <input type="number" name="harga"
                       class="form-control @error('harga') is-invalid @enderror" value="{{$jasa->harga}}">
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
