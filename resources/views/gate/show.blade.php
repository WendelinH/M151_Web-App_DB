@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>Gate - {{ $gate->number }}</h1>

            <h2>Show</h2>

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
                    <tr>
                        <td>{{ $gate->id }}</td>
                        <td>
                            @if ($gate->size_small == true)
                                <span>&#x2705;</span>
                            @else
                                <span>&#x2B55;</span>
                            @endif
                        </td>
                        <td>
                            @if ($gate->state_free == true)
                                <span>&#x2705;</span>
                            @else
                                <span>&#x2B55;</span>
                            @endif
                        </td>
                        <td>
                            @if ($gate->international == true)
                                <span>&#x2705;</span>
                            @else
                                <span>&#x2B55;</span>
                            @endif
                        </td>
                        <td>{{ $gate->number }}</td>
                        <td>{{ $gate->created_at }}</td>
                        <td>{{ $gate->updated_at }}</td>
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
