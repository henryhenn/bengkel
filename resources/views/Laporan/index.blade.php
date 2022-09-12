@extends('admin.layouts.main')

@section('title')
    Laporan
@endsection

@section('content')
    <h4 class="mb-3">Laporan Bengkel</h4>

    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark ">
            <tr>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Jumlah Transaksi</th>
                <th scope="col">Dibuat pada</th>
                <th scope="col">Diupdate pada</th>
            </tr>
            </thead>
            <tbody>
            @if (count($laporan) > 0)
                @foreach ($laporan as $key => $data)
                    <tr>
                        <td>{{ $data->jenis }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>{{ $data->updated_at }}</td>
                    </tr>
                @endforeach
            @else
                <td>Tidak ada laporan yang dapat
                    ditampilkan.
                </td>
            @endif
            </tbody>
        </table>
    </div>
    {{ $laporan->links() }}
@endsection
