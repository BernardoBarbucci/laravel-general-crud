@extends('layout.app')

@section('main-content')
<section class="container-fluid bg-dark pt-4">
    <section class="d-flex justify-content-center align-items-center">
        <form method="POST" action="{{ route('pokedex.store') }}" class="list-group" style="width:35rem">
            @csrf
            <li class="list-group-item active rounded-top text-center fs-5" aria-current="true"><strong>Pokemon's info</strong></li>
            <li class="list-group-item">
                <input type="text" name="name" id="name" placeholder="Name" class="form-control">
            </li>
            <li class="list-group-item">
                <input type="text" name="type" id="type" placeholder="Type" class="form-control">
            </li>
            <li class="list-group-item">
                <input type="text" name="ability" id="ability" placeholder="Ability" class="form-control">
            </li>
            <li class="list-group-item">
                <textarea name="description" id="description" placeholder="Description" class="form-control"></textarea>
            </li>
            <li class="list-group-item">
                <input type="text" name="height" id="height" placeholder="Height" class="form-control">
            </li>
            <li class="list-group-item">
                <input type="text" name="weight" id="weight" placeholder="Weight" class="form-control">
            </li>
            <li class="list-group-item">
                <input type="text" name="evolution_stage" id="evolution_stage" placeholder="Evolution Stage" class="form-control">
            </li>
            <li class="list-group-item">
                <input type="text" name="image_url" id="image_url" placeholder="Image URL" class="form-control">
            </li>
            <li class="list-group-item d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Create Pokemon</button>
            </li>
        </form>
        
    </section>
</section>
@endsection