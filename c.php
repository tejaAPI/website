

-->
<!DOCTYPE html>
<html>
<head>
<title>VIGNAN PLACEMENTS</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Infirmary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>

<!-- //js -->


<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

<!--start-date-piker-->
	<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			});
		</script>
<!--/End-date-piker-->
	<script src="js/responsiveslides.min.js"></script>
			<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<!-- header -->
<div class="header wow zoomIn">
	<div class="container">
		<div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>0863-2234967</li>
				<li><a href="mailto:vuit16@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>vuit16@gmail.com</a></li>
			</ul>
		</div>
		<div class="header_right">
			<div class="login">
				<ul>
					
					<li>
						<div class="search-bar">
							<div class="search">		
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
							</div>
							<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
								<div id="small-dialog" class="mfp-hide">
									<div class="search-top">
										<div class="login_pop">
											<form action="#" method="post">
												<input type="submit" value="">
												<input type="text" name="Type something..." value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
											</form>
										</div>				
									</div>
									<script>
												$(document).ready(function() {
												$('.popup-with-zoom-anim').magnificPopup({
													type: 'inline',
													fixedContentPos: false,
													fixedBgPos: true,
													overflowY: 'auto',
													closeBtnInside: true,
													preloader: false,
													midClick: true,
													removalDelay: 300,
													mainClass: 'my-mfp-zoom-in'
												});
																												
												});
									</script>				
								</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->
<div class="header-bottom ">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo grid">
						<div class="grid__item color-3">
							<h1><a class="link link--nukun"  >VIGNAN<span>P</span>LACEMENTS</a></h1>
						</div>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--horatio">
						<ul class="nav navbar-nav menu__list">
						 
							<li class="menu__item menu__item--current"><a href="a1.html" class="menu__link">Home</a></li>
							
						    <li class="menu__item"><a href="Companies.html" class="menu__link">Companies</a></li>
							<li class="menu__item"><a href="eligible.html" class="menu__link">Eligibility check</a></li>	
							<li class="menu__item"><a href="placementrec.html" class="menu__link">PlacementRecord</a></li>
							<li class="menu__item"><a href="#" class="menu__link">AddStudentInfo</a></li> 
							
                        </ul>
							
					</nav>
				</div>
			</nav>
		</div>
	</div>

<!-- banner -->
<div class="banner">

				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
		
<?php
$con=mysqli_connect ("localhost","root","");
if(!$con)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'placements'))
{
	echo 'Database not selected';
}

$branch=$_POST['branch'];
$year=$_POST['year'];
$gender=$_POST['gender'];
$backlogs=$_POST['backlogs'];
$intermarks=$_POST['intermarks'];
$tenthmarks=$_POST['10thmarks'];
$btechaggr=$_POST['aggr'];
$backlogs=(int)$backlogs;
$intermarks=(int)$intermarks;
$tenthmarks=(int)$tenthmarks;
$btechaggr=(int)$btechaggr;


if ($backlogs>2 && $btechaggr<=70)
{
	echo "Not Eligible";
	
}
else{
	echo " Eligible";
}
// 
$query="select * from students where gender='$gender' and backlogs<='$backlogs' and btechaggr>='$btechaggr'";
$result=mysqli_query($con,$query);
//echo var_dump($result);
?>
<!DOCTYPE HTML>
<html>
<title><head>Fetch data from database</head></title>
<body>
<table align="center" border="1px" style="width:600px; line-height:40px;">
<tr>
<th colspan="9"><h2>Student Record</h2></th>
</tr>
<tr>
<th>regno</th>
<th>name</th>
<th>branch</th>
<th>year</th>
<th>gender</th>
<th>backlogs</th>
<th>intermarks</th>
<th>10thmarks</th>
<th>btech-aggr</th>

