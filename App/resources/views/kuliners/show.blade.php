<x-app-admin>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('/storage/kuliners/'.$kuliner->image) }}" class="rounded" style="width: 100%">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>{{ $kuliner->title }}</h3>
                        <hr/>
                        <code>
                            <p>{!! $kuliner->description !!}</p>
                        </code>
                        <hr/>
                        <p><strong>Created At:</strong> {{ $kuliner->created_at }}</p>
                        <p><strong>Updated At:</strong> {{ $kuliner->updated_at }}</p>
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-admin>
