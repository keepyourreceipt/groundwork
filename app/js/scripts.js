
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

      // Handle qty increment
      $('.quantity-increase').on('click', function() {
        var $qtyField = $(this).siblings('input[type="number"]');
        var updatedQtyFieldValue = parseInt($qtyField.attr('value')) + 1;

        // Increase qty value by one
        $qtyField.attr('value', updatedQtyFieldValue );
      });

      // Handle qty decrement
      $('.quantity-decrease').on('click', function() {
        var $qtyField = $(this).siblings('input[type="number"]');
        var qtyFieldValue = parseInt($qtyField.attr('value'));

        var updatedQtyFieldValue;
        if ( qtyFieldValue > 1 ) {
          updatedQtyFieldValue = qtyFieldValue - 1;
        } else {
          // prevent user from ordering 0 qty of items
          return;
        }

        // If number greater than 1, decrement qty value
        $qtyField.attr('value', updatedQtyFieldValue );
      });
    }
  }

  themeInit();
});
