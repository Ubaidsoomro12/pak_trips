@extends('layouts.master')

@section('title', 'Destinations')
@section('meta_description', 'Explore our amazing travel destinations around the world')
@section('meta_keywords', 'destinations, travel, tours, places, PAK-Trips')

@section('content')
    @include('components.explore_tour')
    @include('components.subscribe')
@endsection