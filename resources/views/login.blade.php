@extends('main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

                <div class="card-body">
                    <form action="{{ url('login') }}" method="POST">
                        @csrf

                        <div type="email" class="form-group mb-3">
                            <label for="">username</label>
                            <input type="text" name="username" class="form-control">
                        </div>

                        <div type="password" class="form-group mb-3">
                            <label for="">password</label>
                            <input type="text" name="password" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

