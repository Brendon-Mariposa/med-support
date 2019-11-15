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

    <div class="flex flex-wrap -mt-56 z-0 pt-72 pb-24 md:py-80 home-page-hero" data-aos="fade-left" data-aos-duration="1500">
      <div class="hidden md:flex flex-wrap w-full md:w-full mx-auto pb-8">
        <a class="w-full brand" href="{{ home_url('/') }}">
          <div class="w-full mx-auto z-50">
            <div class="w-80 p-3 md:opacity-50 hover:opacity-100 mx-auto">{!! the_custom_logo() !!}</div>
          </div>
        </a>
      </div>
      <div class="hidden md:flex flex-wrap w-full md:w-1/2 mx-auto text-right">
        <div class="w-4/5 mx-auto" data-aos="fade-left" data-aos-duration="2000">
          <h6 class="w-full font-oswald text-base pb-3 uppercase">experience</h6>
          <h1 class="w-full font-open text-2xl font-thin pb-16 leading-none lowercase">To Recognize the Impact</h1>
          <h6 class="w-full font-oswald text-base pb-3 uppercase">Expertise</h6>
          <h1 class="w-full font-open text-2xl font-thin pb-16 leading-none">To Identify the issues</h1>
          <h6 class="w-full font-oswald text-base pb-3 uppercase">Conceptual Skills</h6>
          <h1 class="w-full font-open text-2xl font-thin pb-16 leading-none">To formulate the best solution</h1>
        </div>
      </div>
      <div class="flex md:hidden flex-wrap w-full md:w-1/2 mx-auto text-center">
          <div class="w-4/5 mx-auto" data-aos="fade-left" data-aos-duration="2000">
            <h6 class="w-full font-oswald text-base pb-3 uppercase">experience</h6>
            <h1 class="w-full font-open text-2xl font-thin pb-16 leading-none lowercase">To Recognize the Impact</h1>
            <h6 class="w-full font-oswald text-base pb-3 uppercase">Expertise</h6>
            <h1 class="w-full font-open text-2xl font-thin pb-16 leading-none">To Identify the issues</h1>
            <h6 class="w-full font-oswald text-base pb-3 uppercase">Conceptual Skills</h6>
            <h1 class="w-full font-open text-2xl font-thin pb-16 leading-none">To formulate the best solution</h1>
          </div>
      </div>
      <div class="flex flex-wrap w-full md:w-1/2 mx-auto text-center md:text-left">
        <div class="w-4/5 mx-auto" data-aos="fade-right" data-aos-duration="2000">
          <h6 class="w-full font-oswald text-base pb-3 uppercase">People Skills</h6>
          <h1 class="w-full font-open text-2xl font-thin pb-16 leading-none">To gain acceptance</h1>
          <h6 class="w-full font-oswald text-base pb-3 uppercase">Principles</h6>
          <h1 class="w-full font-open text-2xl font-thin pb-16 leading-none">To do what is right</h1>
          <h6 class="w-full font-oswald text-base pb-3 uppercase">Resources</h6>
          <h1 class="w-full font-open text-2xl font-thin pb-16 leading-none">To implement the plan</h1>
        </div>
      </div>
      <a href="/contact/" class="w-auto h-16 border-4 text-lg md:text-xl border-color-85c879 hover:bg-color-85c879 hover:text-white hover:cursor-pointer mx-auto py-4 px-12 text-center hero-button">
        <span class="font-open uppercase">Get Started</span>
      </a>
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