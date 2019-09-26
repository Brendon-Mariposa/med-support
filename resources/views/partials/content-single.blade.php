<article @php post_class() @endphp>
  <header class="flex flex-wrap bg-color-d8d8d8">
    <h1 class="w-11/12 border-t-2 text-4xl mx-auto pt-5 pb-56 entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="-mt-48 entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
