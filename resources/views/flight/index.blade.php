@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <h1>Flights</h1>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('flights.create'); }}" class="btn btn-primary" role="button">Create</a>
                        </li>
                    </ul>
                </div>
            </div>

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
                        <td>CRUD</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($flights as $flight)
                    <tr>
                        <td>{{ $flight->id }}</td>
                        <td>{{ $flight->start_time }}</td>
                        <td>{{ $flight->landing_time }}</td>
                        <td>{{ $flight->number }}</td>
                        <td>{{ $flight->created_at }}</td>
                        <td>{{ $flight->updated_at }}</td><td>
                            <a href="{{ route('flights.show', ['flight' => $flight->id]); }}" class="btn btn-info" role="button">Show</a>
                            <a href="{{ route('flights.edit', ['flight' => $flight->id]); }}" class="btn btn-warning" role="button">Edit</a>
                            <form 
                                method="post" 
                                action="{{ action([\App\Http\Controllers\GatesViewController::class, 'destroy'], $gate) }}" 
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
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
