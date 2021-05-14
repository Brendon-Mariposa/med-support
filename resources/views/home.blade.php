{{--
  Template Name: Homepage
--}}

<style>
  .home-page-hero {
    background-color: #ffffff;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%230070c0' fill-opacity='0.04' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    background-attachment: fixed;
    background-size: 10px;
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
  .blue-border {
    border-color: #0070C0;
  }

  .blue-bk {
    background-color: #0070C0;
  }

  .blue-text {
    color: #0070C0;
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
      <div class="hidden md:flex flex-wrap w-full md:w-1/3 mx-auto text-right">
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
      <div class="hidden md:flex flex-wrap w-full md:w-1/3 mx-auto pb-8">
        <a class="w-full brand" href="{{ home_url('/') }}">
          <div class="w-full mx-auto z-50">
            <div class="w-5/6 p-3 mx-auto text-center">{!! the_custom_logo() !!}</div>
          </div>
        </a>
      </div>
      <div class="flex flex-wrap w-full md:w-1/3 mx-auto text-center md:text-left">
        <div class="w-4/5 mx-auto" data-aos="fade-right" data-aos-duration="2000">
          <h6 class="w-full font-oswald text-base pb-3 uppercase">People Skills</h6>
          <h1 class="w-full font-open text-2xl font-thin pb-16 leading-none">To gain acceptance</h1>
          <h6 class="w-full font-oswald text-base pb-3 uppercase">Principles</h6>
          <h1 class="w-full font-open text-2xl font-thin pb-16 leading-none">To do what is right</h1>
          <h6 class="w-full font-oswald text-base pb-3 uppercase">Resources</h6>
          <h1 class="w-full font-open text-2xl font-thin pb-16 leading-none">To implement the plan</h1>
        </div>
      </div>
      <a href="/contact/" class="w-auto h-16 border-4 text-lg md:text-xl blue-border blue-bk hover:text-white hover:cursor-pointer mx-auto py-4 px-12 text-center hero-button">
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