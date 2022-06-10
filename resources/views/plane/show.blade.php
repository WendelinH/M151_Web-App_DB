@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>Plane - {{ $plane->id }}</h1>

            <h2>Show</h2>

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
