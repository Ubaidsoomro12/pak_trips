@extends('layouts.master')

@section('title', 'About Us')
@section('meta_description', 'Learn more about our company and mission')
@section('meta_keywords', 'about, company, mission')

@section('content')
   @include('components.about')
   @include('components.meet_guider')
   @include('components.subscribe')
@endsection