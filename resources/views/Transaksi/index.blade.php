@extends('admin.layouts.main')

@section('title')
    Transaksi
@endsection

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-success mb-4">
            {{ Session::get('message') }}
        </div>
    @endif

    <h4 class="mb-3">All Transaksi</h4>

    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark ">
            <tr>
                <th scope="col">Jenis</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Dibuat pada</th>
                <th scope="col">Diupdate pada</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @if (count($transaksi) > 0)
                @foreach ($transaksi as $key => $data)
                    <tr>
                        <td>{{ $data->jenis }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>{{ $data->updated_at }}</td>
                        <td>
                            <a
                                href="{{ route('transaksi.edit', [$data->id]) }}">
                                <button
                                    class="btn
                                    btn-outline-success">Edit
                                </button>
                            </a>
                            <button type="button"
                                    class="btn
                                    btn-outline-danger"
                                    data-toggle="modal" data-target="#exampleModal{{ $data->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('transaksi.destroy', [$data->id]) }}"
                                          method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal
                                                    title</h5>
                                                <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda Yakin ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close
                                                </button>
                                                <button type="submit"
                                                        class="btn btn-outline-danger">Delete
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <td>Tidak ada transaksi yang dapat
                    ditampilkan.
                </td>
            @endif
            </tbody>
        </table>
    </div>
    {{ $transaksi->links() }}
@endsection
