@extends('layout.app')

@section('main-content')

    <section class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="card m-3 p-2" style="width: 18rem;">
                <img src="{{ $pokemon->image_url }}" class="card-img-top" alt="img">
                <div class="card-body">
                    <h5 class="card-title">Pokemon name: <br> {{ $pokemon->name }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Pokemon ability:</strong> <br>{{ $pokemon->description }}</li>
                    <li class="list-group-item"><strong>Pokemon type:</strong> <br>{{ $pokemon->type }}</li>
                    <li class="list-group-item"><strong>Pokemon height:</strong> <br>{{ $pokemon->height }}</li>
                    <li class="list-group-item"><strong>Pokemon weight:</strong> <br>{{ $pokemon->weight }}</li>
                    <li class="list-group-item"><strong>Evolution stage:</strong> <br>{{ $pokemon->evolution_stage }}</li>
                </ul>
                {{-- <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
                </div> --}}
                <a href="{{route('pokedex.edit', $pokemon->id)}}"><button type="submit" class="btn btn-warning w-100 mb-2">Modifica</button></a>
                <button type="submit" class="btn btn-danger">Elimina</button>
            </div>
        </div>
    </section>

@endsection