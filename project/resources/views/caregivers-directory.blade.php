@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h1>Caregivers Directory</h1>

            <table class="table table-sm table-bordered table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Agency</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Aaron Kutch</td>
                        <td>heidenreich.hollis@example.net</td>
                        <td>Home Health Aid</td>
                        <td>Mueller Ltd Agency</td>
                    </tr>
                    <tr>
                        <td>Breanna Trantow</td>
                        <td>katherine.oberbrunner@example.net</td>
                        <td>Occupational Therapist</td>
                        <td>Mueller Inc Agency</td>
                    </tr>
                    <tr>
                        <td>Deanna King</td>
                        <td>ledner.terry@example.com</td>
                        <td>Occupational Therapist</td>
                        <td>Okuneva Inc Agency</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
