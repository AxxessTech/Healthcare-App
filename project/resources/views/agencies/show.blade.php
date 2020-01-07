@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="jumbotron">
                <h1 class="display-4">{{ $agency->name }}</h1>
                <hr class="my-4">
                <p>Add a new caregiver to this agency.</p>
                <a class="btn btn-outline-primary btn-lg" href="{{ route('caregivers.create', $agency) }}" role="button">Add Caregiver</a>
            </div>

            <div>
                <h3>Caregivers</h3>

                <ul class="mt-4">
                    @foreach ($agency->caregivers as $caregiver)
                    <li>
                        {{ $caregiver->name }} ({{ $caregiver->position }})

                        @include('caregivers.delete', [
                            'agencyId' => $agency->id,
                            'caregiverId' => $caregiver->id
                        ])
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection
