<x-app-admin>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">TITLE</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $event->title) }}" placeholder="Masukkan Judul Event">

                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">BULAN</label>
                                <select class="form-control @error('bulan') is-invalid @enderror" name="bulan">
                                    <option value="">Pilih Bulan</option>
                                    <option value="Januari" {{ old('bulan', $event->bulan) == 'Januari' ? 'selected' : '' }}>Januari</option>
                                    <option value="Februari" {{ old('bulan', $event->bulan) == 'Februari' ? 'selected' : '' }}>Februari</option>
                                    <option value="Maret" {{ old('bulan', $event->bulan) == 'Maret' ? 'selected' : '' }}>Maret</option>
                                    <option value="April" {{ old('bulan', $event->bulan) == 'April' ? 'selected' : '' }}>April</option>
                                    <option value="Mei" {{ old('bulan', $event->bulan) == 'Mei' ? 'selected' : '' }}>Mei</option>
                                    <option value="Juni" {{ old('bulan', $event->bulan) == 'Juni' ? 'selected' : '' }}>Juni</option>
                                    <option value="Juli" {{ old('bulan', $event->bulan) == 'Juli' ? 'selected' : '' }}>Juli</option>
                                    <option value="Agustus" {{ old('bulan', $event->bulan) == 'Agustus' ? 'selected' : '' }}>Agustus</option>
                                    <option value="September" {{ old('bulan', $event->bulan) == 'September' ? 'selected' : '' }}>September</option>
                                    <option value="Oktober" {{ old('bulan', $event->bulan) == 'Oktober' ? 'selected' : '' }}>Oktober</option>
                                    <option value="November" {{ old('bulan', $event->bulan) == 'November' ? 'selected' : '' }}>November</option>
                                    <option value="Desember" {{ old('bulan', $event->bulan) == 'Desember' ? 'selected' : '' }}>Desember</option>
                                </select>

                                @error('bulan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">TANGGAL</label>
                                <input type="date" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}">

                                <!-- error message untuk tanggal -->
                                @error('tanggal')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">TEMPAT</label>
                                <input type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat', $event->tempat) }}" placeholder="Masukkan Tempat Event">

                                @error('tempat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                            <a href="{{ route('events.index') }}" class="btn btn-md btn-warning">KEMBALI</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

        // JavaScript untuk menyesuaikan date picker sesuai bulan yang dipilih
        document.getElementById('bulan').addEventListener('change', function() {
            var selectedMonth = this.value;
            var dateInput = document.getElementById('tanggal');

            var currentDate = new Date(dateInput.value);
            if (!isNaN(currentDate.getDate())) {
                currentDate.setMonth(selectedMonth - 1);
                dateInput.value = currentDate.toISOString().slice(0, 10);
            } else {
                var year = new Date().getFullYear();
                dateInput.value = year + '-' + selectedMonth + '-01';
            }
        });
    </script>
</x-app-admin>
