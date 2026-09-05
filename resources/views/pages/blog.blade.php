@extends('layouts.master')

@section('title', 'Blog')
@section('meta_description', 'Read our latest travel articles, tips, and guides')
@section('meta_keywords', 'blog, travel, articles, tips, guides, PAK-Trips')

@section('content')
    @include('components.blog')
    @include('components.tour_booking')
    @include('components.subscribe')
@endsection