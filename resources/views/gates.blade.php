@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>Gates</h1>

            @auth
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <td>id</td>
                        <td>size_small</td>
                        <td>state_free</td>
                        <td>international</td>
                        <td>number</td>
                        <td>created_at</td>
                        <td>updated_at</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gates as $gate)
                    <tr>
                        <td>{{ $gate->id }}</td>
                        <td>{{ $gate->size_small }}</td>
                        <td>{{ $gate->state_free }}</td>
                        <td>{{ $gate->international }}</td>
                        <td>{{ $gate->number }}</td>
                        <td>{{ $gate->created_at }}</td>
                        <td>{{ $gate->updated_at }}</td>
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
