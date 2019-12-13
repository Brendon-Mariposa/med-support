<div class="flex w-11/12 mx-auto font-open text-xs pb-5">
<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
<p class="byline author vcard hidden">
  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p>
</div>
