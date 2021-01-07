(function($) {
    'use strict';

    var woocommerce = {};
    mkdf.modules.woocommerce = woocommerce;

    woocommerce.mkdfOnDocumentReady = mkdfOnDocumentReady;

    $(document).ready(mkdfOnDocumentReady);
    
    /* 
        All functions to be called on $(document).ready() should be in this function
    */
    function mkdfOnDocumentReady() {
        mkdfInitQuantityButtons();
        mkdfInitSelect2();
	    mkdfInitSingleProductLightbox();
        mkdfQuickViewGallery().init();
    }

    function mkdfQuickViewGallery() {

        var initGallery = function(){
            var sliders = $('.mkdf-quick-view-gallery.mkdf-owl-slider');

            if (sliders.length) {
                sliders.each(function(){
                    var slider = $(this);
                    slider.owlCarousel({
                        items: 1,
                        loop: true,
                        autoplay: false,
                        smartSpeed: 600,
                        margin: 0,
                        center: false,
                        autoWidth: false,
                        animateIn : false,
                        animateOut : false,
                        dots: false,
                        nav: true,
                        navText: [
                            '<span class="mkdf-prev-icon"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n' +
                            '\t width="16px" height="54.063px" viewBox="0 0 16 54.063" enable-background="new 0 0 16 54.063" xml:space="preserve">\n' +
                            '<polygon points="14.576,52.17 4.125,27.069 14.542,2.052 12.662,1.27 1.902,27.107 1.941,27.123 12.697,52.952 "/>\n' +
                            '</svg></span>',
                            '<span class="mkdf-next-icon"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n' +
                            '\t width="16px" height="54.063px" viewBox="0 0 16 54.063" enable-background="new 0 0 16 54.063" xml:space="preserve">\n' +
                            '<polygon points="1.902,52.17 12.354,27.069 1.937,2.052 3.816,1.27 14.576,27.107 14.537,27.123 3.781,52.952 "/>\n' +
                            '</svg></span>'
                        ],
                        onInitialize: function () {
                            slider.css('visibility', 'visible');
                        }
                    });
                });
            }
        }

        return {
            init: function () {
                //trigger defined in yith-woocommerce-quick-view\assets\js\frontend.js, after quick view is returned
                $(document).on('qv_loader_stop',function(){
                    initGallery();

                    $('.yith-wcqv-wrapper').css('top', mkdf.scroll+20); //positioning popup on screens smaller than ipad portrait
                });
            }
        }
    }
	
    /*
    ** Init quantity buttons to increase/decrease products for cart
    */
	function mkdfInitQuantityButtons() {
		$(document).on('click', '.mkdf-quantity-minus, .mkdf-quantity-plus', function (e) {
			e.stopPropagation();
			
			var button = $(this),
				inputField = button.siblings('.mkdf-quantity-input'),
				step = parseFloat(inputField.data('step')),
				max = parseFloat(inputField.data('max')),
				minus = false,
				inputValue = parseFloat(inputField.val()),
				newInputValue;
			
			if (button.hasClass('mkdf-quantity-minus')) {
				minus = true;
			}
			
			if (minus) {
				newInputValue = inputValue - step;
				if (newInputValue >= 1) {
					inputField.val(newInputValue);
				} else {
					inputField.val(0);
				}
			} else {
				newInputValue = inputValue + step;
				if (max === undefined) {
					inputField.val(newInputValue);
				} else {
					if (newInputValue >= max) {
						inputField.val(max);
					} else {
						inputField.val(newInputValue);
					}
				}
			}
			
			inputField.trigger('change');
		});
	}

    /*
    ** Init select2 script for select html dropdowns
    */
	function mkdfInitSelect2() {
		var orderByDropDown = $('.woocommerce-ordering .orderby');
		if (orderByDropDown.length) {
			orderByDropDown.select2({
				minimumResultsForSearch: Infinity
			});
		}
		
		var variableProducts = $('.mkdf-woocommerce-page .mkdf-content .variations td.value select');
		if (variableProducts.length) {
			variableProducts.select2();
		}
		
		var shippingCountryCalc = $('#calc_shipping_country');
		if (shippingCountryCalc.length) {
			shippingCountryCalc.select2();
		}
		
		var shippingStateCalc = $('.cart-collaterals .shipping select#calc_shipping_state');
		if (shippingStateCalc.length) {
			shippingStateCalc.select2();
		}
	}
	
	/*
	 ** Init Product Single Pretty Photo attributes
	 */
	function mkdfInitSingleProductLightbox() {
		var item = $('.mkdf-woo-single-page.mkdf-woo-single-has-pretty-photo .images .woocommerce-product-gallery__image');
		
		if(item.length) {
			item.children('a').attr('data-rel', 'prettyPhoto[woo_single_pretty_photo]');
			
			if (typeof mkdf.modules.common.mkdfPrettyPhoto === "function") {
				mkdf.modules.common.mkdfPrettyPhoto();
			}
		}
	}

})(jQuery);