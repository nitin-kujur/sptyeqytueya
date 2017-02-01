
		<div class="jumbotron w3-dark-grey jumbo">
			<div class="container-fluid w3-text-white">
				<div class="row">
					<div class="col-md-5">
						<br><br>
						<div class="row">
							<div class="col-md-3 col-xs-6">
								<div class="w3-right">
									<u><h4>Menu</h4></u>
									<h6>Sports</h6>
									<h6>Events</h6>
									<h6>Clubss</h6>
									<h6>Players</h6>	
									<h6>Coaching</h6>		
									<h6>Shop</h6>
								</div>
							</div>
							<div class="col-md-9 col-xs-6">
								<u><h4>Follow Us On</h4></u>	
								<h6>Facebook</h6>
								<h6>Twitter</h6>
								<h6>Linkedin</h6>		
							</div>				
						</div>			
					</div>
					<div class="col-md-7 text-center">
						<h2 class="w3-text-orange">Get In Touch With Us</h2>
						<div class="row text-left">
							<div class="row-height">
								<div class="col-xs-6 col-height">
									<label><small>Your Name *</small></label>	
									<input class="form-control w3-margin-bottom" type="text" placeholder="">
									<label><small>Email Address *</small></label>	
									<input class="form-control w3-margin-bottom" type="text" placeholder="">
									<label><small>Subject *</small></label>	
									<input class="form-control" type="text" placeholder="">				
								</div>
								<div class="col-xs-6 col-height">
									<label><small>Message *</small></label>	
									<textarea class="form-control" style="height:88%;"></textarea>				
								</div>						
							</div>				
						</div>	
						<button type="submit" class="btn btn-warning1 w3-hover-shadow w3-orange w3-text-white w3-margin-top">Send Message</button>		
					</div>		
				</div>	
				
			</div>
		</div>

		<!-- <div class="jumbotron btn-warning jumbo" data-stellar-background-ratio="0.8"> -->
			<div class="container-fluid w3-text-white btn-danger disabled text-center">
				<label>Copyright 2016 @ Zono Cloud Initiative. All rights Reserved.</label>				
			</div>
		<!-- </div> -->

		<script src="js/owl.carousel.min.js"></script>
	  	<script src="js/flowtype.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$('.input-grp .btn-group').addClass('input-sm');
			});

			$(document).ready(function(){


	 			$('.owl-carousel-featured-clubs').owlCarousel({
			 			
				    margin:75,
				    // autoplay:true,
				    // autoplaySpeed:2000,
				    responsiveClass:true,
				    responsive:{
				        0:{
				            items:2,
				            autoplay:true,
				            loop:true,
						    autoplaySpeed:2000
				            
				            
				        },
				        600:{
				            items:3,
				            autoplay:true,
		            		loop:true,
						    autoplaySpeed:2000
				            
				        },
				        1000:{
				            items:5
				            

				        }
				    }
				});

			 	$('.owl-carousel-featured-players').owlCarousel({
			 			
				    margin:75,
				    // autoplay:true,
				    // autoplaySpeed:2000,
				    responsiveClass:true,
				    responsive:{
				        0:{
				            items:2,
				            autoplay:true,
		            		loop:true,
						    autoplaySpeed:2000
				            
				        },
				        600:{
				            items:3,
				            autoplay:true,
		            		loop:true,
						    autoplaySpeed:2000
				            
				        },
				        1000:{
				            items:5
				            

				        }
				    }
				});

			});

			function clickPrevElmnt(obj){
				// $(obj).prev().trigger('click');
				this.previousElementSibling.click();
			}

		</script>

	</body>
</html>
