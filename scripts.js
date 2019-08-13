	+function ($) {

		/* Scroll to ID button */

	    function goToByScroll(id){
	        // Remove "link" from the ID
	        id = id.replace("link", "");
	        // Scroll
	        $('html,body').animate({
	                scrollTop: $("#"+id).offset().top-50},
	            'slow');
	    }


	    /* Email validation with regexp */

		function isValidEmailAddress(emailAddress) {
			var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
			return pattern.test(emailAddress);
		}


	    /* Modal windows behavior */

		function close_modal(modal) {
			$(".alerts").html('');
			$("html").removeClass("noscroll");
			$(modal).closest("figure.popup-window").removeClass('visible').hide();
		}

		$(".modal-button").click(function (event) {
			var target = "figure.popup-window."+$(this).attr("data-modal");
			$("html").addClass("noscroll");
			$(target).show().addClass('visible');
			event.preventDefault();
		});

		$("a.scroll-cat").click(function (e) {
			(e).preventDefault();
			var cat = $(this).data("cat");
			goToByScroll(cat);
		});


		/* Visualizer */

		function show_product_image() {
			$('#prod_img').each(function () {
				var img_filename = '';
				var img_path = '';
				var img_line = $(this).attr('data-line');
				var img_color = $(this).attr('data-color');
				var img_stone = $(this).attr('data-stone');
				var img_modules = $(this).attr('data-modules');

				if ( (typeof img_line != 'undefined') && (typeof img_color != 'undefined') && (typeof img_stone != 'undefined') && (typeof img_modules != 'undefined') ) {
					img_filename = img_line+'_'+img_color+'_'+img_stone+'_'+img_modules;
					//console.log(img_filename);
					img_filename = img_filename+'.jpg';
					img_path = $('.navbar-brand').attr('href') + '/wp-content/themes/avel/img/visualizer/products/';
					img_filename = img_path+img_filename;
					$('#prod_img').css('background-image', 'url(' + img_filename + ')');
				}
			})
		}


		$('.builder-line').click( function () {
			$('.builder-block').removeClass('selected');
			$(this).addClass('selected');
			var line = $(this).attr('data-line');
			$( '.builder-stone' ).hide();
			$( '.builder-color' ).hide();
			$( '.builder-modules').hide();
			$( '.builder-block.'+line ).show();

			$('#prod_img').attr('data-line',line);

			if (line === 'ani') {
				$('.builder-modules.pave').addClass('selected');
				$('.builder-stone.pave').addClass('selected');
				$('.builder-color.white-gold').addClass('selected');

				$('#prod_img').attr('data-stone','pav');
				$('#prod_img').attr('data-color','whi');
				$('#prod_img').attr('data-modules','pav');
			}
			if (line === 'bas') {
				$('.builder-color.white-gold').addClass('selected').click();
				$('.builder-stone.citrine-topaz').addClass('selected');
				$('.builder-modules.stone').addClass('selected');

				$('#prod_img').attr('data-modules','sto');
				$('#prod_img').attr('data-color','whi');
				$('#prod_img').attr('data-stone','cit_tpz');
			}
			if (line === 'med') {
				$('.builder-modules.sgriffato').addClass('selected');
				$('.builder-color.rose-gold').addClass('selected').click();
				$('.builder-stone.ptourmaline-gtourmaline').addClass('selected');

				$('#prod_img').attr('data-modules','sgr');
				$('#prod_img').attr('data-color','ros');
				$('#prod_img').attr('data-stone','gto_pto');
			}
			if (line === 'top') {
				$('.builder-modules.pave').addClass('selected');
				$('.builder-color.yellow-gold').addClass('selected').click();
				$('.builder-stone.citrine').addClass('selected');

				$('#prod_img').attr('data-modules','pav');
				$('#prod_img').attr('data-color','yel');
				$('#prod_img').attr('data-stone','cit');
			}
			show_product_image();
		});

		$('.visualizer-section').on( 'click', '.builder-color', function () {
			$('.builder-color').removeClass('selected');
			$(this).addClass('selected');

			var color = $(this).attr('data-color');
			$('#prod_img').attr('data-color',color);

			var line = $('#prod_img').attr('data-line');

			$('.builder-stone').hide();
			console.log('.builder-stone.'+line+'.'+color);
			$('.builder-stone.'+line+'-'+color).show();

			show_product_image();
		});

		$('.visualizer-section').on( 'click', '.builder-stone', function () {
			$('.builder-stone').removeClass('selected');
			$(this).addClass('selected');
			var stone = $(this).attr('data-stone');
			$('#prod_img').attr('data-stone',stone);
			show_product_image();
		});

		$('.visualizer-section').on( 'click', '.builder-modules', function () {
			$('.builder-modules').removeClass('selected');
			$(this).addClass('selected');
			var modules = $(this).attr('data-modules');
			$('#prod_img').attr('data-modules',modules);
			show_product_image();
		});

		$('.visualizer-section .builder-line.top').click();
		$('.visualizer-section .builder-color.yellow-gold').click();
		$('.visualizer-section .builder-stone.citrine').click();
		$('.visualizer-section .builder-modules.pave').click();


		show_product_image();

	}(jQuery);