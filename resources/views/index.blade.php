@extends('layouts.master')

@section('title', ' ') 
@section('meta_description', 'Welcome to PAK-Trips - Your trusted travel partner in Pakistan')
@section('meta_keywords', 'PAK-Trips, travel, Pakistan, tours, adventures')

@section('content')

@include('components.about')
@include('components.services')
@include('components.destination')
@include('components.explore_tour')
@include('components.awesome_packages')
@include('components.gallery')
@include('components.tour_booking')
@include('components.meet_guider')
@include('components.blog')
@include('components.testimonial')
@include('components.subscribe')

@endsection