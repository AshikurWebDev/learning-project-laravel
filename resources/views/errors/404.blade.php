@extends('layout.app')

@section('title', 'Page Not Found')
@section('content')
    <div class="d-flex w-100 align-content-center">
        <div class="align-content-center w-100 justify-content-center text-center">
             <h1 style="font-size: 162px;">404</h1>
                <h1>Page Not Found</h1>
                <p>We are sorry, the page you are searching is not available. Please go back to home page.</p>
                <a href="/" class="btn btn-primary">Visit Homepage</a>
        </div>
    </div>
@endsection