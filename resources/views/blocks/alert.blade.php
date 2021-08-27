@if($errors -> any())
    <div class="container">

    <div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Упс...</strong>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

        <!-- <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div> -->
    @endif

@if(session('success'))
    <div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Ура!!!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

        <!-- <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div> -->

@endif