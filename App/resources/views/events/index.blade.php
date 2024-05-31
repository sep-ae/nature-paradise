<x-app-admin>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Event</h2>
                        <hr>
                        <a href="{{ route('events.create') }}" class="btn btn-md btn-success mb-3">Tambah Event</a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Bulan</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Tempat</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Updated At</th>
                                        <th scope="col" style="width: 20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($events as $event)
                                        <tr>
                                            <td class="text-center">{{ $event->id }}</td>
                                            <td>{{ $event->title }}</td>
                                            <td>{{ $event->bulan }}</td>
                                            <td>{{ $event->tanggal }}</td>
                                            <td>{{ $event->tempat }}</td>
                                            <td>{{ $event->created_at }}</td>
                                            <td>{{ $event->updated_at }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('events.destroy', $event->id) }}" method="POST">
                                                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-primary me-2">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">
                                                <div class="alert alert-danger">
                                                    Data Event belum Tersedia.
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $events->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // message with sweetalert
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
