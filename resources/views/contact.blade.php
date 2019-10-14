{{--
  Template Name: Contact
--}}

<style>

</style>

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <style>
    .contact-page-hero {
    background-image: url("<?php the_post_thumbnail_url() ?>");
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
        }
    </style>

    <div class="flex flex-wrap -mt-24 z-0 contact-page-hero" data-aos="fade" data-aos-duration="1000">
      <div class="w-2/3 pt-48 pb-32 lg:pt-56 lg:pb-32 mx-auto">
        <h1 class="font-open text-4xl lg:text-7xl text-white font-thin pb-5 leading-none text-center" data-aos="fade-left" data-aos-duration="1200" data-aos-easing="ease-in-sine">Contact MedSupport Inc.</h1>
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
        <h2 class="font-open text-4xl font-thin pb-5 leading-none"><?php the_title() ?> <sup class="bg-color-85c879 text-white text-lg font-bold p-1 rounded">Learn More</sup></h2>
        <p class="w-full font-open font-thin text-xl"><?php the_content() ?></p>
        @include('partials.contactform')
    </div>

    @include('partials.services')

  @endwhile
@endsection