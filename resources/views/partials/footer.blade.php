<style>
footer .widget {
  margin: 0 auto 100px auto;
}
footer .widget h3 {
  font-size: 20px;
  font-weight: 300;
  padding: 0 0 15px 0;
  text-transform: uppercase;
  font-family: 'Oswald', sans-serif;
}
footer .widget p {
  font-family: 'Open Sans', sans-serif;
  color: white;
}
.search-form .search-field {
  font-family: 'Open Sans', sans-serif;
  color: black;
  width: 100%;
  margin-bottom: 10px;
  padding: 0.5rem;
  border-width: 2px;
}
.search-form .search-submit {
  font-family: 'Open Sans', sans-serif;
  color: black;
  transition: .2s;
  text-transform: uppercase;
  padding: 0.5rem;
  border-width: 2px;
  font-size: 14px;
}
</style>

<footer class="blue-bk pt-5 content-info">
    <?php if ( is_page( array( 'About', 'Contact' ) ) ):
        echo '

        <div class="flex flex-wrap">
          <a href="tel:8447478870" class="w-full font-oswald text-2xl md:text-3xl text-white font-bold text-center uppercase py-8 md:py-2">Call Us - (844) 747-8870</a>
        </div>
        <style>
        .call-us {
          display: none;
        }
        </style>

        ';
        endif;
    ?>
  <div class="flex flex-wrap call-us">
    <a href="tel:8447478870" class="w-full font-oswald text-2xl md:text-3xl text-white font-bold text-center uppercase py-8 md:py-2">Call Us - (844) 747-8870</a>
    <div class="w-full font-oswald text-2xl md:text-3xl text-white text-center uppercase">OR</div>
    <div class="w-full font-oswald text-2xl md:text-3xl text-white font-bold text-center uppercase py-8 md:py-2">Send Us an Inquiry</div>
  </div>
  <div class="sm:flex flex-wrap text-white px-5 lg:px-32">
    <div class="sm:flex flex-wrap w-full mx-auto">
    <?php if ( is_front_page() ): 
      echo do_shortcode( '[contact-form-7 id="160" title="Homepage Contact" html_id="contact-form-1234" html_class="flex flex-wrap pt-8 homepage-form"]' );
      ; endif; 
    ?>
      @php dynamic_sidebar('sidebar-footer') @endphp
    </div>
  </div>
  <p class="bg-color-222222 text-base text-white text-center font-thin pt-3 pb-8 px-10">© 2019 - <?php echo get_the_date(); ?> | MedSupport, Inc.</p>
</footer>