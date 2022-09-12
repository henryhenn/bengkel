@extends('admin.layouts.main')

@section('title')
    Jasa
@endsection

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-success mb-4">
            {{ Session::get('message') }}
        </div>
    @endif

    <h4 class="mb-3">All Jasa</h4>

    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark ">
            <tr>
                <th scope="col">Nama Jasa</th>
                <th scope="col">Jenis Jasa</th>
                <th scope="col">Harga Jasa</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @if (count($jasa) > 0)
                @foreach ($jasa as $key => $data)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->jenis }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>
                            <a
                                href="{{ route('jasa.edit', [$data->id]) }}">
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
                                    <form action="{{ route('jasa.destroy', [$data->id]) }}"
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
                <td>Tidak ada jasa yang dapat
                    ditampilkan.
                </td>
            @endif
            </tbody>
        </table>
    </div>
    {{ $jasa->links() }}
@endsection
