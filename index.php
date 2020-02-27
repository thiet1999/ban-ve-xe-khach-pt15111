<?php
session_start();
require_once './config/utils.php';
$loggedInUser=$_SESSION[AUTH];
echo $loggedInUser['name'];

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from titanicthemes.com/travel/blue/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Feb 2020 09:36:52 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Vé - Trang Chủ</title>

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
                    <a href="index.php" class="navbar-brand"><img src="public/images/logo1.ico" alt="Travel Agency Logo" class="logo"/></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown active">
                            <a class="dropdown-toggle" href="index.php">Trang Chủ</a>
                            <!-- <ul class="dropdown-menu posright-0">
                                <li>
                                    <div class="row dropwidth01">
                                        <ul class="droplist col-md-4">
                                            <li class="dropdown-header">Homepages</li>
                                            <li><a href="index-2.html">Home 1 minimal</a></li>
                                            <li><a href="index2.html">Home 2 offers</a></li>
                                            <li><a href="index3.html">Home 3 full search</a></li>
                                            <li><a href="index4.html">Home 4 presentation</a></li>
                                            <li><a href="index5.html">Home 5 footer2</a></li>
                                            <li><a href="index6.html">Home 6 full</a></li>
                                            <li><a href="index7.html">Home 7 </a></li>
                                            <li><a href="z-new-homepage.html">New Homepage</a> <span class="green">new</span></li>
                                        </ul>
                                        <ul class="droplist col-md-4">
                                            <li class="dropdown-header">Intro pages</li>
                                            <li><a href="intro.html">Intro 1</a></li>
                                            <li><a href="intro2.html">Intro 2 - slides</a> <span class="glyphicon glyphicon-star lblue"></span></li>
                                            <li><a href="intro3.html">Intro 3 - slides2</a> <span class="glyphicon glyphicon-star lblue"></span></li>
                                        </ul>
                                        <ul class="droplist col-md-4">
                                            <li class="dropdown-header">Colors</li>
                                            <li><a href="#">Blue</a></li>
                                            <li><a href="http://titanicthemes.com/travel/green/index.html">Green</a></li>
                                            <li><a href="http://titanicthemes.com/travel/orange/index.html">Orange</a></li>
                                            <li><a href="http://titanicthemes.com/travel/cyan/index.html">Cyan</a></li>
                                            <li></li>
                                            <li class="inactive size10 lgrey caps"><span class="glyphicon glyphicon-star "></span> Popular pages</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul> -->
                        </li>
                        <!-- <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Pages <span class="badge indent0">14</span><b class="lightcaret mt-2"></b></a>
                            <ul class="dropdown-menu posright-0">
                                <li>
                                    <div class="row dropwidth01">
                                        <ul class="droplist col-md-4">
                                            <li class="dropdown-header">Inner pages</li>
                                            <li><a href="list.html">List page 1</a></li>
                                            <li><a href="list2.html">List page 2</a></li>
                                            <li><a href="list3.html">List page 3</a></li>
                                            <li><a href="list4.html">List page 4</a></li>
                                            <li><a href="details.html">Details page</a></li>
                                            <li><a href="payment.html">Payment</a></li>
                                            <li><a href="blog.html">Blog page</a></li>
                                            <li><a href="blog-details.html">Blog details</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="profile.html">User Profile</a>  <span class="glyphicon glyphicon-star lblue"></span></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="dashboard/index.html">Dashboard</a>  <span class="glyphicon glyphicon-star lblue"></span></li>


                                        </ul>
                                        <ul class="droplist col-md-4">
                                            <li class="dropdown-header">Update - <span class="green">14 New Pages</span></li>
                                            <li><a href="z-new-homepage.html">New Homepage</a>  <span class="glyphicon glyphicon-star lblue"></span></li>
                                            <li><a href="z-flights-list.html">Flights list</a>  <span class="glyphicon glyphicon-star lblue"></span></li>
                                            <li><a href="z-flights-payment.html">Flights payment</a></li>
                                            <li><a href="z-cruise-list.html">Cruise list</a></li>
                                            <li><a href="z-cruise-payment.html">Cruise payment</a></li>
                                            <li><a href="z-rentacar-list.html">Rent a car list</a></li>
                                            <li><a href="z-rentacar-details.html">Rent a car details</a></li>
                                            <li><a href="z-rentacar-payment.html">Rent a car payment</a></li>
                                            <li><a href="z-transfers-list.html">Transfers list</a></li>
                                            <li><a href="z-transfers-payment.html">Transfers payment</a></li>
                                            <li><a href="z-activities-list.html">Activities list</a></li>
                                            <li><a href="z-activities-details.html">Activities details</a></li>
                                            <li><a href="z-activities-payment.html">Activities payment</a></li>
                                            <li><a href="z-wearesearching.html">Loading page</a></li>
                                        </ul>
                                        <ul class="droplist col-md-4">
                                            <li class="dropdown-header">Bootstrap Shortcodes</li>
                                            <li ><a href="http://getbootstrap.com/components/" target="_blank">Components</a></li>
                                            <li ><a href="http://getbootstrap.com/javascript/" target="_blank">Javascript</a></li>
                                            <li ><a href="http://getbootstrap.com/css/" target="_blank">Css</a></li>
                                            <li class="dropdown-header">Comming next</li>
                                            <li class="inactive"><a href="#">More Home pages</a></li>
                                            <li class="inactive"><a href="#">Elements</a></li>
                                            <li class="inactive"><a href="#">...</a></li>
                                            <li></li>
                                            <li class="inactive size10 lgrey caps"><span class="glyphicon glyphicon-star "></span> Popular pages</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Hotels</a></li>
                        <li><a href="#">Flights</a></li>
                        <li><a href="#">Vacations</a></li>
                        <li><a href="#">Cars</a></li>
                        <li><a href="#">Cruises</a></li> -->
                        <li><a href="#">Tin Tức</a></li>
                        <li><a href="login.php">Đăng Nhập</a></li>
                        <!-- <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Deals<b class="lightcaret mt-2"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Aligned Right Dropdown</li>
                                <li><a href="#">Sample Link 1</a></li>
                                <li><a href="#">Sample Link 2</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
                <!-- /Navigation-->
            </div>

        </div>
    </div>
