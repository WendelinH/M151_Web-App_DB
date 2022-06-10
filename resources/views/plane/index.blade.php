@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <h1>Planes</h1>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('planes.create'); }}" class="btn btn-primary" role="button">Create</a>
                        </li>
                    </ul>
                </div>
            </div>

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
                        <td>CRUD</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($planes as $plane)
                    <tr>
                        <td>{{ $plane->id }}</td>
                        <td>{{ $plane->pasengers }}</td>
                        <td>{{ $plane->refuel_time }}</td>
                        <td>
                            @if ($plane->jet == true)
                                <span>&#x2705;</span>
                            @else
                                <span>&#x2B55;</span>
                            @endif
                        </td>
                        <td>
                            @if ($plane->propeller == true)
                                <span>&#x2705;</span>
                            @else
                                <span>&#x2B55;</span>
                            @endif
                        </td>
                        <td>{{ $plane->created_at }}</td>
                        <td>{{ $plane->updated_at }}</td>
                        <td>
                            <a href="{{ route('planes.show', ['plane' => $plane->id]); }}" class="btn btn-info" role="button">Show</a>
                            <a href="{{ route('planes.edit', ['plane' => $plane->id]); }}" class="btn btn-warning" role="button">Edit</a>
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
