<!-- Full Page Image Header with Vertically Centered Content -->
<div class="about-masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h3 class="font-weight-light align-self-center text-center">About</h3>
        <p class="text-center">@php the_field('about_block') @endphp</p>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</div>

<div class="services-masthead">
  <!-- Full Page Image Header with Vertically Centered Content -->
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h3 class="font-weight-light pt-4"><?php the_field('services_header'); ?></h3>
          <p class="lead">@php the_field('services_intro') @endphp</p>
        </div>
        @if ($services_blocks)   
          @foreach ($services_blocks as $item)
            <div class="col-lg-4">
              @if ($item->service_title)
              <h4 class="font-weight-light">{{ $item->service_title }}</h4>
              @endif
              @if ($item->service_text)
              <p>{!! $item->service_text !!}</p>
              @endif
            </div>
          @endforeach
        @endif
      </div>
    </div>
</div>
<!-- Design inspired from https://www.hotjar.com/ -->
<div class="jumbotron">
  <div class="container text-center text-lg-left">
    
    <div class="row">
      <div class="col-lg-8">
          <h2 class="display-5 font-weight-light">The fast & thorough way to <span class="highlight-word">speed up WordPress</span></h2>
  <p class="lead">Optimizin will speed optimize your WordPress site and improve SEO to boot</p>
        <span class="text-center d-inline-block">
          <a class="btn btn-primary btn-lg w-100" href="contact" role="button">Free Site Audit</a>
        {{-- <p class="text-muted">No credit card required</p> --}}
        </span>
        
      </div>
      <div class="col-lg-4 align-items-center d-flex">
        <img src="@asset('images/fast-loading.svg')" alt="" class="img-fluid">
      </div>
    </div>
    </div>
</div>