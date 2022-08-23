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

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="row">
                <div class="col text-center m-3">
                    <a href="{{ route("admin.posts.index")}}" class="btn btn-primary">Index</a>
                </div>
                <div class="col text-center m-3">
                    <a href="{{ route("admin.posts.create")}}" class="btn btn-primary">Create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
