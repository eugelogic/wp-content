<?php
/*

Template Name: Grid Page

*/

get_header(); ?>

<h1>Grid Page</h1>

<div>
  <button  class="button-group">-Random-</button>
  <button>Name</button>
  <button>Population</button>
  <button>Avg temp</button>
  <button>Restaurants</button>
  <button>Green space</button>
  <button>Distance from London</button>
</div>

<div class="grid">

  <!-- 1st row 1st column
  ================================================== -->
  <div class="cars">
    <h3 class="name">Lisbon</h3>
    <figure><img src="#" alt="Deafult Image"></figure>
    <p>Population: 1,750,000</p>
    <p>Average temp: 23' C</p>
    <p>Restaurants: 8,750</p>
    <p>Green space: 28%</p>
    <p>From London: 4,500 miles</p>
  </div><!-- cars -->

  <!-- 1st row 2nd column
  ================================================== -->
  <div class="cars">
    <h3 class="name">La Paz</h3>
    <figure><img src="#" alt="Deafult Image"></figure>
    <p>Population: 1,200,000</p>
    <p>Average temp: 9' C</p>
    <p>Restaurants: 1,250</p>
    <p>Green space: 31%</p>
    <p>From London: 12,750 miles</p>
  </div><!-- cars -->

  <!-- 1st row 3rd column
  ================================================== -->
  <div class="cars">
    <h3 class="name">Moscow</h3>
    <figure><img src="#" alt="Deafult Image"></figure>
    <p>Population: 6,700,000</p>
    <p>Average temp: 5' C</p>
    <p>Restaurants: 2,500</p>
    <p>Green space: 19%</p>
    <p>From London: 7,300 miles</p>
  </div><!-- cars -->

  <!-- 1st row 4th column
  ================================================== -->
  <div class="cars">
    <h3 class="name">Singapore</h3>
    <figure><img src="#" alt="Deafult Image"></figure>
    <p>Population: 3,500,000</p>
    <p>Average temp: 21' C</p>
    <p>Restaurants: 750</p>
    <p>Green space: 8%</p>
    <p>From London: 9,500 miles</p>
  </div><!-- cars -->

</div><!-- grid -->

<?php get_footer();?>
