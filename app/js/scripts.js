
jQuery(document).ready(function( $ ) {
  function themeInit() {
    woocommerceColorFilterWidget();
    woocommerceSingleProductColorSelect();
    woocommerceFancyProductQuantityField();
    mobileMenu();    
  }

  function woocommerceColorFilterWidget() {
    var $colorFilterContainer = $('.wc-widget-color-filter');
    var $colorFilterLinks = $colorFilterContainer.find('ul li a');

    if ( $colorFilterLinks.length ) {
      $colorFilterLinks.each(function() {
        var rawColorString = $(this).text();
        var cleanColorString = rawColorString.replace(/-|\s/g,"").toLowerCase();
        $(this).text("").css('background-color', cleanColorString).addClass('color-filter');
      });
    }
  }

  function woocommerceSingleProductColorSelect() {
    var $colorVariationsTable = $('table.variations tr.attribute-pa_color');
    if ( $colorVariationsTable.length ) {
      $colorVariationsTable.find('input[type="radio"]').each(function() {

        // Remove hyphens from color attribute name
        var color = $(this).attr('value').replace(/-|\s/g,"").toLowerCase();

        var radioLabel = $(this).siblings('label');
        radioLabel.css('background-color', color);
      });
    }
  }

  function woocommerceFancyProductQuantityField() {
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

  function mobileMenu() {

    // On resize, stripe element styles appended by slideToggle
    $(window).on('resize', function() {
      if ( $(window).width() > 992 ) {
        $('.links > .menu > li').attr('style', '');
      }
    });

    // Toggle top level mobile nav menu on click
    $('.mobile-menu-toggle').on('click', function() {
      $('.links > .menu > li').slideToggle( 250 );
    });
  }

  themeInit();
});
