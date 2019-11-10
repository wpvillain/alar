@extends('layouts.app-full-width')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.front-page-header')
    @include('partials.content-front-page')
  @endwhile
@endsection
