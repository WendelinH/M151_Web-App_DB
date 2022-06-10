@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>Flight - {{ $flight->number }}</h1>

            <h2>Show</h2>

            @auth
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <td>id</td>
                        <td>start_time</td>
                        <td>landing_time</td>
                        <td>number</td>
                        <td>created_at</td>
                        <td>updated_at</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $flight->id }}</td>
                        <td>{{ $flight->start_time }}</td>
                        <td>{{ $flight->landing_time }}</td>
                        <td>{{ $flight->number }}</td>
                        <td>{{ $flight->created_at }}</td>
                        <td>{{ $flight->updated_at }}</td>
                    </tr>
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
