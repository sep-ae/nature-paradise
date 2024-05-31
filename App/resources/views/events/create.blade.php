<x-app-admin>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">TITLE</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Event">

                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">BULAN</label>
                                <select id="bulan" class="form-control @error('bulan') is-invalid @enderror" name="bulan">
                                    <option value="">Pilih Bulan</option>
                                    <option value="01" {{ old('bulan') == '01' ? 'selected' : '' }}>Januari</option>
                                    <option value="02" {{ old('bulan') == '02' ? 'selected' : '' }}>Februari</option>
                                    <option value="03" {{ old('bulan') == '03' ? 'selected' : '' }}>Maret</option>
                                    <option value="04" {{ old('bulan') == '04' ? 'selected' : '' }}>April</option>
                                    <option value="05" {{ old('bulan') == '05' ? 'selected' : '' }}>Mei</option>
                                    <option value="06" {{ old('bulan') == '06' ? 'selected' : '' }}>Juni</option>
                                    <option value="07" {{ old('bulan') == '07' ? 'selected' : '' }}>Juli</option>
                                    <option value="08" {{ old('bulan') == '08' ? 'selected' : '' }}>Agustus</option>
                                    <option value="09" {{ old('bulan') == '09' ? 'selected' : '' }}>September</option>
                                    <option value="10" {{ old('bulan') == '10' ? 'selected' : '' }}>Oktober</option>
                                    <option value="11" {{ old('bulan') == '11' ? 'selected' : '' }}>November</option>
                                    <option value="12" {{ old('bulan') == '12' ? 'selected' : '' }}>Desember</option>
                                </select>

                                <!-- error message untuk bulan -->
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
                                <input type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat') }}" placeholder="Masukkan Tempat Event">

                                <!-- error message untuk tempat -->
                                @error('tempat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                            <button type="reset" class="btn btn-md btn-warning me-3">RESET</button>
                            <a href="{{ url()->previous() }}" class="btn btn-md btn-secondary">Kembali</a>

                        </form>
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