</div>
<!-- / Top wrapper -->


<!--
#################################
    - THEMEPUNCH BANNER -
#################################
-->
<div id="dajy" class="fullscreen-container mtslide sliderbg fixed">
    <div class="fullscreenbanner">
        <ul>

            <!-- papercut fade turnoff flyin slideright slideleft slideup slidedown-->

            <!-- FADE -->
            <li data-transition="fade" data-slotamount="1" data-masterspeed="300">
                <img src="<?= THEME_ASSET_URL ?>images/slider/1.png" alt=""/>
                <div class="tp-caption scrolleffect sft"
                     data-x="center"
                     data-y="120"
                     data-speed="1000"
                     data-start="800"
                     data-easing="easeOutExpo"  >
                    <!-- <div class="sboxpurple textcenter">
                        <span class="lato size28 slim caps white">Greece</span><br/><br/><br/>
                        <span class="lato size100 slim caps white">Santorini</span><br/>
                        <span class="lato size20 normal caps white">from</span><br/><br/>
                        <span class="lato size48 slim uppercase yellow">$1500</span><br/>
                    </div> -->
                </div>
            </li>

            <!-- FADE -->
            <li data-transition="fade" data-slotamount="1" data-masterspeed="300">
                <img src="<?= THEME_ASSET_URL ?>images/slider/2.png" alt=""/>
                <div class="tp-caption scrolleffect sft"
                     data-x="center"
                     data-y="120"
                     data-speed="1000"
                     data-start="800"
                     data-easing="easeOutExpo"  >
                    <!-- <div class="sboxpurple textcenter">
                        <span class="lato size28 slim caps white">Italy</span><br/><br/><br/>
                        <span class="lato size100 slim caps white">Rome</span><br/>
                        <span class="lato size20 normal caps white">from</span><br/><br/>
                        <span class="lato size48 slim uppercase yellow">$1500</span><br/>
                    </div> -->
                </div>
            </li>

            <!-- FADE -->
            <li data-transition="fade" data-slotamount="1" data-masterspeed="300">

                <img src="<?= THEME_ASSET_URL ?>images/slider/3.png" alt=""/>
                <div class="tp-caption scrolleffect sft"
                     data-x="center"
                     data-y="120"
                     data-speed="1000"
                     data-start="800"
                     data-easing="easeOutExpo"  >
                    <!-- <div class="sboxpurple textcenter">
                        <span class="lato size28 slim caps white">France</span><br/><br/><br/>
                        <span class="lato size100 slim caps white">Paris</span><br/>
                        <span class="lato size20 normal caps white">from</span><br/><br/>
                        <span class="lato size48 slim uppercase yellow">$1500</span><br/>
                    </div> -->
                </div>
            </li>

        </ul>
        <div class="tp-bannertimer none"></div>
    </div>
