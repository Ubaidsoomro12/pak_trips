@extends('layouts.master')

@section('title', 'Packages')
@section('meta_description', 'Explore our amazing travel packages and deals')
@section('meta_keywords', 'packages, travel, tours, deals, PAK-Trips')

@section('content')
    @include('components.awesome_packages')
    @include('components.tour_booking')
    @include('components.subscribe')
@endsection