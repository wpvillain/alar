<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead-single">
  <div class="container h-100 mb-3">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h2 class="font-weight-light">
          @if(is_single())
          {!! single_post_title() !!}
          @else
          {!! App::title() !!}
          @endif
        </h2>
      </div>
    </div>
  </div>
</header>
