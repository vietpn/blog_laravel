@extends('layouts.app')

@section('content')
    <div id="app" class="container">
        <div class="row">
            <passport-clients></passport-clients>
            <passport-authorized-clients></passport-authorized-clients>
            <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>
    </div>

    <script src="{{ elixir('/js/app.js') }}"></script>
@endsection
