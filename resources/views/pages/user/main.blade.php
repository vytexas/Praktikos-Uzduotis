@extends('layouts.app-user')

@section('content')

    <div class="jumbotron text-center text-dark center-div">
        <h1 class="display-4">Sveiki, {{ $userName }}</h1>
        <p class="lead">Linkime jums geros dienos!</p>
        <hr class="my-4">
    </div>

@endsection
