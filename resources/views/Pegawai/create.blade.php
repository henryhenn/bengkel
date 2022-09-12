@extends('admin.layouts.main')

@section('title')
    Tambah Pegawai Baru
@endsection

@section('content')
    <div class="col-md-8">
        <h4>Tambah Pegawai Baru</h4>

        <form action="{{ route('pegawai.store') }}" method="post" enctype="multipart/form-data">
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
                <label for="name">Jabatan</label>
                <input type="text" name="jabatan"
                       class="form-control @error('jabatan') is-invalid @enderror">
                @error('jabatan')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">No. Telpon</label>
                <input type="text" name="telp"
                       class="form-control @error('telp') is-invalid @enderror">
                @error('telp')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Jenis Kelamin</label>
                <select name="jenis_kelamin"
                        class="form-control @error('jenis_kelamin') is-invalid @enderror">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Alamat</label>
                <textarea type="text" name="alamat"
                          class="form-control @error('alamat') is-invalid @enderror"></textarea>
                @error('alamat')
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
