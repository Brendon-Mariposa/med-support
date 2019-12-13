{{--
  Template Name: Blog Listing
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <style>
    .blog-page-hero {
    background-image: url("<?php the_post_thumbnail_url() ?>");
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
        }
    </style>

    <div class="flex flex-wrap -mt-24 z-0 blog-page-hero" data-aos="fade" data-aos-duration="1000">
      <div class="w-2/3 pt-48 pb-32 lg:pt-56 lg:pb-32 mx-auto">
        <h1 class="font-open text-4xl lg:text-7xl text-white font-thin pb-5 leading-none text-center" data-aos="fade-left" data-aos-duration="1200" data-aos-easing="ease-in-sine">MedSupport, Inc. Blog</h1>
      </div>
    </div>

<div class="flex flex-wrap py-32">
    <article class="flex flex-wrap w-5/6 mx-auto">

        <?php // Display blog posts on any page @ https://m0n.co/l
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('posts_per_page=20' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="flex flex-wrap h-auto w-full lg:w-1/2 mx-auto p-5">
        <h2 class="w-full font-open text-xl md:text-3xl pb-4"><?php the_title(); ?></h2>
        <p class="font-open text-xl font-thin pb-8"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="w-full sm:w-auto border-4 text-base border-color-85c879 hover:bg-color-85c879 hover:text-white hover:cursor-pointer p-2 text-center hero-button">
          <span class="font-open uppercase">Read More</span>
        </a> 
        </div>

        <?php endwhile; ?>

        <?php if ($paged > 1) { ?>

        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
        </nav>

        <?php } else { ?>

        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
        </nav>

        <?php } ?>

        <?php wp_reset_postdata(); ?>

    </article>

</div>

    @include('partials.services')

  @endwhile
@endsection