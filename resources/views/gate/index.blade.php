@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <h1>Gates</h1>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('gates.create'); }}" class="btn btn-primary" role="button"><i class="las la-plus"></i>Create</a>
                        </li>
                    </ul>
                </div>
            </div>

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
                        <td>CRUD</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gates as $gate)
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
                        <td>
                            <a href="{{ route('gates.show', ['gate' => $gate->id]); }}" class="btn btn-info" role="button"><i class="las la-eye"></i>Show</a>
                            <a href="{{ route('gates.edit', ['gate' => $gate->id]); }}" class="btn btn-warning" role="button"><i class="las la-edit"></i>Edit</a>
                            <form 
                                method="post" 
                                action="{{ action([\App\Http\Controllers\GatesViewController::class, 'destroy'], $gate) }}" 
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="las la-trash"></i>Delete</button>
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
