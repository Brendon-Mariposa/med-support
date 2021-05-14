{{--
  Template Name: Service Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <style>
    .<?php echo sanitize_title_with_dashes(get_the_title(get_the_ID())); ?>-hero {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%230070c0' fill-opacity='0.04' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    background-size: 10px;
    background-attachment: fixed;
    }
    .<?php echo sanitize_title_with_dashes(get_the_title(get_the_ID())); ?>-square {
      display: none;
    }
    </style>

    <div class="flex flex-wrap -mt-24 z-0 <?php echo sanitize_title_with_dashes(get_the_title(get_the_ID())); ?>-hero" data-aos="fade" data-aos-duration="1000">
      <div class="w-5/6 lg:w-2/3 pt-48 pb-32 lg:pt-48 lg:pb-32 mx-auto">
        <h1 class="font-open text-3xl md:text-4xl lg:text-7xl font-thin pb-5 leading-none"><?php the_title() ?></h1>
        <p class="font-open font-thin text-base lg:text-xl whitespace-pre-line"><?php the_content() ?></p>
      </div>
    </div>

    <div class="flex flex-wrap items-center blue-bk py-8 md:py-0">
        <a class="brand" href="{{ home_url('/') }}">
          <div class="hidden md:flex w-1/5 z-50 mx-auto">
            <div class="w-48 mx-auto">{!! the_custom_logo() !!}</div>
          </div>
        </a>
        <a href="tel:8447478870" class="w-2/3 font-oswald text-2xl md:text-4xl text-white font-bold mx-auto text-center uppercase leading-none">Call for more information - (844) 747-8870</a>
    </div>

    <div class="flex flex-wrap w-5/6 lg:w-2/3 mx-auto py-32">
        <h2 class="font-open text-4xl font-thin pb-5 leading-none"><?php the_title() ?> <sup class="hidden lg:inline blue-bk text-white text-lg font-bold p-1 rounded">Learn More</sup></h2>
        @include('partials.contactform')
    </div>

    @include('partials.inner-page-services')

  @endwhile
@endsection