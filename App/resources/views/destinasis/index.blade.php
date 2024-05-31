<x-app-admin>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Destinasi</h2>
                        <hr>
                        <a href="{{ route('destinasis.create') }}" class="btn btn-md btn-success mb-3">Tambah Destinasi</a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Updated At</th>
                                        <th scope="col" style="width: 20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($destinasis as $destinasi)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('storage/destinasis/' . $destinasi->image) }}" class="rounded" style="width: 150px">
                                            </td>
                                            <td>{{ $destinasi->title }}</td>
                                            <td>{{ $destinasi->created_at }}</td>
                                            <td>{{ $destinasi->updated_at }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('destinasis.destroy', $destinasi->id) }}" method="POST">
                                                    <a href="{{ route('destinasis.show', $destinasi->id) }}" class="btn btn-sm btn-dark">Lihat</a>
                                                    <a href="{{ route('destinasis.edit', $destinasi->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                <div class="alert alert-danger">
                                                    Data Destinasi belum Tersedia.
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $destinasis->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</x-app-admin>
