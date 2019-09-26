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

<footer class="bg-color-85c879 pt-5 content-info">
  <div class="flex flex-wrap">
    <a href="tel:9122250938" class="w-full font-oswald text-2xl md:text-3xl text-white font-bold text-center uppercase py-8 md:py-2">Call Us - (912) 225-0938</a>
  </div>
  <div class="sm:flex flex-wrap text-white px-10">
    <div class="sm:flex flex-wrap w-full py-8 mx-auto">
      @php dynamic_sidebar('sidebar-footer') @endphp
    </div>
  </div>
  <p class="bg-color-222222 text-base text-white text-center font-thin pt-3 pb-8 px-10">© 2019 - <?php echo get_the_date(); ?> | MedSupport, Inc.</p>
</footer>