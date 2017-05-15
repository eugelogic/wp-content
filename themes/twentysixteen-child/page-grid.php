<?php
/*

Template Name: Grid Page

*/

get_header(); ?>

<h1><?php the_title();?></h1>

<!-- SORTING BUTTONS
================================================== -->
<p class="sorting-msg">Click any of the buttons below to sort accordingly.</p>
<div class="button-group sort-by-button-group">
  <button class="button is-checked" data-sort-value="original-order">-Default-</button>
  <button class="button" data-sort-value="population">Population</button>
  <button class="button" data-sort-value="avgtemp">Avg temp</button>
  <button class="button" data-sort-value="restaurants">Restaurants</button>
  <button class="button" data-sort-value="green">Green space</button>
  <button class="button" data-sort-value="distance">Distance from London</button>
  <button class="button" data-sort-value="name">Name</button>
</div>

<!-- CUSTOM LOOP TO SHOW CPT ON GRID
================================================== -->
<?php $loop = new WP_Query( array('post_type' => 'cards', 'order_by' => 'post_id')); ?>

<?php if ( $loop->have_posts() ) : ?>

<div class="grid">

<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

  <!-- CARDS
  ================================================== -->
  <div class="cards">
    <h3 class="name"><?php the_title(); ?></h3>
    <figure>
      <?php
        if ( has_post_thumbnail() ) {
        the_post_thumbnail();
        } else {
        echo  '<img src="' . get_stylesheet_directory_uri() . '/img/Lost.jpg" alt="Deafult Image">'; }
      ?>
      <div class="img-overlay">
          <a class="text-overlay" href="<?php the_field(booking_link); ?>" target="_blank">BOOK TRIP</a>
      </div><!-- img-overlay -->
    </figure>
    <p>Population:<span class="population"> <?php the_field(population); ?></span></p>
    <p>Average temp:<span class="avgtemp"> <?php the_field(avg_temp); ?></span> C</span></p>
    <p>Restaurants:<span class="restaurants"> <?php the_field(restaurants); ?></span></p>
    <p>Green space:<span class="green"> <?php the_field(green_space); ?></span> &percnt;</span>
      <span class="tooltip">&#9432;
        <span class="tooltiptext"><?php the_field(green_space_tooltip); ?></span>
      </span><!-- tooltip -->
    </p>
    <p>From London:<span class="distance"> <?php the_field(distance); ?></span> miles</span></p>
  </div>

<?php endwhile; ?>

</div>

<?php endif; ?>

<?php get_footer();?>
