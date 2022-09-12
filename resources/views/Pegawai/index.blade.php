@extends('admin.layouts.main')

@section('title')
    Pegawai
@endsection

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-success mb-4">
            {{ Session::get('message') }}
        </div>
    @endif

    <h4 class="mb-3">All Pegawai</h4>

    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark ">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">No. Telpon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @if (count($pegawai) > 0)
                @foreach ($pegawai as $key => $data)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td>{{ $data->telp }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>
                            <a
                                href="{{ route('pegawai.edit', [$data->id]) }}">
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
                                    <form action="{{ route('pegawai.destroy', [$data->id]) }}"
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
                <td>Tidak ada pegawai yang dapat
                    ditampilkan.
                </td>
            @endif
            </tbody>
        </table>
    </div>
    {{ $pegawai->links() }}
@endsection
