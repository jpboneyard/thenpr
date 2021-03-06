/*global $:false */

$(document).ready(function(){

	var $container = $('#poster-grid');

	// masonry for poster grid
	$container.imagesLoaded(function(){

		var msnry = new Masonry( document.querySelector('#poster-grid'), {
			containerStyle: null,
			itemSelector: '.photo-grid-item'
		});

	});	
	
	var images = ['hdr-sign.png', 'hdr-pennant.png', 'hdr-map.png'];	
	$('<img src="_img/' + images[Math.floor(Math.random() * images.length)] + '">').appendTo('#banner');

	// var images = ['hdr-bg.png'];	
	$('#banner-container').css({'background-image': 'url(_img/' + images[Math.floor(Math.random() * images.length)] + ')'});

	// filament carousel
	$(".sponsor-trigger").click(function(){
		var $this = $(this);
		$(".sponsor-list").slideDown("slow");
		if($('.sponsor-list').is(":hidden")){
			$this.html("But wait, there's more!");
		} else {
			$this.html("That's all of em!");
		}
	}); // reveals more sponsor names

	$(".sponsor-main-item img[title]").tooltip();

	$("a.anchorlink").anchorAnimate();

	setTimeout(function() {

		if($(window).scrollTop() == 0) {
			$('#nav-side-mod').addClass('fadein-nav');
		} else {
			$('#nav-side-mod').addClass('show-nav-immediately');
		}

	}, 250);

	$(window).on('scroll', function() {
		$('#main > section').each(function() {
			var $this = $(this);
			if($this.attr('id')) { // only test if we have an ID

				var delta = $(this).offset().top - $(window).scrollTop();
				if(delta < 100 && delta > -100) {
					// put nav color changing code here
					$('.nav-side-item').removeClass('active');
					$('.nav-' + $(this).attr('id')).addClass('active');

					// comment me out!
					// console.log($(this).attr('id'));
				}
			}
		});
	});
 
});