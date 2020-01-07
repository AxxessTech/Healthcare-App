@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>Agencies <small class="text-muted">with caregiver count</small></h1>

            <ul class="list-group mt-4">
                @foreach ($agencies as $agency)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ route('agencies.show', $agency) }}">{{ $agency->name }}</a>
                    <span class="badge badge-primary badge-pill">?</span>
                </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection
