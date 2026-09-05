@extends('layouts.master')

@section('title', 'Travel Guides')
@section('meta_description', 'Meet our experienced travel guides who will make your journey memorable')
@section('meta_keywords', 'travel guides, tour guides, experts, PAK-Trips')

@section('content')
    @include('components.meet_guider')
    @include('components.subscribe')
@endsection