@extends('main')

@section('content')
<div>
    <form action="/" method="post">
        <h1>Login</h1>
        @csrf
        <input type="text" name="name" class="border p-4 @error('name')is-invalid @enderror" required autofocus value="{{old ('username')}}" id="floatingInput" placeholder="Username">
        @error('username')
            <div>
                error
            </div>
        @enderror

        <input type="email" name="email" class="border p-4 @error('email') is-invalid @enderror" required  value="{{old ('email')}}" id="floatingInput" placeholder="Enter Email">
        @error('email_address')
            <div class="invalid-feedback text-red-500">
                error
            </div>
        @enderror

        <input type="password" name="password" required class="border p-4 @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
        @error('password')
            <div class="invalid-feedback text-red-500">
                error
            </div>
        @enderror

        <button class="bg-yellow-300 rounded-md py-2 px-4 self-0" type="submit">Login Now</button>
    </form>
</div>
@endsection