</tr>
<?php
while($rows=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $rows['regno']?></td>
<td><?php echo $rows['name']?></td>
<td><?php echo $rows['branch']?></td>
<td><?php echo $rows['year']?></td>
<td><?php echo $rows['gender']?></td>
<td><?php echo $rows['backlogs']?></td>
<td><?php echo $rows['intermarks']?></td>
		
<td><?php echo $rows['10thmarks']?></td>
<td><?php echo $rows['btechaggr']?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
		
		
<!-- //services -->
<!-- team -->
<div class="ind-team">
	<div class="container">
		<h3>Meet Our Team</h3>
		<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="team-img">
				<img class="img-responsive" src="images/lavu.jpg" alt=" "/>
				<div class="team-info">
					<ul>
						<li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
					</ul>
				</div>
			</div>
			<h4>Dr.Lavu Rathaiah</h4>
			<p>Chairman</p>
		</div>
		<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="team-img">
				<img class="img-responsive" src="images/kd.jpg" alt=" "/>
				<div class="team-info">
					<ul>
						<li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
					</ul>
				</div>
			</div>
			<h4>Dr.krishnaDevaraya</h4>
			<p>Vice-Chairman</p>
			
		</div>
		<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="team-img">
				<img class="img-responsive" src="images/my.jpg" alt=" "/>
				<div class="team-info">
					<ul>
						<li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
					</ul>
				</div>
			</div>
			<h4>Dr. M.Y.S.Prasad</h4>
			<p>Vice-Chancellor</p>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!-- team -->
<!-- capabilities -->
<div class="capacity">
	<div class="container">
		<h3>Capabilities</h3>
		<div class="col-md-3 capabil_grid1 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5700' data-delay='.5' data-increment="100">5700</div>
				<p>Students</p>	
			</div>
		</div>
		<div class="col-md-3 capabil_grid2 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1700' data-delay='.5' data-increment="5">1700</div>
				<p>Our Staff</p>	
			</div>
		</div>
		<div class="col-md-3 capabil_grid3 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='0021' data-delay='.5' data-increment="100">0021</div>				
				<p>Companies Visited</p>
			</div>
		</div>
		<div class="col-md-3 capabil_grid4 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='2500' data-delay='.5' data-increment="1">2500</div>
				<p>Students Placed</p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //capabilities -->
<!-- contact -->
<div class="contact">
	<div class="container">
		
		<div class="col-md-6 contact-right wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h3>Contact Us</h3>
			<div class="strip"></div>
			<ul class="con-icons">
				<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>2234560</li>
				<li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>vuit16@gmail.com</a></li>
			</ul>
			<ul class="fb_icons">
				<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
			</ul>
			<h3>Newsletter Sign up</h3>
			<div class="strip"></div>
			<form action="#" method="post">
				<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
				<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="col-md-6 contact-left wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h2>GET IN TOUCH</h2>
			<div class="strip"></div>
			<p class="para">Vignan's Foundation for Science, Technology & Research (Deemed to be University), 
Vadlamudi, Guntur-522213</p>
			<p class="copy-right">© 2018 VFSTR. All rights reserved | Design by <a >Dept. of IT</a></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->
<!-- login -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form action="#" method="post">
											<div class="sign-in">
												<h4>Username :</h4>
												<input type="text" name="regno" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<!-- login -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									<div class="login-bottom">
										<h3>Sign up</h3>
										<form action="php/reg.php" method="post">
											<div class="sign-up">
												<h4>Reg No :</h4>
												<input type="text" name="regno" value="Enter registration number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">

												<h4>First Name :</h4>
												<input type="text" name="fname" value="Enter First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											
											</div>
											<div class="sign-up">
												<h4>Last Name :</h4>
												<input type="text" name="lname" value="Enter Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											
											<div class="sign-up">
												<h4>Phone :</h4>
												<input type="number" class="form-control" name="phone" value="Pwd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="email" name="email" value="Email" class="form-control" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>password :</h4>
												<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Retype Password :</h4>
												<input type="password" name="pwd2" value="Retype password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

</body>
</html>

