<x-app-admin>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('/storage/destinasis/'.$destinasi->image) }}" class="rounded" style="width: 100%">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>{{ $destinasi->title }}</h3>
                        <hr/>
                        <code>
                            <p>{!! $destinasi->description !!}</p>
                        </code>
                        <hr/>
                        <p><strong>Created At:</strong> {{ $destinasi->created_at }}</p>
                        <p><strong>Updated At:</strong> {{ $destinasi->updated_at }}</p>
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-admin>
