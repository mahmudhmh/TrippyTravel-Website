<?php
if(isset($_GET['msg']) && $_GET['msg']=='Success'){
	?>
	<script>
	alert("Login Success");
	</script>
	<?php
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trippy Travel</title>
    <link rel="shortcut icon" type="image/icon" href="assets/images/headicon.png"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- slider -->
    <link href="assets/css/Slider.css" rel="stylesheet">
    <link id="switcher" href="assets/css/Theme.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">
    <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700,800" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 

  </head>

  <body>

   	
  	<!-- Header stick -->
	<header id="header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default navbar">
			  	<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				      <!-- Text Logo -->
				      <a class="navbar-brand" href="index.php">Trippy•</a>

				    </div>

				    <!-- Nav Elements -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav menu navbar-right">
					        <li><a href="#">Home</a></li>
					        <li><a href="#services">Services</a></li>
					        <li><a href="#author">About Us</a></li>
				            <li><a href="#pricing">Packages</a></li>
				            <li><a href="#countries_feedback">Countries</a></li>
				            <li><a href="#contact">Feedback</a></li>
							<li><a href="login.php">Login</a></li>
				      	</ul>
				    </div>
			  	</div>
			</nav>
		</div>
	</header>

	<!-- Section 1 "FUEL MIND"-->

	<section id="fuel_mind">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-sm-push-6">
					<div class="fuel_mind-right">
						<img src="assets/images/Imga1.png" alt="IMG">
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-sm-pull-6">
					<div class="fuel_mind-left">
						<h1>Fuel Mind by Travel</h1>
						<p>Difference between countries is just culture,
							then why not to try to know every African
							culture by traveling?</p>
						<a href="login.php" class="primary-btn">Join Us Now!</a>
						<span>*Avaliable in Web only right now.</span>
					</div>
				</div>	

			</div>
		</div>
	</section>
		
		
	<main role="main">

	<!-- Section 2 "COUNTER"-->
	<section id="counter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="counter-area">

							<div class="counter-block">
								<div class="row">

									<!-- Reviews Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="single-counter">
											<i class="fa fa-files-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="1496">0</div>
											<h5 class="counter-name">Reviews</h5>
										</div>
									</div>


									<!-- Feedback Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="single-counter">
											<i class="fa fa-file-text-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="522">0</div>
											<h5 class="counter-name">Feedback</h5>
										</div>
									</div>

									<!-- Users Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="single-counter">
											<i class="fa fa-users" aria-hidden="true"></i>
											<div class="counter-value" data-count="15026">0</div>
											<h5 class="counter-name">Total Users</h5>
										</div>
									</div>

									<!-- Awards Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="single-counter">
											<i class="fa fa-trophy" aria-hidden="true"></i>
											<div class="counter-value" data-count="06">0</div>
											<h5 class="counter-name">Awards This year</h5>
										</div>
									</div>

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section 3 - Services -->
		<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="services-area">

							<div class="heading-area">
								<h2 class="heading-title">Services</h2>
								<span class="header-dot"></span>
								<p>We offer you a variety of services that will help you in your trips</p>
							</div>

							<!-- Services -->
							<div class="services-content">
								<div class="row">

									
									<div class="col-md-3 col-sm-6">
										<div class="services-single">
											<span class="services-icon-box">
												<i class="fa fa-home" aria-hidden="true"></i>
											</span>
											<h4>Vacations</h4>
											<p>Reccomend alot of places that we got a high reccomendation on it.</p>
										</div>
									</div>

									<div class="col-md-3 col-sm-6">
										<div class="services-single">
											<span class="services-icon-box">
												<i class="fa fa-star" aria-hidden="true"></i>
											</span>
											<h4>Rating System</h4>
											<p>Which allows you to add rate to let other people know about your experement.</p>
										</div>
									</div>
									
									<div class="col-md-3 col-sm-6">
										<div class="services-single">
											<span class="services-icon-box">
												<i class="fa fa-user" aria-hidden="true"></i>
											</span>
											<h4>Tourist Profile</h4>
											<p>All active users will have a profile that contain their trip history.</p>
										</div>
									</div>

									<div class="col-md-3 col-sm-6">
										<div class="services-single">
											<span class="services-icon-box">
												<i class="fa fa-street-view" aria-hidden="true"></i>
											</span>
											<h4>3D Modeling</h4>
											<p>Using google earth or 360Cities we will let you see the place withour going.</p>
										</div>
									</div>

									<div class="col-md-3 col-sm-6">
										<div class="services-single">
											<span class="services-icon-box">
												<i class="fa fa-road" aria-hidden="true"></i>
											</span>
											<h4>Navigation System</h4>
											<p>Gps that will help you find your destination easily Without having to get lost.</p>
										</div>
									</div>

									<div class="col-md-3 col-sm-6">
										<div class="services-single">
											<span class="services-icon-box">
												<i class="fa fa-users" aria-hidden="true"></i>
											</span>
											<h4>Social Network</h4>
											<p>By doing this it allow us to let every traveller connect with each other.</p>
										</div>
									</div>

									<div class="col-md-3 col-sm-6">
										<div class="services-single">
											<span class="services-icon-box">
												<i class="fa fa-mobile" aria-hidden="true"></i>
											</span>
											<h4>Mobile Marketing</h4>
											<p>Keep every user updated with our offers and discounts on travelling abroad.</p>
										</div>
									</div>

									<div class="col-md-3 col-sm-6">
										<div class="services-single">
											<span class="services-icon-box">
												<i class="fa fa-shield" aria-hidden="true"></i>
											</span>
											<h4>SOS</h4>
											<p>Hospitals and police stations around your current location to make it easy.</p>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		

		<!-- Section 3 - Video "Discover Now" -->
		<section id="discover-now">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="discover-now-area">

							<div class="heading-area">
								<h2 class="heading-title">Discover Now!</h2>
								<span class="header-dot"></span>
								<p>We easily combined the best places that our users had gone to, to help others choose the places to go wisely without need to go to any trip company</p>
							</div>


							<div class="discover-now-content">
								<iframe class="video-iframe" width="100%" height="720" src="assets/images/Home_Video.mp4" frameborder="0" allowfullscreen></iframe>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Section 4 - About Us "AUTHOR" -->
		<section id="author">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="author-area">

							<div class="heading-area">
								<h2 class="heading-title">About Us</h2>
								<span class="header-dot"></span>
							</div>


							<div class="author-content">
								<div class="row">
									<div class="col-md-6">
										<div class="author-image">
											<img src="assets/images/AboutImg.png" alt="Company Logo">
										</div>
									</div>
									<div class="col-md-6">
										<div class="author-info">
											<h3>Trippy Travel</h3>
											<p>We saw that culture is what make a difference between countries, as we see in Egypt the ancient Egyptians and Igbo in Nigeria.
												So we decided to try to cover most of the tourism places around Africa in one Web Application, and you gonna ask yourself what 
												are the functionality of the website?</p>

											<p>Tries to cover most of the tourism places and cultures around Africa, You can discover everyplace without needs to go there using 
											google earth modeling or 360Cities, Rating system for tourism places, GPS and travel updates</p>

											<div class="author-social">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
												<a href="#"><i class="fa fa-behance"></i></a>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Section 5 - Packages "PRICING" -->
		<section id="pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="pricing-area">

							<div class="heading-area">
								<h2 class="heading-title">Our Packages</h2>
								<span class="header-dot"></span>
								<p>Travelling the world will let you know more about other cultures and how they deal with their daily life</p>
							</div>

							<div class="pricing-content">
								<div class="row">

									<div class="col-sm-6 col-md-4">
										<div class="pricing-single">

											<div class="pricing-single-head">
												<h4>Zanzibar, TN</h4>
												<p class="price-tag">
													<span>$</span> 200
												</p>
											</div>

											<ul class="price-feature">
												<li> - Changuu  island </li>
												<li> - Nakupenda beach </li>
												<li> - The Old Fortres </li>
												<li> - Duration: 3D/2N </li>
											</ul>

											<div class="pricing-single-footer">
												<a href="Tanzania/Tanzania.html" class="order-btn">Reserve Now!</a>
											</div>

										</div>
									</div>

									<div class="col-sm-6 col-md-4">
										<div class="pricing-single popular-price-tag">


											<div class="pricing-single-head">
												<h4>Dahab, EG</h4>
												<p class="price-tag">
													<span>$</span> 150
												</p>
											</div>

											<ul class="price-feature">
												<li> - Blue hole </li>
												<li> - 3 pools </li>
												<li> - Wady alwshwash </li>
												<li> - Duration: 3D/2N </li>
											</ul>

											<div class="pricing-single-footer">
												<a href="Egypt/Egypt.html" class="order-btn">Reserve Now!</a>
											</div>
											

										</div>
									</div>

									<div class="col-sm-6 col-md-4">
										<div class="pricing-single">


											<div class="pricing-single-head">
												<h4>Rabat, MA</h4>
												<p class="price-tag">
													<span>$</span> 120
												</p>
											</div>

											<ul class="price-feature">
												<li> - Hassan Tower </li>
												<li> - Ecoclub De Rabat </li>
												<li> - Musee de Maroc Telecom </li>
												<li> - Duration: 3D/2N </li>
											</ul>

											<div class="pricing-single-footer">
												<a href="Morocco/Morocco.html" class="order-btn">Reserve Now!</a>
											</div>
											
											
										</div>
									</div>


								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section 6 - Countries Feedback -->
		<section id="countries_feedback">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="countries_feedback-area">
							<div class="heading-area">
								<h2 class="heading-title">Countries</h2>
								<span class="header-dot"></span>
							</div>

							<div class="countries_feedback-block">
								<ul class="testimonial-slide">

									<li>
										<p>"Egypt is considered to be a regional power in North Africa, the Middle East and the Muslim world, and a middle power worldwide."</p>
										<a href="Egypt/Egypt.html"><img class="ct-img" src="assets/images/Egypt.jpg" alt="Egypt"></a>
										<h5 class="ct-name"> Egypt</h5>
										<span class="ct-title">Discover Egypt</span>
									</li>
									<li>
										<p>"The United Republic of Tanzania is a country in East Africa bordered by Kenya and Uganda to the north, Rwanda, Burundi and the Democratic Republic of the Congo to the west, and Zambia, Malawi and Mozambique to the south. To the east it borders the Indian Ocean.."</p>
										<a href="Tanzania/Tanzania.html"><img class="ct-img" src="assets/images/Tanzania.jpg" alt="Tanzania"></a>
										<h5 class="ct-name"> Tanzania</h5>
										<span class="ct-title">Discover Tanzania</span>
									</li>
									<li>
										<p>"Destination Madagascar, the big red island. Madagascar is the largest African island situated in the Indian Ocean, about 450 km east of the coast of Mozambique.</p>
										<a href="Madgascar/Madgascar.html"><img class="ct-img" src="assets/images/Madagascar-Flag.jpg" alt="Madgascar"></a>
										<h5 class="ct-name"> Madgascar</h5>
										<span class="ct-title">Discover Madgascar</span>
									</li>
									<li>
										<p>"South Africa offers something for every potential visitor,South Africa may be at the bottom of Africa, but it’s widely regarded as being top in terms of its superb infrastructure, its legendary sunny climate, and its incredible geographic diversity."</p>
										<a href="SouthAfrica/SouthAfrica.html"><img class="ct-img" src="assets/images/south-africa-flag-png-xl.png" alt="SouthAfrica"></a>
										<h5 class="ct-name"> South Africa</h5>
										<span class="ct-title">Discover South Africa</span>
									</li>
									<li>
										<p>"The Kingdom of Morocco is the most westerly of the North African countries known as the Maghreb - the "Arab West". It has Atlantic and Mediterranean coastlines, a rugged mountain interior and a history of independence not shared by its neighbours."</p>
										<a href="Morocco/Morocco.html"><img class="ct-img" src="assets/images/900px-Flag_of_Morocco.svg.png" alt="Morocco"></a>
										<h5 class="ct-name"> Morocco</h5>
										<span class="ct-title">Discover Morocco</span>
									</li>
									<li>
										<p>"Mauritius is famous for the Dodo (an extinct flightless bird the size of a swan), a multicultural population, incredible expensive resorts (up to $600 a night and more) the island caters for the more wealthy customers, Mauritius rum, sugar and fruit jams, the Seven Coloured Earths, an underwater waterfall, the Giant water lilies in the Pamplemousses Botanical Garden, ravanne drum and Sega music, and nice golf courses."</p>
										<a href="Algeria/Algeria.html"><img class="ct-img" src="assets/images/800px-Flag_of_Algeria.svg.png" alt="Maurituis"></a>
										<h5 class="ct-name"> Algeria</h5>
										<span class="ct-title">Discover Algeria</span>
									</li>
									<li>
										<p>"Tunisia is a country in Northern Africa bordering the Mediterranean Sea. Neighboring countries include Algeria and Libya. The geography of Tunisia is varied and consists of mountains in the north and a semiarid south that merges into the Sahara. The government system is a republic</p>
										<a href="Tunisa/Tunisa.html"><img class="ct-img" src="assets/images/1280px-Flag_of_Tunisia_(1959–1999).svg.png" alt="Tunisa"></a>
										<h5 class="ct-name"> Tunisa</h5>
										<span class="ct-title">Discover Tunisa</span>
									</li>
									
								</ul>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
			
			<!-- Section 7 - DropFeedback "CONTACT US" -->

		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="contact-area">

							<div class="heading-area">
								<h2 class="heading-title">Drop Us A Feedback</h2>
								<span class="header-dot"></span>
								<p>Please be honest with us to know that is our points of weaknesses to begin to improve it</p>
							</div>


							<div class="contact-content">

								<div id="form-messages"></div>
								<form id="ajax-contact" method="post" action="phpmailer.php" class="contact-form">
									<div class="form-group">                
										<input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
									</div>
									<div class="form-group">                
										<input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
									</div>              
									<div class="form-group">
										<textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
									</div>
									<button type="submit" class="send-msg-btn"><span>SUBMIT</span></button>
						        </form>

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.497014359421!2d29.91897103774159!3d31.206956889510504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c3871de75dcb%3A0xf5ec0df3d140e8ce!2zRmFjdWx0eSBvZiBTY2llbmNlLCBBbGV4YW5kcmlhIFVuaXZlcnNpdHnZg9mE2YrYqSDYp9mE2LnZhNmI2YUgLSDYp9mE2LTYp9i32KjZig!5e0!3m2!1sen!2seg!4v1622067242798!5m2!1sen!2seg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</section>

	</main>
	
			

	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="footer-area">
				<div class="social-media">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
				<p class="copyright">&copy; Copyright <a rel="nofollow" href="index.php">Trippy Travel</a>. All right reserved.</p>
			</div>
		</div>

	</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/js/slick.min.js"></script>

    <script type="text/javascript" src="assets/js/counter.js"></script>

    <script type="text/javascript" src="assets/js/app.js"></script>

	<script type="text/javascript" src="assets/js/custom.js"></script>
	
    
  </body>
</html>