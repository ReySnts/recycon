@extends('main')

@section('content')
<div class="flex justify-center items-center min-h-full w-full mt-24">
    <form action="/register/jobseeker" method="post" class="flex flex-col w-2/4 space-y-4">
        <h1 class="text-sky-900 text-xl">Register</h1>
        @csrf
        <input type="text" name="name" class="border p-4 @error('name')is-invalid @enderror" required autofocus value="{{old ('name')}}" id="floatingInput" placeholder="Username">
        @error('name')
          <a>
              error
           </a>
        @enderror

        <input type="email" name="email" class="border p-4 @error('email') is-invalid @enderror" required  value="{{old ('email')}}" id="floatingInput" placeholder="Enter Email">
        @error('email')
          <a>
              error
           </a>
        @enderror

        <input type="password" name="password" required class="border p-4 @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
        @error('password')
          <a>
                error
           </a>
        @enderror

        <input type="password" name="repassword" class="border p-4 @error('repassword') is-invalid @enderror" id="floatingPassword" placeholder="Re-enter password">
        @error  ('repassword')
            <a>
                error
            </a>
        @enderror
        <button class="bg-yellow-300 rounded-md py-2 px-4 self-end hover:font-bold" type="submit">Register Now</button>
    </form>
</div>
@endsection
