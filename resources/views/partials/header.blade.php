<header class="banner">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="brand" href="{{ home_url('/') }}"><i class="fas fa-tachometer-alt"></i> {{ get_bloginfo('name', 'display') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="fas fa-bars" style="color:#9f616a; font-size:28px;"></i>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif
      </div>
    </nav>
  </div>
  @php do_action('get_header') @endphp
    @if(is_front_page())
      @include('partials.home.content-hero')
      @include('partials.home.content-about-block')
      @include('partials.home.content-services-block')
      @include('partials.home.content-jumbotron')
    @elseif (is_single())
      @include('partials.content-banner-single')
    @elseif (is_404())
      {{-- @include('') --}}
    @else
    @include('partials.content-banner-page')
    @endif
</header>
