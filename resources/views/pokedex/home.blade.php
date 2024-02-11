@extends('layout.app')

@section('main-content')
    <section class="m-auto mb-4 row" style="width: 10rem">
        {{-- button per il db --}}
        <a href="{{ url('/pokedex') }}" class="text-white btn btn-primary">Pokemon database</a>
    </section>
@endsection