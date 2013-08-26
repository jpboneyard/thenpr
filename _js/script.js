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

	// $(window).stellar();
 
});
