
<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header-single')
    <div class="wrap container" role="document">
        <div class="row">
          <main class="main col-lg-8 col-md-7">
            @yield('content')
          </main>
          @if (App\display_sidebar())
            <aside class="sidebar col-lg-4 col-md-5">
              @include('partials.sidebar')
            </aside>
          @endif
        </div>
      </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
