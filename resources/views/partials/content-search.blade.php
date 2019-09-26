<article class="flex flex-wrap w-5/6 lg:w-11/12 mx-auto py-12 lg:px-8">
  <h2 class="w-full font-oswald text-2xl pb-3 entry-title">{!! get_the_title() !!}</h2>
  @if (get_post_type() === 'post')
    @include('partials/entry-meta')
  @endif
  <div class="w-full entry-summary">
    <p class="font-open font-thin text-xl">@php the_excerpt() @endphp</p>
  </div>
  <a href="{{ get_permalink() }}" class="w-full lg:w-auto border-2 text-sm border-color-85c879 hover:bg-color-85c879 hover:text-white hover:cursor-pointer mt-3 p-4 lg:p-2 text-center hero-button">
    <span class="font-open uppercase">Go to page</span>
  </a>
</article>
