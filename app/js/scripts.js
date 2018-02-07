
jQuery(document).ready(function( $ ) {
  function themeInit() {
    assignProductColorRadios();
    fancyProductQuantityField();
  }

  function assignProductColorRadios() {
    var $colorVariationsTable = $('table.variations tr.attribute-color');
    if ( $colorVariationsTable.length ) {
      $colorVariationsTable.find('input[type="radio"]').each(function() {
        var color = $(this).attr('value');
        var radioLabel = $(this).siblings('label');
        radioLabel.css('background-color', color);
      });
    }
  }

  function fancyProductQuantityField() {
    var $quantityContainer = $('.single-product input.qty');
    if ( $quantityContainer.length ) {
      $('<div class="quantity-decrease"></div>').insertBefore( $quantityContainer );
      $('<div class="quantity-increase"></div>').insertAfter( $quantityContainer );
    }
  }

  themeInit();
});
