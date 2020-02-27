<?php 
// bắt đầu sử dụng session
session_start();
require_once "./config/utils.php";
$loggedInUser = $_SESSION[AUTH];
echo $loggedInUser['name'];
 ?>
<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>
  
<!-- Mirrored from titanicthemes.com/travel/blue/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Feb 2020 09:36:52 GMT -->
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Agency - HTML5 Booking template</title>
	
    <!-- Bootstrap -->
    <link href="<?= THEME_ASSET_URL ?>dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?= THEME_ASSET_URL ?>assets/css/custom.css" rel="stylesheet" media="screen">

    <!-- Carousel -->
	<link href="<?= THEME_ASSET_URL ?>examples/carousel/carousel.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?= THEME_ASSET_URL ?>assets/js/html5shiv.js"></script>
      <script src="<?= THEME_ASSET_URL ?>assets/js/respond.min.js"></script>
    <![endif]-->
	
    <!-- Fonts -->	
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>	
	<!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= THEME_ASSET_URL ?>assets/css/font-awesome.css" media="screen" />
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="<?= THEME_ASSET_URL ?>assets/css/font-awesome-ie7.css" media="screen" /><![endif]-->
	
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?= THEME_ASSET_URL ?>css/fullscreen.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?= THEME_ASSET_URL ?>rs-plugin/css/settings.css" media="screen" />

    <!-- Picker UI-->	
	<link rel="stylesheet" href="<?= THEME_ASSET_URL ?>assets/css/jquery-ui.css" />		
	
    <!-- jQuery -->	
    <script src="<?= THEME_ASSET_URL ?>assets/js/jquery.v2.0.3.js"></script>
	
	
  </head>
  <body id="top">
    
	<!-- Top wrapper -->
	<div class="navbar-wrapper2 navbar-fixed-top">
      <div class="container">
		<div class="navbar mtnav">

			<div class="container offset-3">
			  <!-- Navigation-->
			  <div class="navbar-header">
				<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a href="index-2.html" class="navbar-brand"><img src="<?= THEME_ASSET_URL ?>images/logo.png" alt="Travel Agency Logo" class="logo"/></a>
			  </div>
			  <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
				  <li class="dropdown active">
					<a  href="index.php">Trang chủ</a>
					
				  <li class="dropdown">
					<a   href="login.php">Tin tức</a>
					
				  </li>
				 			  
							  
				  <li class="dropdown">
					<a href="login.php">Đăng nhập</a>
					
				  </li>		
				</ul>
			  </div>
			  <!-- /Navigation-->			  
			</div>
		
        </div>
      </div>
    </div>

	<div id="dajy" class="fullscreen-container mtslide sliderbg fixed">
			<div class="fullscreenbanner">
				<ul>


				</ul>
				<div class="tp-bannertimer none"></div>
			</div>
		</div>

	
		<script type="text/javascript">

			var tpj=jQuery;
			tpj.noConflict();

			tpj(document).ready(function() {

			if (tpj.fn.cssOriginal!=undefined)
				tpj.fn.css = tpj.fn.cssOriginal;

				tpj('.fullscreenbanner').revolution(
					{
						delay:9000,
						startwidth:1170,
						startheight:600,

						onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

						thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
						thumbHeight:50,
						thumbAmount:3,

						hideThumbs:0,
						navigationType:"bullet",				// bullet, thumb, none
						navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

						navigationStyle:false,				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


						navigationHAlign:"left",				// Vertical Align top,center,bottom
						navigationVAlign:"bottom",					// Horizontal Align left,center,right
						navigationHOffset:30,
						navigationVOffset:30,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						touchenabled:"on",						// Enable Swipe Function : on/off


						stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
						stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

						hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
						hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
						hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


						fullWidth:"on",							// Same time only Enable FullScreen of FullWidth !!
						fullScreen:"off",						// Same time only Enable FullScreen of FullWidth !!


						shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

					});


		});
		</script>
		

		



	<!-- WRAP -->
	<div class="wrap cstyle03">
		
		<div class="container mt-200 z-index100">		
		  <div class="row">
			<div class="col-md-4">
				<div class="bs-example bs-example-tabs cstyle04">
				
					
					
					<div class="tab-content3" id="myTabContent">
						<div id="air" class="tab-pane fade active in">
							
							<div class="w50percent">
								<div class="wh90percent textleft">
									<span class="opensans size13"><b>Từ</b></span>
									<select class="form-control mySelectBoxClass">
										  <option>Hà Nội</option>
										  <option selected>Hà Nam</option>
										  <option>Nam Định</option>
										  <option>Ninh Bình</option>
										  <option>Thái Bình</option>
										</select>>
								</div>
							</div>

							<div class="w50percentlast">
								<div class="wh90percent textleft right">
									<span class="opensans size13"><b>Đến</b></span>
									<select class="form-control mySelectBoxClass">
										  <option>Hà Nội</option>
										  <option selected>Hà Nam</option>
										  <option>Nam Định</option>
										  <option>Ninh Bình</option>
										  <option>Thái Bình</option>
										</select>>
								</div>
							</div>
							
							
							<div class="clearfix"></div><br/>
							
							<div class="w50percent">
								<div class="wh90percent textleft">
									<span class="opensans size13"><b>Giờ đi</b></span>
									<select class="form-control mySelectBoxClass">
										  <option>6h30 AM</option>
										  <option selected>8h30 AM</option>
										  <option>11h30 AM</option>
										  <option>4h30 PM</option>
										  <option>6h30 PM</option>
										</select>>
								</div>
							</div>

							<div class="w50percentlast">
								<div class="wh90percent textleft right">
									<span class="opensans size13"><b>Ngày</b></span>
									<input type="text" class="form-control mySelectCalendar" id="datepicker4" placeholder="mm/dd/yyyy"/>
								</div>
							</div>
							
							<div class="clearfix"></div>
							
							<div class="room1 margtop15">
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Người lớn</b></span>
										<select class="form-control mySelectBoxClass">
										  <option>1</option>
										  <option selected>2</option>
										  <option>3</option>
										  <option>4</option>
										  <option>5</option>
										</select>
									</div>
								</div>

								<div class="w50percentlast">	
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Trẻ em</b></span>
										<select class="form-control mySelectBoxClass">
										  <option>0</option>
										  <option selected>1</option>
										  <option>2</option>
										  <option>3</option>
										  <option>4</option>
										  <option>5</option>
										</select>
									</div>
								</div>
							</div>
							
						</div>
						<!--End of 1st tab -->
						
						<div id="hotel" class="tab-pane fade">

							
							<div class="clearfix"></div>
							
							<div class="room1 margtop15">
								

								<div class="w50percentlast">	
									<div class="wh90percent textleft right ohidden">
																	
										<div class="w50percentlast">
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="room2 none">
								<div class="clearfix"></div><div class="line1"></div>
								
							</div>		

							
						</div>
						<!--End of 2nd tab -->
						
						<div id="car" class="tab-pane fade">

							
							
							<div class="clearfix"></div><br/>
							
						

							
							
							<div class="clearfix"></div>
							
						
						</div>
						<!--End of 3rd tab -->
						
					

							<div>
							
							<div class="clearfix"></div><br/>
							
							
						</div>
						<!--End of 4th tab -->
					</div>
					
						<div class="searchbg">
							<form action="http://titanicthemes.com/travel/blue/list4.html">
								<button type="submit" class="btn-search">Search</button>
							</form>
						</div>
						
				</div>
			</div>
			<div class="col-md-4">
				<div class="shadow cstyle05">
					<div class="fwi one" style="height=200px;"><img src="<?= THEME_ASSET_URL ?>images/hanoi.jpg" alt=""  /><div class="mhover none"><span class="icon"><a href="list4.html"></a></span></div></div>
					<div class="ctitle">Hà Nội<a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a>
						<span>Nam Định</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="shadow cstyle05">
					<div class="fwi one"><img src="<?= THEME_ASSET_URL ?>images/surfer.jpg" alt="" /><div class="mhover none"><span class="icon"><a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a></span></div></div>
					<div class="ctitle">Hà Nội<a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a>
						<span>Hà Nam</span>
					</div>
				</div>			
			</div>
		  </div>
		</div>
		
		<div class="deals3">
			<div class="container">	
				<div class="row">
								
					</div>
					<!-- End of first row-->
					
		</div>
		
		<div class="lastminute3">
			<div class="container">	
				<img src="<?= THEME_ASSET_URL ?>images/rating-4.png" alt=""/><br/>
				LAST MINUTE: <b>Barcelona</b> - 2 nights - Flight+4* Hotel, Dep 27h Aug from $209/person<br/>
				<form action="http://titanicthemes.com/travel/blue/details.html">
					<button class="btn iosbtn" type="submit">Read more</button>
				</form>
			</div>
		</div>	
		
			
		
			<hr class="featurette-divider2">

			
			  <div class="col-md-9">
			  
				<!-- Carousel -->
				
			  
			  </div>
			</div>			

		</div>


		
		<!-- FOOTER -->

		<div class="footerbg">
			<div class="container" style="border: 1px solid red">		
				
				
				<!-- End of column 1-->
				
				<div class="col-md-3" style="margin-top: 120px;">
					<span class="ftitle">Điểm đi</span>
					<br/><br/>
					<ul class="footerlist">
						<li><a href="#">Hà Nội</a></li>
						<li><a href="#">Hà Nội</a></li>
						<li><a href="#">Hà Nội</a></li>
						<li><a href="#">Hà Nội</a></li>
						<li><a href="#">Hà Nội</a></li>
						<li><a href="#">Hà Nội</a></li>
					</ul>
				</div>
				<!-- End of column 2-->		
				
				<div class="col-md-3" style="margin-top: 120px;">
					<span class="ftitle">Điểm đến</span>
					<br/><br/>
					<ul class="footerlist">
						<li><a href="#">Hà Nam</a></li>
						<li><a href="#">Ninh Bình</a></li>
						<li><a href="#">Thái Nguyên</a></li>
						<li><a href="#">Thái Bình</a></li>
						<li><a href="#">Nam Định</a></li>
						<li><a href="#">Hải Dương</a></li>
					</ul>				
				</div>
				<!-- End of column 3-->		
				
				<div class="col-md-3 grey" style="margin-top: 120px;">
				
					<div class="relative">
						<input type="email" class="form-control fccustom2" id="exampleInputEmail1" placeholder="Enter email">
						<button type="submit" class="btn btn-default btncustom">Submit<img src="<?= THEME_ASSET_URL ?>images/arrow.png" alt=""/></button>
					</div>
					<br/><br/>
					<span class="ftitle">Hỗ trợ khách hàng</span><br/>
					<span class="pnr">024.9585.345</span><br/>
					office@travel.com
				</div>			
				<!-- End of column 4-->			
			
			

				
				
			</div>	
		</div>
		
		<div class="footerbg3">
			<div class="container center grey"> 
			<a href="#">Home</a> | 
			<a href="#">About</a> | 
			<a href="#">Last minute</a> | 
			<a href="#">Early booking</a> | 
			<a href="#">Special offers</a> | 
			<a href="#">Blog</a> | 
			<a href="#">Contact</a>
			<a href="#top" class="gotop scroll"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a>
			</div>
		</div>
		
		

		
		
	</div>
	<!-- / WRAP -->
	
	
    <!-- Javascript -->
	
    <!-- This page JS -->
	<script src="<?= THEME_ASSET_URL ?>assets/js/js-index3.js"></script>	
	
    <!-- Custom functions -->
    <script src="<?= THEME_ASSET_URL ?>assets/js/functions.js"></script>
	
    <!-- Picker UI-->	
	<script src="<?= THEME_ASSET_URL ?>assets/js/jquery-ui.js"></script>		
	
	<!-- Easing -->
    <script src="<?= THEME_ASSET_URL ?>assets/js/jquery.easing.js"></script>
	
    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="<?= THEME_ASSET_URL ?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	
   <!-- Nicescroll  -->	
	<script src="<?= THEME_ASSET_URL ?>assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- CarouFredSel -->
    <script src="<?= THEME_ASSET_URL ?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="<?= THEME_ASSET_URL ?>assets/js/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="<?= THEME_ASSET_URL ?>assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="<?= THEME_ASSET_URL ?>assets/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" src="<?= THEME_ASSET_URL ?>assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
	
    <!-- Custom Select -->
	<script type='text/javascript' src='<?= THEME_ASSET_URL ?>assets/js/jquery.customSelect.js'></script>	

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= THEME_ASSET_URL ?>dist/js/bootstrap.min.js"></script>
  </body>

<!-- Mirrored from titanicthemes.com/travel/blue/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Feb 2020 09:36:55 GMT -->
</html>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>

    </script>
</body>
</html>