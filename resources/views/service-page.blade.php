{{--
  Template Name: Service Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <style>
    .<?php echo sanitize_title_with_dashes(get_the_title(get_the_ID())); ?>-hero {
    background-image: url("<?php the_post_thumbnail_url() ?>");
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    }
    .<?php echo sanitize_title_with_dashes(get_the_title(get_the_ID())); ?>-square {
      display: none;
    }
    </style>

    <div class="flex flex-wrap -mt-24 z-0 <?php echo sanitize_title_with_dashes(get_the_title(get_the_ID())); ?>-hero" data-aos="fade" data-aos-duration="1000">
      <div class="w-5/6 lg:w-2/3 pt-48 pb-32 lg:pt-48 lg:pb-32 text-white mx-auto">
        <h6 class="font-oswald text-sm md:text-lg lg:text-xl pb-3 uppercase" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine">a practice support partner</h6>
        <h1 class="font-open text-3xl md:text-4xl lg:text-7xl font-thin pb-5 leading-none" data-aos="fade-left" data-aos-duration="1200" data-aos-easing="ease-in-sine"><?php the_title() ?></h1>
        <p class="font-open font-thin text-base lg:text-xl" data-aos="fade-left" data-aos-duration="1500" data-aos-easing="ease-in-sine"><?php the_content() ?></p>
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

    <div class="flex flex-wrap w-5/6 lg:w-2/3 mx-auto py-32">
        <h2 class="font-open text-4xl font-thin pb-5 leading-none"><?php the_title() ?> <sup class="hidden lg:inline bg-color-85c879 text-white text-lg font-bold p-1 rounded">Learn More</sup></h2>
        @include('partials.contactform')
    </div>

    @include('partials.inner-page-services')

  @endwhile
@endsection