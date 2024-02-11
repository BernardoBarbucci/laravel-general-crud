@extends('layout.app')

@section('main-content')

<section class="form-container container">
    <div class="row justify-content-center">
        <div class="col-6 my-5">
            <h1 class="title mb-4 pt-3 text-center">
                Edit:
            </h1>

            <form action="{{ route('pokedex.update', $pokemon->id) }}" method="POST">

            @csrf

            @method ('PUT')

                <div class="mb-3">
                    <label for="name" class="form-check-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$pokemon->name}}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type:</label>
                    <input type="text" name="type" id="type" class="form-control" value="{{$pokemon->type}}">
                </div>

                <div class="mb-3">
                    <label for="ability" class="form-label">Ability:</label>
                    <input type="text" name="ability" id="ability" class="form-control" value="{{$pokemon->ability}}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{$pokemon->description}}">
                </div>

                <div class="mb-3">
                    <label for="height" class="form-label">Height:</label>
                    <input type="text" name="height" id="height" class="form-control" value="{{$pokemon->height}}">
                </div>

                <div class="mb-3">
                    <label for="weight" class="form-label">Weight:</label>
                    <input type="text" name="weight" id="weight" class="form-control" value="{{$pokemon->weight}}">
                </div>

                <div class="mb-3">
                    <label for="evolution_stage" class="form-label">Evolution stage:</label>
                    <input evolution_stage="text" name="evolution_stage" id="evolution_stage" class="form-control" value="{{$pokemon->evolution_stage}}">
                </div>

                <div class="mb-3">
                    <label for="image_url" class="form-label">Image:</label>
                    <input image_url="text" name="image_url" id="image_url" class="form-control" value="{{$pokemon->image_url}}">
                </div>


                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="reset" class="btn btn-warning">Clean the form</button>
            </form>

        </div>
    </div>
</section>

@endsection