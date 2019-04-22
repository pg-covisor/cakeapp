<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

   <!--- basic page needs
   ================================================== -->
    <?= $this->Html->charset() ?>
	<title> <?= isset($title) ? $title : "Default Title" ?> </title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
    <?= $this->Html->css(['basenew.css', 'vendor.css', 'main.css']) ?>

   <!-- script
   ================================================== -->
    <?= $this->Html->script(['modernizr.js', 'pace.js']) ?>   

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.ico">

</head>

<body id="top">
	
	<!-- header 
   ================================================== -->
   <header class="main-header">
   	
   	<div class="logo">
	      <a href="index.html">Elevate</a>
	   </div> 

	   <a class="menu-toggle" href="#"><span>Menu</span></a>   	

   </header>

   <!-- main navigation 
   ================================================== -->
   <nav id="menu-nav-wrap">

   	<h3>Navigation</h3>   	
		<ul class="nav-list">
			<li><a class="smoothscroll" href="#intro" title="">Home</a></li>
			<li><a class="smoothscroll" href="#features" title="">Features</a></li>
			<li><a class="smoothscroll" href="#infos" title="">Product Info</a></li>
			<li><a class="smoothscroll" href="#stats" title="">Stats</a></li>
			<li><a class="smoothscroll" href="#pricing" title="">Pricing</a></li>					
			<li><a class="smoothscroll" href="#testimonials" title="">Testimonials</a></li>	
			<li><a class="smoothscroll" href="#download" title="">Download</a></li>	
			<li><a class="smoothscroll" href="#subscribe" title="">Newsletter</a></li>			
		</ul>

		<h3>We Recommend Dreamhost</h3>  
		<p class="sponsor-text">
			Looking for an awesome and reliable webhosting? Try <a href="#">DreamHost</a>.
			Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>. 
		</p>

		<div class="action">
			<a class="button" href="#">Sign Up Now</a>
		</div>

	</nav> <!-- /menu-nav-wrap -->


	<!-- main content wrap
   ================================================== -->
   <div id="main-content-wrap">


		<!-- main content wrap
   	================================================== -->
   	<section id="intro">

		   <!-- <div class="shadow-overlay"></div> -->
		   
		   <div class="row intro-content">
		   	<div class="col-twelve">

		   		<h3 class="animate-intro">Introducing Elevate</h3>
			  		
					<h1 class="animate-intro">
						The perfect template to
						present your awesome product.
					</h1>	
					
					<div class="buttons">
						<a class="button stroke smoothscroll animate-intro" href="#features" title="">Features</a>
						<a class="button stroke smoothscroll animate-intro" href="#download" title="">Download</a>
					</div>					

					<img src="<?= $base_url ?>webroot/img/app-screenshot-big.jpg" alt="" class="animate-intro">   			

			  	</div> <!-- /twelve --> 		   			
		   </div> <!-- /row -->   

		</section> <!-- /intro -->


		<!-- features
   	================================================== -->
		<section id="features">

			<div class="row section-intro group animate-this">	
	   		<div class="col-twelve with-bottom-line">

	   			<h2 class="">Features You'll Love.</h2>

	   			<p class="lead">Lorem ipsum Tempor do Excepteur nulla aute deserunt reprehenderit aute commodo aliquip laboris velit eu esse exercitation ex fugiat pariatur aute consequat. Lorem ipsum Fugiat mollit quis qui. Lorem ipsum Duis Excepteur Duis magna fugiat incididunt qui id quis dolor nisi irure proident labore ut in incididunt eiusmod est anim.</p>

	   		</div>   		
	   	</div>

			<div class="row features-wrap">
					     		
				<div class="features-list block-1-3 block-s-1-2 block-tab-full">

					<div class="bgrid feature animate-this">	

						<span class="feature-count">01.</span>            

					   <div class="feature-content">

              	   	<h3>Fully Resposive</h3>

							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
						   </p>
						         		
						</div> 	         	 

					</div> <!-- /bgrid -->

					<div class="bgrid feature animate-this">	

						<span class="feature-count">02.</span>            

					   <div class="feature-content">

              	   	<h3>Retina Ready</h3>

							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
						   </p>
						         		
						</div> 	         	 

					</div> <!-- /bgrid -->

					<div class="bgrid feature animate-this">	

						<span class="feature-count">03.</span>            

					   <div class="feature-content">

              	   	<h3>Stylish Design</h3>

							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
						   </p>
						         		
						</div> 	         	 

					</div> <!-- /bgrid -->

					<div class="bgrid feature animate-this">	

						<span class="feature-count">04.</span>            

					   <div class="feature-content">

              	   	<h3>Clean Code</h3>

							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
						   </p>
						         		
						</div> 	         	 

					</div> <!-- /bgrid -->

					<div class="bgrid feature animate-this">	

						<span class="feature-count">05.</span>            

					   <div class="feature-content">

              	   	<h3>Easy To Customize</h3>

							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
						   </p>
						         		
						</div> 	         	 

					</div> <!-- /bgrid -->

					<div class="bgrid feature animate-this">	

						<span class="feature-count">06.</span>            

					   <div class="feature-content">

              	   	<h3>Free of Charge</h3>

							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
						   </p>
						         		
						</div> 	         	 

					</div> <!-- /bgrid -->

				</div> <!-- /features-list --> 				

			</div> <!-- /features-wrap -->
			
		</section> <!-- /features -->


		<!-- infos
   	================================================== -->
   	<section id="infos">

   		<div class="info-entry">

   			<div class="half-grey"></div>

   			<div class="row info-entry-content">

   				<div class="media-wrap">
   					<div class="media animate-this"  data-animate="fadeInRight">
   						<img src="<?= $base_url ?>webroot/img/app-screenshot-small.jpg" alt="">
   					</div>   				      				
   				</div>

   				<div class="col-six text-part">   				
   					
   					<h5 class="animate-this" data-animate="fadeInLeft">Some Cool Stuff</h5>
   					<h2 class="animate-this" data-animate="fadeInLeft">Clean and Organized Code</h2>

   					<p class="animate-this" data-animate="fadeInLeft">Lorem ipsum Sunt adipisicing adipisicing esse exercitation consequat sed irure commodo cupidatat aute ea adipisicing consectetur nulla consequat irure consectetur veniam sit sit qui reprehenderit officia sunt nulla elit nisi proident.</p>

   					<a href="#" class="button animate-this" data-animate="fadeInLeft">Learn More</a>
   			 					
   				</div>   				
   				
   			</div> <!-- /info-entry-content -->

   		</div> <!-- /info-entry -->

   		<div class="info-entry">

   			<div class="half-grey"></div>

   			<div class="row info-entry-content">
   			
	            <div class="media-wrap">
	            	<div class="media animate-this" data-animate="fadeInLeft">
	            		<div class="fluid-video-wrapper">
		               <iframe src="http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
		            </div>
	            	</div>   				
	   			</div>

	   			<div class="col-six text-part">   				
   					
   					<h5 class="animate-this" data-animate="fadeInRight">Video Stuff</h5>
   					<h2 class="animate-this" data-animate="fadeInRight">Your Super Cool Video</h2>

   					<p class="animate-this" data-animate="fadeInRight">Lorem ipsum Sunt adipisicing adipisicing esse exercitation consequat sed irure commodo cupidatat aute ea adipisicing consectetur nulla consequat irure consectetur veniam sit sit qui reprehenderit officia sunt nulla elit nisi proident.</p>

   					<a href="#" class="button animate-this" data-animate="fadeInRight">Learn More</a>
   			 					
   				</div>

   			</div> <!-- /info-entry-content -->

   		</div> <!-- /info-entry -->

   	</section> <!-- infos -->


		<!-- stats
   	================================================== -->
   	<section id="stats" class="count-up">

			<div class="row">
				<div class="col-twelve">

					<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

						<div class="bgrid stat">

							<div class="icon-part">
								<i class="icon-pencil-ruler"></i>
							</div>

							<h3 class="stat-count">110</h3>

							<h5 class="stat-title">
								Awesome Projects
							</h5>

						</div> <!-- /stat -->					

						<div class="bgrid stat">

							<div class="icon-part">
								<i class="icon-location-user"></i>
							</div>

							<h3 class="stat-count">9050</h3>

							<h5 class="stat-title">
								Clients Served
							</h5>

						</div> <!-- /stat -->

						<div class="bgrid stat">

							<div class="icon-part">
								<i class="icon-rewards-medal-1"></i>
							</div>

							<h3 class="stat-count">210</h3>

							<h5 class="stat-title">
								Awards Received
							</h5>

						</div> <!-- /stat -->									

						<div class="bgrid stat">

							<div class="icon-part">
								<i class="icon-alien"></i>
							</div>

							<h3 class="stat-count">123</h3>

							<h5 class="stat-title">
								Crazy Ideas
							</h5>

						</div> <!-- /stat -->

						<div class="bgrid stat">

							<div class="icon-part">
								<i class="icon-coffee-mug"></i>
							</div>

							<h3 class="stat-count">1500</h3>

							<h5 class="stat-title">
								Coffee Cups
							</h5>

						</div> <!-- /stat -->

						<div class="bgrid stat">

							<div class="icon-part">
								<i class="icon-hourglass"></i>
							</div>

							<h3 class="stat-count">7200</h3>

							<h5 class="stat-title">
								Hours
							</h5>

						</div> <!-- /stat -->

					</div> <!-- /stats-list -->

				</div> <!-- /twelve -->
			</div> <!-- /row -->

		</section> <!-- /stats -->


		<!-- pricing
   	================================================== -->
		<section id="pricing">

	   	<div class="row section-intro animate-this">
	   		<div class="col-twelve with-bottom-line">

	   			<h2>Plans and Pricing.</h2>

	   			<p class="lead">Lorem ipsum Tempor do Excepteur nulla aute deserunt reprehenderit aute commodo aliquip laboris velit eu esse exercitation ex fugiat pariatur aute consequat. Lorem ipsum Fugiat mollit quis qui. Lorem ipsum Duis Excepteur Duis magna fugiat incididunt qui id quis dolor nisi irure proident labore ut in incididunt eiusmod est anim.</p>

	   		</div>   		
	   	</div>

	   	<div class="row pricing-content">

	         <div class="pricing-tables block-1-3  group">

	            <div class="bgrid animate-this"> 

	            	<div class="price-block">

	            		<div class="top-part">

		            		<h3 class="plan-title">Starter</h3>
			               <p class="plan-price"><sup>$</sup>4.99</p>
			               <p class="price-month">Per month</p>		             

		            	</div>                

		               <div class="bottom-part">

		            		<ul class="features">
			                  <li><strong>3GB</strong> Storage</li>
			                  <li><strong>10GB</strong> Bandwidth</li>		                  
			                  <li><strong>5</strong> Databases</li>		                  
			                  <li><strong>30</strong> Email Accounts</li>
			               </ul>

			               <a class="button large" href="">Get Started</a>

		            	</div>

	            	</div>           	
	                        
				   </div> <!-- /bgrid -->

	            <div class="bgrid animate-this">

	            	<div class="price-block primary" data-info="popular">

	            		<div class="top-part">

		            		<h3 class="plan-title">Standard</h3>
			               <p class="plan-price"><sup>$</sup>9.99</p>
			               <p class="price-month">Per month</p>							

		            	</div>               

		               <div class="bottom-part">

		            		<ul class="features">
			                  <li><strong>5GB</strong> Storage</li>
			                  <li><strong>15GB</strong> Bandwidth</li>		                  
			                  <li><strong>7</strong> Databases</li>		                  
			                  <li><strong>40</strong> Email Accounts</li>
			               </ul>

			               <a class="button large" href="">Get Started</a>

		            	</div>
	            		
	            	</div>            	                 

				  </div> <!-- /bgrid -->

	           <div class="bgrid animate-this">               

	               <div class="price-block">

	            		<div class="top-part">

		            		<h3 class="plan-title">Premium</h3>
			               <p class="plan-price"><sup>$</sup>29.99</p>
			               <p class="price-month">Per month</p>	                		               

		            	</div> 
		            	
							<div class="bottom-part">

		            		<ul class="features">
			                  <li><strong>10GB</strong> Storage</li>
			                  <li><strong>30GB</strong> Bandwidth</li>		                  
			                  <li><strong>15</strong> Databases</li>		                  
			                  <li><strong>60</strong> Email Accounts</li>
			               </ul>

			               <a class="button large" href="">Get Started</a>

		            	</div>	            		                
	            		
	            	</div>                              

				   </div> <!-- /bgrid -->		           

	         </div> <!-- /pricing-tables --> 

	      </div> <!-- /pricing-content --> 

	   </section> <!-- Pricing -->


	   <!-- testimonials
   	================================================== -->
	   <section id="testimonials">
	   	<div class="row testimonial-content">
	   		<div class="col-twelve">

	   			<h2 class="h01 animate-this">
                  Hear What Our Customers Say.
               </h2>

					<div id="testimonial-slider" class="flexslider animate-this">
						<ul class="slides">	
						   <li>
							  	<p>&ldquo;Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.&rdquo;</p>
							  	<p class="author-info">&mdash; Steve Jobs</p>
							</li>						
							<li>
								<p>&ldquo;Good design is as little design as possible. Less, but better - because it concentrates on the essential aspects, and the products are not burdened with non-essentials. Back to purity, back to simplicity..&rdquo;</p>
								<p class="author-info">&mdash; Dieter Rams</p>
							</li>						
							<li>
							  	<p>&ldquo;A fundamental part of that is making mistakes together. There's no learning without trying lots of ideas and failing lots of times.&rdquo;</p>
							  	<p class="author-info">&mdash; Jony Ive</p>
							</li>
						</ul>
					</div>

					<div class="flexslider-controls animate-this">
					   <ul class="flex-control-nav">
					      <li><img src="<?= $base_url ?>webroot/img/customer01.jpg" alt=""></li>
					      <li><img src="<?= $base_url ?>webroot/img/customer02.jpg" alt=""></li>
					      <li><img src="<?= $base_url ?>webroot/img/customer03.jpg" alt=""></li>
					   </ul>
					</div>
						
	   		</div>
	   	</div>
	   </section> <!-- /testimonials -->


	   <!-- download
   	================================================== -->
   	<section id="download">

	   	<div class="overlay"></div>

	   	<div class="row download-content" >
	   		<div class="col-twelve">

					<div class="text-part">
						<h2 class="animate-this">Download Elevate Now.</h2>

			   		<p class="lead animate-this">Lorem ipsum Tempor do Excepteur nulla aute deserunt reprehenderit aute commodo aliquip laboris velit eu esse exercitation ex fugiat pariatur aute consequat. Lorem ipsum Fugiat mollit quis qui. Lorem ipsum Duis Excepteur Duis magna fugiat incididunt qui id quis dolor nisi irure proident labore ut in incididunt eiusmod est anim.</p>
					</div>   			

			   	<a class="button large animate-this" href="#">                               
			         Download Elevate
			      </a>  			

	   		</div>
	   	</div>
   	</section> <!-- /download -->


	   <!-- subscribe
   	================================================== -->
  		<section id="subscribe">
               
         <div class="row subscribe-content">
            <div class="col-twelve">

               <h2 class="h01 animate-this">Stay upto date, join our newsletter</h2>
               <form id="mc-form" class="group" novalidate="true" autocomplete="off">

               	<div class="row">
               		<div class="col-eight tab-full left animate-this" data-animate="fadeInLeft">					
			   				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your Email" required="">			   				
			   			</div>

				   		<div class="col-four tab-full right animate-this"  data-animate="fadeInRight">
				   			<input type="submit" value="Get Notified" name="subscribe" class="button large">
				   		</div>				   		
               	</div> <!-- /row -->	

               	<label for="mce-EMAIL" class="subscribe-message"></label>					
					
					</form>
            
            </div>
         </div>
                
      </section> <!-- /subscribe -->		
   
   </div> <!-- /main-content-wrap -->


   <!-- footer
	================================================== -->
	<footer id="main-footer">

   	<div class="footer-social-wrap">  
   		<div class="row">
					
	         <ul class="footer-social-list">
	            <li><a href="#">
	             	<i class="fa fa-facebook-square"></i>
	            </a></li>
	            <li><a href="#">
	              	<i class="fa fa-twitter"></i>
	            </a></li>
              <li><a href="#">
	              	<i class="fa fa-google-plus"></i>
	            </a></li>
	            <li><a href="#">
	              	<i class="fa fa-pinterest"></i>
	            </a></li>
	            <li><a href="#">
	              	<i class="fa fa-instagram"></i>
	            </a></li>
	            <li><a href="#">
	              	<i class="fa fa-dribbble"></i>
	            </a></li>
	         </ul>
		         
			</div> 
   	</div> <!-- /footer-social-wrap -->

	   <div class="footer-info-wrap">

	   	<div class="row footer-info">

		  		<div class="col-four tab-full">
		  			<h4><i class="icon-location-map-1"></i> Where to Find Us</h4>

		  			<p>
		         1600 Amphitheatre Parkway<br>
		         Mountain View, CA<br>
		         94043 US
		         </p>
		  		</div>

		   	<div class="col-four tab-full collapse">
	   			<h4><i class="icon-phone-incoming"></i> Get In Touch</h4>

	   			<p>someone@elevatewebsite.com<br>
				   	info@elevatewebsite.com <br>
				   	Phone: (+63) 555 1212			     
				   </p>
	   		</div>

	   		<div class="col-four tab-full">
	   			<h4><i class="icon-organization-hierarchy-3"></i> Company Links</h4>

				   <ul class="footer-link-list">
				   	<li><a href="#">Company Journal</a></li>
				   	<li><a href="#">Product Support</a></li>
				   	<li><a href="#">Privacy Policy</a></li>
				   </ul>
	   		</div>
		   		
		  	</div>
	   </div> <!-- /footer-info-wrap -->
	   	
	   <div class="footer-bottom"> 

	   	<div class="copyright">
		     	<span>© Copyright Elevate 2016.</span> 
		     	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>	         	
		   </div>  		
   	</div>
	   	
   </footer>   

   <div id="go-top">
		<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
	</div>

   <!-- preloader
   ================================================== -->
   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
    <?= $this->Html->script(['jquery-2.1.3.min.js','plugins.js','main.js']) ?>    
   

</body>

</html>