@extends('layouts.master')

@section('title', 'Services')
@section('meta_description', 'Explore our amazing travel services and packages')
@section('meta_keywords', 'services, travel, tours, packages, PAK-Trips')

@section('content')
    @include('components.services')
    @include('components.testimonial')
    @include('components.subscribe')
@endsection