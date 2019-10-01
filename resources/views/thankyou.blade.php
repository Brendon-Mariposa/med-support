{{--
  Template Name: Thank You
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

<style>
    
</style>

    <div class="flex flex-wrap bg-color-85c879 py-8">
        <a href="tel:9122250938" class="w-5/6 font-oswald text-2xl md:text-4xl text-white font-bold mx-auto text-center uppercase">Thank You!</a>
    </div>

    <div class="flex flex-wrap w-5/6 lg:w-2/3 mx-auto pt-24 pb-32">
    <h2 class="font-open text-3xl md:text-5xl font-thin pb-8 leading-none italic">
    
    <?php
      global $wp_query;
      $postid = $wp_query->post->ID;
      echo get_post_meta($postid, 'Paragraph Title', true);
      wp_reset_query();
    ?>

    </h2>
    <p class="font-open font-thin text-xl"><?php the_content() ?></p>
    </div>

    <a href="/" class="w-full sm:w-auto border-4 text-lg md:text-xl border-color-85c879 hover:bg-color-85c879 hover:text-white hover:cursor-pointer p-4 text-center hero-button">
        <span class="font-open uppercase">Return to our Home Page</span>
    </a>

  @endwhile
@endsection