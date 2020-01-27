<div class="row h-100 align-items-center m-0">
  <div class="col-lg-3"></div>
  <div class="col-lg-6">
    <p class="text-center">
      @php the_content() @endphp
    </p>
    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
    @php comments_template('/partials/comments.blade.php') @endphp
  </div>
  <div class="col-lg-3"></div>
</div>
 
