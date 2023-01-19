@extends('main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (Auth::check())
                        <p>User is login.</p>
                    @else
                        <p>User is not login.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
