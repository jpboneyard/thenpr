<?php 
    $title = "The National Poster Retrospecticus";
    include($_SERVER["DOCUMENT_ROOT"]."/_includes/head.php"); ?>


    <div id="main" role="main">
         <section class="intro">
	    	<div class="home-hdr">
		    	<img class="home-hdr-img" src="_img/npr-hdr-logo-2.png" alt="The National Poster Retrospecticus"/>
				<h1 class="hdr-logo">The National Poster Retrospecticus</h1>
				<div class="social-mod">
					<a href="https://www.facebook.com/nationalposterretrospecticus" target="_blank"><img src="/_img/social-facebook.png" /></a> 
					<a href="https://twitter.com/thenpr" target="_blank"><img src="/_img/social-twitter.png" /></a> 
					<a href="http://instagram.com/jpboneyard" target="_blank"><img src="/_img/social-instagram.png" /></a>
					<a href="http://npr.supermarkethq.com" target="_blank"><img src="/_img/social-supermarket.png" /></a>
				</div> <!-- /social-mod -->		
			</div> <!-- /home-hdr -->
			<div class="intro-img-container"><img class="intro-img" src="_img/npr-hdr-btm-2k14.gif" alt="national poster retrospecticus btm"></div>   	
			<div class="scroll-arrow-mod">
				<div class="bounce">
					<img class="scroll-arrow" src="_img/arrow.png" />
				</div><!-- /bounce-mod -->
			</div><!-- /scroll-arrow-mod-->
    	</section> <!-- /.intro -->

    	<section class="about">
    		<div class="wrapper">
    			<h2 class="topper-h2 alt-h2">The National Poster Retrospecticus is a traveling show of more than 250 hand-printed event posters from over 80 of the most prominent poster designers in the country.</h2>
    		</div> <!-- /wrapper -->
    	</section> <!-- /section -->	
    		
    	<section class="shows">	
			<?php include($_SERVER["DOCUMENT_ROOT"]."/_includes/tour-slides.php"); ?>
		</section> <!-- /shows -->	
			
		<section class="praise">
			<div class="praise-topper">
				<div class="topper-txt-mod">
    				<h2 class="topper-h2 alt-h2">“Those poster bros took good care of me! Good exposure, nice graphics, friendly vibes. There’s tons of value here. For poster designers. For empty walls. For America!”</h2>
					<h3 class="attribution">—Aaron Draplin</h3> 
				</div> <!-- /topper-txt-mod -->	
    		</div> <!-- /shows-topper -->
    		<div class="wrapper praise-mod">
    			<div class="praise-item-mod">
    				<div class="praise-item media-block">
    					<img class="praise-img" src="/_img/doe-eyed-mug.png" />
    					<div class="praise-name">Eric Nyffeler</div>
    					<div class="praise-studio">Doe Eyed Design</div>
    					<p class="praise-txt">"The NPR stands as the most well organized, most well laid out, and most communicative show I've ever worked with. It's beautifully branded and incredibly curated."</p>
    				</div> <!-- /praise-item -->
    				<div class="praise-item media-block">
    					<img class="praise-img" src="/_img/burlesque-mug.png" />
    					<div class="praise-name">Mike Davis</div>
    					<div class="praise-studio">Co Exhibitions</div>
    					<p class="praise-txt">"We were honored to host The NPR. John and crew were super professional, well-organized, and easy to work with. We'd love to see this show return and we'd be thrilled to host it again."</p>
    				</div> <!-- /praise-item -->
    				<div class="praise-item media-block">
    					<img class="praise-img" src="/_img/aesthetic-mug.png" />
    					<div class="praise-name">Dan Ibarra</div>
    					<div class="praise-studio">Aesthetic Apparatus</div>
    					<p class="praise-txt">"We thought we had seen it all. After 15 years in the scene I can still find new and exciting art in this show and that's a testament to its expansiveness."</p>
    				</div> <!-- /praise-item -->
    			</div> <!-- /praise-item-mod -->
    		</div> <!-- /wrapper -->
    	</section> <!-- /praise -->

		<section class="greatest-hits">
			<div class="hits-topper">
    			<h2 class="topper-h2">Select Works</h2>
    		</div> <!-- /shows-topper -->
    		<div class="hits-mod">
    			<?php include($_SERVER["DOCUMENT_ROOT"]."/_includes/select-works.php"); ?>
    		</div> <!-- /wrapper -->
    	</section> <!-- /greatest-hits -->    	


		<section class="players">
			<div class="players-topper">
				<h2 class="topper-h2">The Players</h2>
    		</div> <!-- /players-topper -->	
    			<div class="wrapper players-mod">
    				<?php include($_SERVER["DOCUMENT_ROOT"]."/_includes/players.php"); ?>
    			</div> <! --/players-mod -->
    	</section> <!-- /players -->	


		<section class="praise">
			<div class="praise-topper">
    			<h2 class="topper-h2">Press</h2>
    		</div> <!-- /shows-topper -->
    		<div class="wrapper praise-mod">
    			<div class="praise-item-mod">
    				<div class="praise-item media-block">
    					<img class="praise-img" src="/_img/doe-eyed-mug.png" />
    					<div class="praise-name">Dig Boston</div>
    					<div class="praise-studio">Read More</div>
    				</div> <!-- /praise-item -->
    				<div class="praise-item media-block">
    					<img class="praise-img" src="/_img/burlesque-mug.png" />
    					<div class="praise-name">Printeresting</div>
    					<div class="praise-studio">Read More</div>
    				</div> <!-- /praise-item -->
    				<div class="praise-item media-block">
    					<img class="praise-img" src="/_img/aesthetic-mug.png" />
    					<div class="praise-name">Boston Globe</div>
    					<div class="praise-studio">Read More</div>
    				</div> <!-- /praise-item -->
    			</div> <!-- /praise-item-mod -->
    		</div> <!-- /wrapper -->
    	</section> <!-- /praise -->

<?php include($_SERVER["DOCUMENT_ROOT"]."/_includes/footer.php"); ?>