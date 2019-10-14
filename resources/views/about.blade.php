{{--
  Template Name: About
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <style>
    .about-page-hero {
    background-image: url("<?php the_post_thumbnail_url() ?>");
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
        }
    </style>

    <div class="flex flex-wrap -mt-24 z-0 about-page-hero" data-aos="fade" data-aos-duration="1000">
      <div class="w-2/3 pt-48 pb-32 lg:pt-56 lg:pb-32 mx-auto">
        <h1 class="font-open text-4xl lg:text-7xl text-white font-thin pb-5 leading-none text-center" data-aos="fade-left" data-aos-duration="1200" data-aos-easing="ease-in-sine">About MedSupport, Inc.</h1>
      </div>
    </div>

    <div class="flex flex-wrap items-center bg-color-85c879 py-8 md:py-0">
        <a class="brand" href="{{ home_url('/') }}">
          <div class="w-1/5 z-50 mx-auto">
            <div class="w-48 mx-auto">{!! the_custom_logo() !!}</div>
          </div>
        </a>
        <a href="tel:9122250938" class="w-2/3 font-oswald text-2xl md:text-4xl text-white font-bold mx-auto text-center uppercase">Call for more information - (912) 225-0938</a>
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

    @include('partials.services')

  @endwhile
@endsection