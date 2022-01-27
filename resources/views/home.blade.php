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

                    {{ __('You are logged in!') }}<br>
                    <p><strong>{{ __('Userame :') }}</strong>   {{Auth::user()->username }}</p>
                    <p><strong>{{ __('Email :') }}</strong>  {{ Auth::user()->email }}</p>
                    <p><strong>{{ __('Phone :') }}</strong>  {{ Auth::user()->phone }}</p>
                    <p><strong>{{ __('Date :') }}</strong>   {{ Auth::user()->created_at }}</p>

                    <a href="{{ route('index01')}}" class="btn btn-primary">Product</a>
                    <a href="/" class="btn btn-success">Home</a>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
