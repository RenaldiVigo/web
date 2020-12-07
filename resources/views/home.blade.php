@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are Logged in Admin Page!') }}
                    <div class="button justify-content-center mr-5"  style="margin-top:20px;">
                    <a href="{{ asset('/')}}"><button type="button" class="btn btn-primary">Home</button></a>
                    <a href="{{ asset('/admin')}}"><button type="button" class="btn btn-success">Control Panel</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
