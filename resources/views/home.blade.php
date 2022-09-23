@extends('layouts.main')

{{-- All Home Landing Page Components --}}
@section('container')
  @include('partials.landing.about')
  @include('partials.landing.layanan') 
  @include('partials.landing.posts')
  @include('partials.landing.cta')
@endsection
{{-- End All Landing Page Components --}}