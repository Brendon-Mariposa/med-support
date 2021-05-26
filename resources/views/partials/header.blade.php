<style>
.top-menu a {
  background-color: white;
  font-size: 16px;
  padding: 5px 15px 5px 15px;
  margin: 0 5px 0 5px;
  transition: .2s;
  font-family: 'Oswald', 'sans-serif';
  font-weight: 500;
  border-radius: 10px;
}
.top-menu a:hover {
  border-bottom-width: 2px;
  border-color: #0070C0;
  transition: .2s;
}
.mobile-menu-list a {
  font-size: 40px;
  font-family: 'Oswald', 'sans-serif';
  color: #0070C0;
  font-weight: 500;
}
.service-square {
  transition: .2s;
}
.service-square:hover {
  cursor: pointer;
  transition: .2s;
}
.billingrevenue-cycle-review-square {
  background-image: url("https://res.cloudinary.com/mariposa/image/upload/w_500,b_black,o_80/v1569426981/Med%20Support/billing-revenue.jpg");
}
.provider-enrollment-square {
  background-image: url("https://res.cloudinary.com/mariposa/image/upload/w_500,b_black,o_80/v1569426958/Med%20Support/provider-enrollment.jpg");
}
.managed-care-insurance-contracting-assistance-square {
  background-image: url("https://res.cloudinary.com/mariposa/image/upload/w_500,b_black,o_80/v1569427040/Med%20Support/insurance-contracting.jpg");
}
.healthcare-analytics-special-projects-square {
  background-image: url("https://res.cloudinary.com/mariposa/image/upload/w_500,b_black,o_80/v1569427720/Med%20Support/coding-chart-review.jpg");
}
.em-leveling-review-square {
  background-image: url("https://res.cloudinary.com/mariposa/image/upload/w_500,b_black,o_80/v1569427581/Med%20Support/em-leveling.jpg");
}
.coding-and-chart-review-square {
  background-image: url("https://res.cloudinary.com/mariposa/image/upload/w_500,b_black,o_80/v1571081256/Med%20Support/chart-review.jpg");
}
.business-office-assessment-square {
  background-image: url("https://res.cloudinary.com/mariposa/image/upload/w_500,b_black,o_80/v1569427836/Med%20Support/office-assessment.jpg");
}
.denial-review-and-management-square {
  background-image: url("https://res.cloudinary.com/mariposa/image/upload/w_500,b_black,o_80/v1578077889/Med%20Support/mayor-917149_1280.jpg");
}
.insurance-and-accounts-receivable-recovery-square {
  background-image: url("https://res.cloudinary.com/mariposa/image/upload/w_500,b_black,o_80/v1571079603/Med%20Support/insurance-and-accounts-receivable-recovery.jpg");
}
.quote-home-page {
  background-image: url("https://res.cloudinary.com/mariposa/image/upload/o_40/v1569354021/Med%20Support/mission-statement.png");
  background-size: 100px;
  background-repeat: no-repeat;
}
.main .search-form {
  width: 80%;
  margin: 0 auto 20px auto;
  padding: 50px 0 50px 0;
}
.nav-links {
  font-size: 18px;
  font-family: 'Open Sans', 'sans-serif';
  padding: 20px;
  text-align: center;
}
.nav-links a:hover {
  background-color: #edf2f7;
  padding: 10px;
}
.header-search .search-submit {
  display: none;
}
#comments {
  display: none;
}
.blue-border {
    border-color: #0070C0;
}
.blue-bk {
  background-color: #0070C0;
  transition: .3s;
}
.blue-text {
  color: #0070C0 !important;
}
.topbar {
  background-color: #0070C0;
}
.below-bar {
  font-size: 16px;
  font-family: 'Oswald', 'sans-serif';
  text-transform: uppercase;
}
.search-form {
  width: 300px;
}
@media(max-width:900px){

}
@media(min-width:1200px){

}
</style>

<header class="bg-transparent banner topbar">
  <div class="flex flex-wrap items-center">
    <a class="brand" href="{{ home_url('/') }}">
    <div class="w-1/2 md:w-1/3 z-50">
      <div class="md:hidden w-48 mx-auto p-3">{!! the_custom_logo() !!}</div>
      <div class="hidden md:flex w-80 mx-auto pt-6 header-search">
        @php get_search_form() @endphp
      </div>
    </div>
    </a>
    <nav class="hidden md:flex flex-wrap w-full font-open font-thin ml-auto md:w-1/2 z-50 py-8 top-menu">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' => 'flex flex-wrap xl:w-1/2 mx-auto', 'menu_class' => 'flex flex-wrap']) !!}
      @endif
    </nav>
    <a id="mobile-menu" class="md:hidden w-1/2 text-white text-right pr-8 sm:pr-16 z-50">
      <div id="mobile-menu-button" class="mobile-menu-button z-50">
        <i class="text-3xl text-color-85c879 z-50 fas fa-bars"></i>
      </div>
    </a>
  </div>

  <?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs" class="bg-color-d8d8d8 text-color-888888 font-thin uppercase py-5 px-24">','</p>');} ?>

  <div class="bg-white h-screen overflow-scroll mobile-menu">
    <div class="flex flex-wrap items-center">
      <a class="brand" href="{{ home_url('/') }}">
        <div class="w-1/2 md:w-1/3">
          <div class="w-40 mx-auto p-3">{!! the_custom_logo() !!}</div>
        </div>
      </a>
      <a id="close-mobile-menu" class="md:hidden w-1/2 text-color-85c879 text-right pr-8 sm:pr-16 close-menu">
        <div>
          <i class="text-3xl fas fa-times"></i>
        </div>
      </a>
    </div>
    <div class="w-5/6 mx-auto flex flex-wrap pt-8 mobile-menu-list">
      @if (has_nav_menu('mobile_menu'))
        {!! wp_nav_menu(['theme_location' => 'mobile_menu', 'container_class' => 'w-full', 'menu_class' => 'w-full']) !!}
      @endif
    </div>
  </div>
</header>
<div class="w-full text-center py-2 below-bar"><p>Your Practice Support Partner</p></div>