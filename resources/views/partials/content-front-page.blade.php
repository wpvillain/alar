<!-- Full Page Image Header with Vertically Centered Content -->
<div class="about-masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h3 class="font-weight-light align-self-center text-center">About</h3>
        <p class="text-center"><?php the_field('about_block'); ?></p>
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
        <p class="lead"><?php the_field('services_intro'); ?></p>
      </div>
      <div class="col-lg-4">
      <h4 class="font-weight-light">Minifications & Concatentation</h4>
        <p>All CSS and JS will be concatenanted and minified where need be to speed up the load
          time. Every setup is unique, some require extensive concatenation, others less. Your site
          will get the care it needs.
        </p>
      </div>
      <div class="col-lg-4">
      <h4 class="font-weight-light">Plugin Pruning</h4>
        <p> Sometimes the amount of plugins gets out of control along the way. Sometimes the plugins
          used are not the right ones for the job. We will analyse all in use and remove or replace 
          when need be.
        </p>
      </div>
      <div class="col-lg-4">
      <h4 class="font-weight-light">Gzip Compression & File Caching</h4>
        <p>With the proper server side configuration you can make sure all files that can be compressed
          will be compressed. You can also make sure the browser does not request the same files over and
          over using smart caching.
        </p>
      </div>
      <div class="col-lg-4">
        <h4 class="font-weight-light">Image Optimization</h4>
          <p>Images when not uploaded optimized at the right size and dimensions can slow down
            the website dramatically. We make sure your images are optimized. They will look good,
            but not grind your site down to a halt.
          </p>
        </div>
        <div class="col-lg-4">
          <h4 class="font-weight-light">Unused CSS Cleanup</h4>
            <p>Many themes add loads of styling with CSSS only to use a tiny bit of it. Sometimes you 
              only need a small part of a CSS Framework, Not the whole library. We remove or prune 
              unused CSS using various tools.
            </p>
          </div>
          <div class="col-lg-4">
            <h4 class="font-weight-light">Database Cleanup</h4>
              <p>We will optimize the datbase, make sure all is indexed well and that all redundant data is 
                removed.
              </p>
            </div>
    </div>
  </div>
</div>
<!-- Design inspired from https://www.hotjar.com/ -->
<div class="jumbotron">
  <div class="container text-center text-lg-left">
    
    <div class="row">
      <div class="col-lg-8">
          <h1 class="display-4">The fast & thorough way to <span class="highlight-word">speed up WordPress</span></h1>
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