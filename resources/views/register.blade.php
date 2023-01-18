@extends('main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

                <div class="card-body">
                    <form action="{{ url('/register') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div type="email" class="form-group mb-3">
                            <label for="">email</label>
                            <input type="text" name="email_address" class="form-control">
                        </div>
                        <div type="password" class="form-group mb-3">
                            <label for="">password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div type="password" class="form-group mb-3">
                            <label for="">repeat password</label>
                            <input type="text" name="repassword" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
