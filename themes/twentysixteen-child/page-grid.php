<?php
/*

Template Name: Grid Page

*/

get_header(); ?>

<h1>Grid Page</h1>

<div class="button-group sort-by-button-group">
  <button class="button is-checked" data-sort-value="original-order">-Random-</button>
  <button class="button" data-sort-value="name">Name</button>
  <button class="button" data-sort-value="population">Population</button>
  <button class="button" data-sort-value="avgtemp">Avg temp</button>
  <button class="button" data-sort-value="restaurants">Restaurants</button>
  <button class="button" data-sort-value="green">Green space</button>
  <button class="button" data-sort-value="distance">Distance from London</button>
</div>

<div class="grid">

  <!-- 1st row 1st column
  ================================================== -->
  <div class="cards">
    <h3 class="name">Lisbon</h3>
    <figure><img src="#" alt="Deafult Image"></figure>
    <p>Population:<span class="population"> 1,750,000</span></p>
    <p>Average temp:<span class="avgtemp"> 23'</span> C</p>
    <p>Restaurants:<span class="restaurants"> 8,750</span></p>
    <p>Green space:<span class="green"> 28%</span></p>
    <p>From London:<span class="distance"> 4,500 miles</span></p>
  </div><!-- cards -->

  <!-- 1st row 2nd column
  ================================================== -->
  <div class="cards">
    <h3 class="name">La Paz</h3>
    <figure><img src="#" alt="Deafult Image"></figure>
    <p>Population:<span class="population"> 1,200,000</span></p>
    <p>Average temp:<span class="avgtemp"> 9'</span> C</span></p>
    <p>Restaurants:<span class="restaurants"> 1,250</p>
    <p>Green space:<span class="green"> 31%</span></p>
    <p>From London:<span class="distance"> 12,750 miles</span></p>
  </div><!-- cards -->

  <!-- 1st row 3rd column
  ================================================== -->
  <div class="cards">
    <h3 class="name">Moscow</h3>
    <figure><img src="#" alt="Deafult Image"></figure>
    <p>Population:<span class="population"> 6,700,000</span></p>
    <p>Average temp:<span class="avgtemp"> 5'</span> C</p>
    <p>Restaurants:<span class="restaurants"> 2,500</span></p>
    <p>Green space:<span class="green"> 19%</span></p>
    <p>From London:<span class="distance"> 7,300 miles</span></p>
  </div><!-- cards -->

  <!-- 1st row 4th column
  ================================================== -->
  <div class="cards">
    <h3 class="name">Singapore</h3>
    <figure><img src="#" alt="Deafult Image"></figure>
    <p>Population:<span class="population"> 3,500,000</span></p>
    <p>Average temp:<span class="avgtemp"> 21'</span> C</p>
    <p>Restaurants:<span class="restaurants"> 750</span></p>
    <p>Green space:<span class="green"> 8%</span></p>
    <p>From London:<span class="distance"> 9,500 miles</span></p>
  </div><!-- cards -->

</div><!-- grid -->

<?php get_footer();?>
