@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>Plane</h1>

            <h2>Create</h2>

            @auth
            <form>
                <div class="form-group">
                    <label for="pasengers">Pasengers</label>
                    <input type="number" class="form-control" id="pasengers">
                </div>
                <div class="form-group">
                    <label for="refuel_time">Refuel Time</label>
                    <input type="number" class="form-control" id="refuel_time">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="jet">
                    <label class="form-check-label" for="jet">Jet</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="propeller">
                    <label class="form-check-label" for="propeller">Propeller</label>
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
