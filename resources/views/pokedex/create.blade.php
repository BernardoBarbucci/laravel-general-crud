<section class="container-fluid bg-dark">
    <section class="d-flex justify-content-center align-items-center">
        <form method="POST" action="{{ route('pokedex.create') }}" class="list-group">
            @csrf
            <li class="list-group-item active" aria-current="true">Pokedex Form</li>
            <li class="list-group-item">
                <input type="text" name="name" placeholder="Name" class="form-control">
            </li>
            <li class="list-group-item">
                <input type="text" name="type" placeholder="Type" class="form-control">
            </li>
            <li class="list-group-item">
                <input type="text" name="ability" placeholder="Ability" class="form-control">
            </li>
            <li class="list-group-item">
                <textarea name="description" placeholder="Description" class="form-control"></textarea>
            </li>
            <li class="list-group-item">
                <input type="text" name="height" placeholder="Height" class="form-control">
            </li>
            <li class="list-group-item">
                <input type="text" name="weight" placeholder="Weight" class="form-control">
            </li>
            <li class="list-group-item">
                <input type="text" name="evolution_stage" placeholder="Evolution Stage" class="form-control">
            </li>
            <li class="list-group-item">
                <input type="text" name="image_url" placeholder="Image URL" class="form-control">
            </li>
            <li class="list-group-item">
                <button type="submit" class="btn btn-primary">Create Pokemon</button>
            </li>
        </form>
        
    </section>
</section>