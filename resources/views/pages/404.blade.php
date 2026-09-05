@extends('layouts.master')

@section('title', 'Page Not Found')
@section('meta_description', '404 - Page not found')

@section('content')
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-md-8 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <h1 class="display-1 fw-bold text-primary">404</h1>
                        <h2 class="mb-4">Page Not Found</h2>
                        <p class="lead text-muted mb-4">
                            Oops! The page you are looking for could not be found.
                        </p>
                        <a href="{{ route('/') }}" class="btn btn-primary btn-lg">
                            <i class="bi bi-house-door"></i> Go Back Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection