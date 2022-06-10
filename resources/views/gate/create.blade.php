@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>Gate</h1>

            <h2>Create</h2>

            @auth
            <form>
                <div class="form-group">
                    <label for="number">Number</label>
                    <input type="number" class="form-control" id="number">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="size_small">
                    <label class="form-check-label" for="size_small">Size Small</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="state_free">
                    <label class="form-check-label" for="state_free">State Free</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="international">
                    <label class="form-check-label" for="international">International</label>
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
