@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8">
                <div class="card">
                    <div class="card-header">{{ __('List Jasa Bengkel') }}</div>
                    <div class="card-body">
                        <div class="table-responsive p-3">
                            <table class="table table-striped">
                                <thead class="table-primary">
                                <th>ID</th>
                                <th>Jenis</th>
                                <th>Harga</th>
                                </thead>
                                <tbody>
                                @if(count($jasa) > 0)
                                    @foreach($jasa as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->jenis}}</td>
                                            <td>{{$data->harga}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">Tidak ada jasa tersedia</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                            {{$jasa->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-10 col-xl-8">
                <div class="card">
                    <div class="card-header">{{ __('List Sparepart Bengkel') }}</div>
                    <div class="card-body">
                        <div class="table-responsive p-3">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                <th>ID</th>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>Harga Barang</th>
                                <th>Stok Barang</th>
                                </thead>
                                <tbody>
                                @if(count($sparepart) > 0)
                                    @foreach($sparepart as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->nama_brg}}</td>
                                            <td>{{$data->jenis_brg}}</td>
                                            <td>{{$data->harga_brg}}</td>
                                            <td>{{$data->stok}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">Tidak ada sparepart tersedia</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                            {{$sparepart->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
