@extends('main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="">username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div type="email" class="form-group">
                            <label for="">email</label>
                            <input type="text" name="email_address" class="form-control">
                        </div>
                        <div type="password" class="form-group">
                            <label for="">password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div type="password" class="form-group">
                            <label for="">repeat password</label>
                            <input type="text" name="repassword" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
