<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Image Accordion with CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Image Accordion with CSS3" />
        <meta name="keywords" content="accordion, images, slideshow, css3, css-only, web development, component, tutorial" />
        <meta name="author" content="Ring Wing for Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body class="h-entry">
        <div class="container">
			<!-- Codrops top bar -->
            
			   <a class="u-author h-card" href="https://jgregorymcverry.com">
      <img class="u-photo" src="https://jgregorymcverry.com/photos/assets/thumb.jpg" alt=""><br />jgmac1106</a><br />
      <p>Published on <time class="dt-published" datetime="2020-02-22 07:44:20">22<sup>nd</sup> February 2020</time>
			<header>
			
				<h1 class="p-name">Remix <span>with CSS</span></h1>
				<h2 class="p-summary">A css remix poem as a #poetryport gift for #IndieWeb</h2>
				
				<div class="support-note"><!-- let's check browser support with modernizr -->
					<!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
					<!--span class="no-csstransforms">CSS transforms are not supported in your browser</span-->
					<!--span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span-->
					<span class="no-csstransitions">CSS transitions are not supported in your browser</span>
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
			
				<div class="ia-container">
				
					<figure>
						<img src="https://cdn.glitch.com/e5c71df5-ace2-4f8d-9b2d-0e8776c06e2b%2Fremix.jpg?v=1582390887877" alt="image01" />
						<input type="radio" name="radio-set" checked="checked"/>
						<figcaption><span>True Colors</span></figcaption>
						
						<figure>
							<img src="https://cdn.glitch.com/e5c71df5-ace2-4f8d-9b2d-0e8776c06e2b%2Fconform.jpg?v=1582390893990" alt="image02" />
							<input type="radio" name="radio-set" />
							<figcaption><span>Honest Sound</span></figcaption>
							
							<figure>
								<img src="https://cdn.glitch.com/e5c71df5-ace2-4f8d-9b2d-0e8776c06e2b%2F5702138373_aba213676a_k.jpg?v=1582391451443" alt="image03" />
								<input type="radio" name="radio-set" />
								<figcaption><span>Silent Serenity</span></figcaption>
								
								<figure>
									<img src="https://cdn.glitch.com/e5c71df5-ace2-4f8d-9b2d-0e8776c06e2b%2Fbeardremix.jpg?v=1582390891373" alt="image04" />
									<input type="radio" name="radio-set" />
									<figcaption><span>In Welcome Words</span></figcaption>
									
									<figure>
										<img src="https://cdn.glitch.com/e5c71df5-ace2-4f8d-9b2d-0e8776c06e2b%2Fmenremix.jpg?v=1582390885660" alt="image05" />
										<input type="radio" name="radio-set" />
										<figcaption><span>Spilled in Magic</span></figcaption>
										
										<figure>
											<img src="https://cdn.glitch.com/e5c71df5-ace2-4f8d-9b2d-0e8776c06e2b%2F49135412347_042dea2651_o.jpg?v=1582391093465" alt="image06" />
											<input type="radio" name="radio-set" />
											<figcaption><span>of Lovely Remix</span></figcaption>
								
											<figure>
												<img src="https://cdn.glitch.com/e5c71df5-ace2-4f8d-9b2d-0e8776c06e2b%2F5336817033_444a156aab_o.jpg?v=1582391546897" alt="image07" />
												<input type="radio" name="radio-set" />
												<figcaption><span>Illuminated Darkness</span></figcaption>											

												<figure>
													<img src="https://cdn.glitch.com/e5c71df5-ace2-4f8d-9b2d-0e8776c06e2b%2F4244528820_9419194cde_b.jpg?v=1582391094102" alt="image08" />
													<input id="ia-selector-last" type="radio" name="radio-set" />
													<figcaption><span>In my soul</span></figcaption>
												</figure>
												
											</figure>
								
										</figure>	
											
									</figure>	
										
								</figure>
									
							</figure>
							
						</figure>
						
					</figure>
					
				</div><!-- ia-container -->
				
			</section>
			
        </div>
    </body>
</html>