</div>

<!--
##############################
 - ACTIVATE THE BANNER HERE -
##############################
-->
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

                    <ul class="nav nav-tabs" id="myTab">
                        <!-- <li onclick="mySelectUpdate()" class="active"><a data-toggle="tab" href="#air"><span class="flight"></span> Air</a></li>
                        <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#hotel"><span class="hotel"></span>Hotel</a></li> -->
                        <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#car"><span class="car"></span>Chọn vé xe</a></li>
                        <!-- <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#vacations"><span class="suitcase"></span>Vacations</a></li> -->
                    </ul>

                    <div class="tab-content3" id="myTabContent">
                        <div id="air" class="tab-pane fade active in">

                            <div class="w50percent">
                                <div class="wh90percent textleft">
                                    <span class="opensans size13"><b>Điểm đi</b></span>
                                </div>
                            </div>

                            <div class="w50percentlast">
                                <div class="wh90percent textleft right">
                                    <span class="opensans size13"><b>Điểm đến</b></span>
                                    <input type="text" class="form-control" placeholder="nhập điểm đến">
                                </div>
                            </div>


                            <div class="clearfix"></div><br/>

                            <div class="w50percent">
                                <div class="wh90percent textleft">
                                    <span class="opensans size13"><b>Thời gian</b></span>
                                    <input type="text" class="form-control mySelectCalendar" id="datepicker3" placeholder="mm/dd/yyyy"/>
                                </div>
                            </div>

                            <!-- <div class="w50percentlast">
                                <div class="wh90percent textleft right">
                                    <span class="opensans size13"><b>Returning</b></span>
                                    <input type="text" class="form-control mySelectCalendar" id="datepicker4" placeholder="mm/dd/yyyy"/>
                                </div>
                            </div> -->

                            <div class="clearfix"></div>

                            <div class="room1 margtop15">
                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>Adult</b></span>
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
                                        <span class="opensans size13"><b>Child</b></span>
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

                            <span class="opensans size18">Where do you want to go?</span>
                            <input type="text" class="form-control" placeholder="Greece">

                            <br/>

                            <div class="w50percent">
                                <div class="wh90percent textleft">
                                    <span class="opensans size13"><b>Check in date</b></span>
                                    <input type="text" class="form-control mySelectCalendar" id="datepicker" placeholder="mm/dd/yyyy"/>
                                </div>
                            </div>

                            <div class="w50percentlast">
                                <div class="wh90percent textleft right">
                                    <span class="opensans size13"><b>Check in date</b></span>
                                    <input type="text" class="form-control mySelectCalendar" id="datepicker2" placeholder="mm/dd/yyyy"/>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="room1 margtop15">
                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>ROOM 1</b></span><br/>

                                        <div class="addroom1 block"><a href="#room2" onclick="addroom2()" class="grey">+ Add room</a></div>
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right ohidden">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft left">
                                                <span class="opensans size13"><b>Adult</b></span>
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
                                            <div class="wh90percent textleft right ohidden">
                                                <span class="opensans size13"><b>Child</b></span>
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
                            </div>

                            <div class="room2 none">
                                <div class="clearfix"></div><div class="line1"></div>
                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>ROOM 2</b></span><br/>
                                        <div class="addroom2 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom2()" class="orange"><img src="<?= THEME_ASSET_URL ?>images/delete.png" alt="delete"/></a></div>
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft left">
                                                <span class="opensans size13"><b>Adult</b></span>
                                                <select class="form-control mySelectBoxClass">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option selected>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Child</b></span>
                                                <select class="form-control mySelectBoxClass">
                                                    <option selected>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="room3 none">
                                <div class="clearfix"></div><div class="line1"></div>
                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>ROOM 3</b></span><br/>
                                        <div class="addroom3 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom3()" class="orange"><img src="<?= THEME_ASSET_URL ?>images/delete.png" alt="delete"/></a></div>
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft left">
                                                <span class="opensans size13"><b>Adult</b></span>
                                                <select class="form-control mySelectBoxClass">
                                                    <option selected>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Child</b></span>
                                                <select class="form-control mySelectBoxClass">
                                                    <option selected>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!--End of 2nd tab -->

                        <div id="car" class="tab-pane fade">

                            <div class="w50percent">
                                <div class="wh90percent textleft">
                                    <span class="opensans size13"><b>Picking up</b></span>
                                    <input type="text" class="form-control" placeholder="Airport, address">
                                </div>
                            </div>

                            <div class="w50percentlast">
                                <div class="wh90percent textleft right">
                                    <span class="opensans size13"><b>Dropping off</b></span>
                                    <input type="text" class="form-control" placeholder="Airport, address">
                                </div>
                            </div>


                            <div class="clearfix"></div><br/>

                            <div class="w50percent">
                                <div class="wh90percent textleft">
                                    <span class="opensans size13"><b>Pick up date</b></span>
                                    <input type="text" class="form-control mySelectCalendar" id="datepicker5" placeholder="mm/dd/yyyy"/>
                                </div>
                            </div>

                            <div class="w50percentlast">
                                <div class="wh90percent textleft right">
                                    <span class="opensans size13"><b>Hour</b></span>
                                    <select class="form-control mySelectBoxClass">
                                        <option>12:00 AM</option>
                                        <option>12:30 AM</option>
                                        <option>01:00 AM</option>
                                        <option>01:30 AM</option>
                                        <option>02:00 AM</option>
                                        <option>02:30 AM</option>
                                        <option>03:00 AM</option>
                                        <option>03:30 AM</option>
                                        <option>04:00 AM</option>
                                        <option>04:30 AM</option>
                                        <option>05:00 AM</option>
                                        <option>05:30 AM</option>
                                        <option>06:00 AM</option>
                                        <option>06:30 AM</option>
                                        <option>07:00 AM</option>
                                        <option>07:30 AM</option>
                                        <option>08:00 AM</option>
                                        <option>08:30 AM</option>
                                        <option>09:00 AM</option>
                                        <option>09:30 AM</option>
                                        <option>10:00 AM</option>
                                        <option selected>10:30 AM</option>
                                        <option>11:00 AM</option>
                                        <option>11:30 AM</option>
                                        <option>12:00 PM</option>
                                        <option>12:30 PM</option>
                                        <option>01:00 PM</option>
                                        <option>01:30 PM</option>
                                        <option>02:00 PM</option>
                                        <option>02:30 PM</option>
                                        <option>03:00 PM</option>
                                        <option>03:30 PM</option>
                                        <option>04:00 PM</option>
                                        <option>04:30 PM</option>
                                        <option>05:00 PM</option>
                                        <option>05:30 PM</option>
                                        <option>06:00 PM</option>
                                        <option>06:30 PM</option>
                                        <option>07:00 PM</option>
                                        <option>07:30 PM</option>
                                        <option>08:00 PM</option>
                                        <option>08:30 PM</option>
                                        <option>09:00 PM</option>
                                        <option>09:30 PM</option>
                                        <option>10:00 PM</option>
                                        <option>10:30 PM</option>
                                        <option>11:00 PM</option>
                                        <option>11:30 PM</option>
                                    </select>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="room1 margtop15">
                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>Drop off date</b></span>
                                        <input type="text" class="form-control mySelectCalendar" id="datepicker6" placeholder="mm/dd/yyyy"/>
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <span class="opensans size13"><b>Hour</b></span>
                                        <select class="form-control mySelectBoxClass">
                                            <option>12:00 AM</option>
                                            <option>12:30 AM</option>
                                            <option>01:00 AM</option>
                                            <option>01:30 AM</option>
                                            <option>02:00 AM</option>
                                            <option>02:30 AM</option>
                                            <option>03:00 AM</option>
                                            <option>03:30 AM</option>
                                            <option>04:00 AM</option>
                                            <option>04:30 AM</option>
                                            <option>05:00 AM</option>
                                            <option>05:30 AM</option>
                                            <option>06:00 AM</option>
                                            <option>06:30 AM</option>
                                            <option>07:00 AM</option>
                                            <option>07:30 AM</option>
                                            <option>08:00 AM</option>
                                            <option>08:30 AM</option>
                                            <option>09:00 AM</option>
                                            <option>09:30 AM</option>
                                            <option>10:00 AM</option>
                                            <option selected>10:30 AM</option>
                                            <option>11:00 AM</option>
                                            <option>11:30 AM</option>
                                            <option>12:00 PM</option>
                                            <option>12:30 PM</option>
                                            <option>01:00 PM</option>
                                            <option>01:30 PM</option>
                                            <option>02:00 PM</option>
                                            <option>02:30 PM</option>
                                            <option>03:00 PM</option>
                                            <option>03:30 PM</option>
                                            <option>04:00 PM</option>
                                            <option>04:30 PM</option>
                                            <option>05:00 PM</option>
                                            <option>05:30 PM</option>
                                            <option>06:00 PM</option>
                                            <option>06:30 PM</option>
                                            <option>07:00 PM</option>
                                            <option>07:30 PM</option>
                                            <option>08:00 PM</option>
                                            <option>08:30 PM</option>
                                            <option>09:00 PM</option>
                                            <option>09:30 PM</option>
                                            <option>10:00 PM</option>
                                            <option>10:30 PM</option>
                                            <option>11:00 PM</option>
                                            <option>11:30 PM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--End of 3rd tab -->

                        <div id="vacations" class="tab-pane fade">

                            <div class="w50percent">
                                <div class="wh90percent textleft">
                                    <span class="opensans size13"><b>Flying from</b></span>
                                    <input type="text" class="form-control" placeholder="City or airport">
                                </div>
                            </div>

                            <div class="w50percentlast">
                                <div class="wh90percent textleft right">
                                    <span class="opensans size13"><b>To</b></span>
                                    <input type="text" class="form-control" placeholder="City or airport">
                                </div>
                            </div>

                            <div class="clearfix"></div><br/>

                            <div class="w50percent">
                                <div class="wh90percent textleft">
                                    <span class="opensans size13"><b>Check in date</b></span>
                                    <input type="text" class="form-control mySelectCalendar" id="datepicker7" placeholder="mm/dd/yyyy"/>
                                </div>
                            </div>

                            <div class="w50percentlast">
                                <div class="wh90percent textleft right">
                                    <span class="opensans size13"><b>Check in date</b></span>
                                    <input type="text" class="form-control mySelectCalendar" id="datepicker8" placeholder="mm/dd/yyyy"/>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="room1 margtop15">
                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>ROOM 1</b></span><br/>

                                        <div class="addroom1 block"><a href="#room2" onclick="addroom2()" class="grey">+ Add room</a></div>
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft left">
                                                <span class="opensans size13"><b>Adult</b></span>
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
                                                <span class="opensans size13"><b>Child</b></span>
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
                            </div>

                            <div class="room2 none">
                                <div class="clearfix"></div><div class="line1"></div>
                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>ROOM 2</b></span><br/>
                                        <div class="addroom2 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom2()" class="orange"><img src="<?= THEME_ASSET_URL ?>images/delete.png" alt="delete"/></a></div>
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft left">
                                                <span class="opensans size13"><b>Adult</b></span>
                                                <select class="form-control mySelectBoxClass">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option selected>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Child</b></span>
                                                <select class="form-control mySelectBoxClass">
                                                    <option selected>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="room3 none">
                                <div class="clearfix"></div><div class="line1"></div>
                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>ROOM 3</b></span><br/>
                                        <div class="addroom3 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom3()" class="orange"><img src="<?= THEME_ASSET_URL ?>images/delete.png" alt="delete"/></a></div>
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft left">
                                                <span class="opensans size13"><b>Adult</b></span>
                                                <select class="form-control mySelectBoxClass">
                                                    <option selected>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Child</b></span>
                                                <select class="form-control mySelectBoxClass">
                                                    <option selected>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                    <div class="fwi one"><img src="<?= THEME_ASSET_URL ?>images/rome.jpg" alt="" /><div class="mhover none"><span class="icon"><a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a></span></div></div>
                    <div class="ctitle">Rome<a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a>
                        <span>$59.99</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shadow cstyle05">
                    <div class="fwi one"><img src="<?= THEME_ASSET_URL ?>images/surfer.jpg" alt="" /><div class="mhover none"><span class="icon"><a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a></span></div></div>
                    <div class="ctitle">Cote d'azur<a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a>
                        <span>$59.99</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="deals3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="dtitle">Last Minute</span>
                    <div class="deal">
                        <a href="details.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                        <div class="dealtitle">
                            <p><a href="details.html" class="dark">Diana Hotel</a></p>
                            <img src="<?= THEME_ASSET_URL ?>images/smallrating-4.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
                        </div>
                        <div class="dealprice">
                            <p class="size12 grey lh2">from<span class="price">$35</span><br/>per night</p>
                        </div>
                    </div>
                    <div class="deal">
                        <a href="details.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                        <div class="dealtitle">
                            <p><a href="details.html" class="dark">Village Inn Studios & Family Apartments</a></p>
                            <img src="<?= THEME_ASSET_URL ?>images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
                        </div>
                        <div class="dealprice">
                            <p class="size12 grey lh2">from<span class="price">$49</span><br/>per night</p>
                        </div>
                    </div>
                    <div class="deal">
                        <a href="details.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                        <div class="dealtitle">
                            <p><a href="details.html" class="dark">Palatino Hotel</a></p>
                            <img src="<?= THEME_ASSET_URL ?>images/smallrating-4.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
                        </div>
                        <div class="dealprice">
                            <p class="size12 grey lh2">from<span class="price">$90</span><br/>per night</p>
                        </div>
                    </div>
                </div>
                <!-- End of first row-->

                <div class="col-md-4">
                    <span class="dtitle">Early Booking</span>
                    <div class="deal">
                        <a href="details.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                        <div class="dealtitle">
                            <p><a href="details.html" class="dark">Comfort Suites Paradise Island</a></p>
                            <img src="<?= THEME_ASSET_URL ?>images/smallrating-4.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Bahamas</span>
                        </div>
                        <div class="dealprice">
                            <p class="size12 grey lh2">from<span class="price">$29</span><br/>per night</p>
                        </div>
                    </div>
                    <div class="deal">
                        <a href="details.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                        <div class="dealtitle">
                            <p><a href="details.html" class="dark">Barcelo Malaga</a></p>
                            <img src="<?= THEME_ASSET_URL ?>images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Spain</span>
                        </div>
                        <div class="dealprice">
                            <p class="size12 grey lh2">from<span class="price">$32</span><br/>per night</p>
                        </div>
                    </div>
                    <div class="deal">
                        <a href="details.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                        <div class="dealtitle">
                            <p><a href="details.html" class="dark">Palatino Hotel</a></p>
                            <img src="<?= THEME_ASSET_URL ?>images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
                        </div>
                        <div class="dealprice">
                            <p class="size12 grey lh2">from<span class="price">$90</span><br/>per night</p>
                        </div>
                    </div>
                </div>
                <!-- End of first row-->

                <div class="col-md-4">
                    <span class="dtitle">Hot Deals</span>
                    <div class="deal">
                        <a href="details.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                        <div class="dealtitle">
                            <p><a href="details.html" class="dark">Parayso Hotel And Spa</a></p>
                            <img src="<?= THEME_ASSET_URL ?>images/smallrating-4.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
                        </div>
                        <div class="dealprice">
                            <p class="size12 grey lh2">from<span class="price">$49</span><br/>per night</p>
                        </div>
                    </div>
                    <div class="deal">
                        <a href="details.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                        <div class="dealtitle">
                            <p><a href="details.html" class="dark">Village Inn Studios & Family Apartments</a></p>
                            <img src="<?= THEME_ASSET_URL ?>images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
                        </div>
                        <div class="dealprice">
                            <p class="size12 grey lh2">from<span class="price">$79</span><br/>per night</p>
                        </div>
                    </div>
                    <div class="deal">
                        <a href="details.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                        <div class="dealtitle">
                            <p><a href="details.html" class="dark">Diana Hotel</a></p>
                            <img src="<?= THEME_ASSET_URL ?>images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
                        </div>
                        <div class="dealprice">
                            <p class="size12 grey lh2">from<span class="price">$299</span><br/>per night</p>
                        </div>
                    </div>
                </div>
                <!-- End of first row-->
            </div>
        </div>
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

    <div class="container cstyle06">

        <div class="row anim2">
            <div class="col-md-3">
                <h2>Today's Top<br/>Deals</h2><br/>
                Start your search with a look at the best rates on our site.
            </div>
            <div class="col-md-9">



                <!-- Carousel -->
                <div class="wrapper">
                    <div class="list_carousel">
                        <ul id="foo">
                            <li>
                                <a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-hawaii.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Visit the Hawaii Beaches</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-santorini.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Santorini - Greece</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-dubai.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Dubai</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-hawaii.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Visit the Hawaii Beaches</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-santorini.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Santorini - Greece</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-dubai.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Dubai</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <a id="prev_btn" class="prev" href="#"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a>
                        <a id="next_btn" class="next" href="#"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a>
                    </div>
                </div>


            </div>
        </div>

        <hr class="featurette-divider2">

        <div class="row anim3">
            <div class="col-md-3">
                <h2>Featured<br/>Offers</h2><br/>
                Start your search with a look at the best rates on our site.
            </div>
            <div class="col-md-9">

                <!-- Carousel -->
                <div class="wrapper">
                    <div class="list_carousel">
                        <ul id="foo2">
                            <li>
                                <a href="list3.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-africa.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>South Africa Adventures</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list3.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-egipt.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Egipt</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list3.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-machupicchu.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Machu Picchu</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list3.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-africa.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>South Africa Adventures</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list3.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-egipt.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Egipt</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list3.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-machupicchu.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Machu Picchu</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <a id="prev_btn2" class="prev" href="#"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a>
                        <a id="next_btn2" class="next" href="#"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a>
                    </div>
                </div>

            </div>
        </div>

    </div>



    <!-- FOOTER -->

    <div class="footerbg">
        <div class="container">

            <div class="col-md-3">
                <span class="ftitle">Let's socialize</span>
                <div class="scont">
                    <a href="#" class="social1b"><img src="<?= THEME_ASSET_URL ?>images/icon-facebook.png" alt=""/></a>
                    <a href="#" class="social2b"><img src="<?= THEME_ASSET_URL ?>images/icon-twitter.png" alt=""/></a>
                    <a href="#" class="social3b"><img src="<?= THEME_ASSET_URL ?>images/icon-gplus.png" alt=""/></a>
                    <a href="#" class="social4b"><img src="<?= THEME_ASSET_URL ?>images/icon-youtube.png" alt=""/></a>
                    <br/><br/><br/>
                    <img src="<?= THEME_ASSET_URL ?>images/logosmal.png" alt="" /><br/>
                    &copy; 2013  |  <a href="#">Privacy Policy</a><br/>
                    All Rights Reserved
                    <br/><br/>

                </div>
            </div>
            <!-- End of column 1-->

            <div class="col-md-3">
                <span class="ftitle">Travel Specialists</span>
                <br/><br/>
                <ul class="footerlist">
                    <li><a href="#">Golf Vacations</a></li>
                    <li><a href="#">Ski & Snowboarding</a></li>
                    <li><a href="#">Disney Parks Vacations</a></li>
                    <li><a href="#">Disneyland Vacations</a></li>
                    <li><a href="#">Disney World Vacations</a></li>
                    <li><a href="#">Vacations As Advertised</a></li>
                </ul>
            </div>
            <!-- End of column 2-->

            <div class="col-md-3">
                <span class="ftitle">Travel Specialists</span>
                <br/><br/>
                <ul class="footerlist">
                    <li><a href="#">Weddings</a></li>
                    <li><a href="#">Accessible Travel</a></li>
                    <li><a href="#">Disney Parks</a></li>
                    <li><a href="#">Cruises</a></li>
                    <li><a href="#">Round the World</a></li>
                    <li><a href="#">First Class Flights</a></li>
                </ul>
            </div>
            <!-- End of column 3-->

            <div class="col-md-3 grey">
                <span class="ftitle">Newsletter</span>
                <div class="relative">
                    <input type="email" class="form-control fccustom2" id="exampleInputEmail1" placeholder="Enter email">
                    <button type="submit" class="btn btn-default btncustom">Submit<img src="<?= THEME_ASSET_URL ?>images/arrow.png" alt=""/></button>
                </div>
                <br/><br/>
                <span class="ftitle">Customer support</span><br/>
                <span class="pnr">1-866-599-6674</span><br/>
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
<script type='text/javascript' src="<?= THEME_ASSET_URL ?>assets/js/jquery.customSelect.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= THEME_ASSET_URL ?>dist/js/bootstrap.min.js"></script>
</body>

<!-- Mirrored from titanicthemes.com/travel/blue/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Feb 2020 09:36:55 GMT -->
</html>
