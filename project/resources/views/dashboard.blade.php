@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>Dashboard</h1>

            <div class="row">
                <div class="col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Agencies</h5>
                            <p class="card-text">Browse and manage all agencies and their accossiated caregivers.</p>
                            <a href="{{ route('agencies.index') }}" class="btn btn-primary">Manage &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Caregivers Directory</h5>
                            <p class="card-text">A complete listing of caregivers from all of the available agencies.</p>
                            <a href="{{ route('caregivers-directory') }}" class="btn btn-primary">Browse &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3>Type of Caregiver <small class="text-muted">among all agencies</small></h3>
                    <div class="mt-4">
                        @include('partials.caregiver-positions-chart')
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3>Expiring Licenses <small class="text-muted">top 10 expiring soonest</small></h3>
                    <table class="table table-sm mt-4">
                        <thead>
                            <tr>
                                <th>Skilled Nurse</th>
                                <th>License Number</th>
                                <th>Expiring</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rosalind Johnston</td>
                                <td>870521</td>
                                <td>@include('partials.license-expiration')</td>
                            </tr>
                            <tr>
                                <td>Celestino Brekke</td>
                                <td>32750</td>
                                <td>@include('partials.license-expiration')</td>
                            </tr>
                            <tr>
                                <td>Diana Koss</td>
                                <td>717302</td>
                                <td>@include('partials.license-expiration')</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
