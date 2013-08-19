$(document).ready(function(){

	var $container = $('#poster-grid');
	$container.imagesLoaded(function(){
	  $container.masonry({
	    itemSelector : '.photo-grid-item',
	    isFitWidth:true
	  });  
	});	
// masonry for poster grid
	
var images = ['hdr-sign.png', 'hdr-pennant.png', 'hdr-map.png'];	
$('<img src="_img/' + images[Math.floor(Math.random() * images.length)] + '">').appendTo('#banner');
var images = ['hdr-bg.png'];	
$('#banner-container').css({'background-image': 'url(_img/' + images[Math.floor(Math.random() * images.length)] + ')'});
// filament carousel

	$(".sponsor-trigger").click(function(){
		var $this = $(this);
	$(".sponsor-list").slideDown("slow");
		if($('.sponsor-list').is(":hidden")){
            $this.html("But wait, there's more!");
         }
         else{
            $this.html("That's all of em!");
         }
	}); // reveals more sponsor names

	$(function(){ 
		$(".sponsor-main-item img[title]").tooltip();
	});

});





