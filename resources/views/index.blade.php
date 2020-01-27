@extends('layouts.app-full-width')

@section('content')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  @include('partials.page-header')
    <div class="row h-100 align-items-center m-0">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <p class="text-center">
              @while (have_posts()) @php the_post() @endphp
              @include('partials.content-'.get_post_type())
              @endwhile
              {!! get_the_posts_navigation() !!}
          </p>
        </div>
        <div class="col-lg-3"></div>
    </div>
@endsection
