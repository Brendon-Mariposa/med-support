{{--
  Template Name: Homepage
--}}

<style>
  .home-page-hero {
    background-image: url("https://res.cloudinary.com/mariposa/image/upload/o_40/v1569357992/Med%20Support/hero.jpg");
    background-size: cover;
    background-position: right;
    background-attachment: fixed;
    background-repeat: no-repeat;
  }
  .hero-button {
    transition: .2s;
  }
  .service-square {
    transition: .2s;
  }
  .service-square:hover {
    cursor: pointer;
    transition: .2s;
  }
  /* .quote-home-page {
    background-image: url("https://res.cloudinary.com/mariposa/image/upload/o_40/v1569354021/Med%20Support/mission-statement.png");
    background-size: 100px;
    background-repeat: no-repeat;
} */
</style>

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <div class="flex flex-wrap -mt-24 z-0 home-page-hero" data-aos="fade-left" data-aos-duration="1500">
      <div class="flex flex-wrap w-3/4 sm:w-2/3 pt-48 pb-32 lg:pt-64 lg:pb-64 mx-auto">
        <h6 class="font-oswald text-sm sm:text-lg lg:text-xl pb-3 uppercase" data-aos="fade-right" data-aos-duration="1500" data-aos-easing="ease-in-sine">a practice support partner</h6>
        <h1 class="font-open text-3xl sm:text-4xl lg:text-7xl font-thin pb-16 leading-none" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">With 70<sup class="text-color-85c879 font-bold">+</sup> years of experience</h1>
        <a href="/contact/" class="w-full sm:w-auto border-4 text-lg md:text-xl border-color-85c879 hover:bg-color-85c879 hover:text-white hover:cursor-pointer p-4 text-center hero-button">
          <span class="font-open uppercase">Get Started</span>
        </a>
      </div>
    </div>

    @include('partials.services')

    <div class="flex flex-wrap py-20 md:py-40">
      <div class="w-5/6 lg:w-3/4 mx-auto" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
        <blockquote class="font-open text-xl md:text-3xl font-thin py-8 lg:px-12">
          
          <?php
            global $wp_query;
            $postid = $wp_query->post->ID;
            echo get_post_meta($postid, 'Mission Statement', true);
            wp_reset_query();
          ?>
      
        </blockquote>
        <h6 class="font-oswald text-base font-thin lg:px-12">Mission Statement</h6>
        <p class="font-open font-thin text-xl pb-16 lg:px-12">MedSupport, Inc.</p>
      </div>
    </div>

  @endwhile
@endsection