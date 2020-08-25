@extends('layouts.master')

@section('content')
    
    @if($header->preloader)
   @include('partials.preloader')
   @endif

   @include('partials.menu')
    @if($header->visible)
        @include('partials.header')
    @endif


    @include('partials.spical_features')
    @include('partials.services')
   @include('partials.prices')
   @include('partials.team')
   @include('partials.testimonial')
   @include('partials.faq')
   @include('partials.clients')
   @include('partials.blogs')

    @if($footer->visible)
   @include('partials.footer')
    @endif



@endsection

 



