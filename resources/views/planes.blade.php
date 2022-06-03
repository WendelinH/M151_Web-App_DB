@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>Planes</h1>

            @auth
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <td>id</td>
                        <td>pasengers</td>
                        <td>refuel_time</td>
                        <td>jet</td>
                        <td>propeller</td>
                        <td>created_at</td>
                        <td>updated_at</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($planes as $plane)
                    <tr>
                        <td>{{ $plane->id }}</td>
                        <td>{{ $plane->pasengers }}</td>
                        <td>{{ $plane->refuel_time }}</td>
                        <td>{{ $plane->jet }}</td>
                        <td>{{ $plane->propeller }}</td>
                        <td>{{ $plane->created_at }}</td>
                        <td>{{ $plane->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endauth
            @guest
                <p>Bitte Anmelden</p>
            @endguest
        </div>
    </div>
</div>
@endsection
