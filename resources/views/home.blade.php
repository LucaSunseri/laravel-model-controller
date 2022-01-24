@extends('layout.main')

@section('content')

    <main class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

            @foreach ($movies as $movie)
                <div class="col d-flex justify-content-center">
                    <div class="card my-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nazionalità: {{ $movie->nationality }}</li>
                            <li class="list-group-item">Data: {{ date('d-m-Y', strtotime($movie->date)) }}</li>
                            <li class="list-group-item">Voto: {{ $movie->vote }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach

        </div>
    </main>

@endsection
