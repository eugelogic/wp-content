jQuery(function ($) {

// external js: isotope.pkgd.js


// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.cards',
  layoutMode: 'fitRows',
  getSortData: {
    name: '.name',
    symbol: '.symbol',
    population: '.population parseInt',
    avgtemp: '.avgtemp parseInt',
    restaurants: '.restaurants parseInt',
    green: '.green parseInt',
    distance: '.distance parseInt'
  }
});

// bind sort button click
// DESC
$('.sort-by-button-group').on( 'click', 'button', function() {
  var sortValue = $(this).attr('data-sort-value');
  $grid.isotope({ sortBy: sortValue,
                  sortAscending: false });
});

// ASC ...


// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});


});
