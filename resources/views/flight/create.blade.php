@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>Flight</h1>

            <h2>Create</h2>

            @auth
            <form
                method="post" 
                action="{{ action([\App\Http\Controllers\FlightsViewController::class, 'store']) }}">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="number">Number</label>
                    <input type="number" class="form-control" id="number" name='number'>
                </div>
                <div class="form-group">
                    <label for="start_time">Start Time</label>
                    <input type="datetime-local" class="form-control" id="start_time" name='start_time'>
                </div>
                <div class="form-group">
                    <label for="landing_time">Landing Time</label>
                    <input type="datetime-local" class="form-control" id="landing_time" name='landing_time'>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
            @endauth
            @guest
                <p>Bitte Anmelden</p>
            @endguest
        </div>
    </div>
</div>
@endsection
