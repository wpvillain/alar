<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
      <div class="vertical-center">
        <div class="wrap container" role="document">
          <div class="content">
            <main class="main">
              @yield('content')
            </main>
            @if (App\display_sidebar())
              <aside class="sidebar">
                @include('partials.sidebar')
              </aside>
            @endif
          </div> {{-- content --}}
        </div> {{-- container --}}
      </div> {{-- jumbotron --}}
    {{-- </div> row --}}
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
