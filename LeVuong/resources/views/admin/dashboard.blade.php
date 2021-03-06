
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Le Vuong Computer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
<script src="{{asset('public/backend/js/morris.js')}}"></script>


</head>
<body style="color:red;">


<section id="container">
<!--header start-->
<header class="header fixed-top clearfix" style="background-color:#AAAAAA	 ;">
<!--logo start-->
<div class="brand" style="background-color:#AAAAAA	">
   
    <a href="index.html" class="logo">
      <img src="{{('public/frontend/img/lv.png')}}" height="60" width="80px;" style="padding-bottom: 10px;" alt="logo"> 
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<!-- <div class="top-nav clearfix">
    
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">LeVuong</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        
       
    </ul>

</div> -->
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse" style="background-color: #AAAAAA	 ;">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{URL::to('/dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>????n</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/all-donhang')}}">????n ?????t h??ng</a></li>
                        <li><a href="{{URL::to('/all-cauhoi')}}">C??u h???i t??? kh??ch h??ng</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Laptop</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/add-laptop')}}">Th??m laptop</a></li>
                        <li><a href="{{URL::to('/all-laptop')}}">B???ng li???t k?? laptop</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Thi???t b???</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/add-thietbi')}}">Th??m thi???t b???</a></li>
                        <li><a href="{{URL::to('/all-thietbi')}}">T???t c??? thi???t b???</a></li>
                    </ul>
                </li>  
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Camera</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/add-camera')}}">Th??m camera</a></li>
                        <li><a href="{{URL::to('/all-camera')}}">T???t c??? camera</a></li>
                    </ul>
                </li>                             
                <li>
                    <a onclick="return confirm('B???n c?? mu???n ????ng xu???t kh??ng?')" href="{{URL::to('/login-admin')}}">
                        <i class="fa fa-user"></i>
                        <span>Log out</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content" >
    <section class="wrapper"style=" height: 570px; background-image:url({{url('public/frontend/img/hr.jpg')}});background-position:top center;background-size:cover;">
        <!-- //market-->
     @yield('admin_content')
     @yield('admin_content1') 
        
           
</section style="background-color:#AAAAAA	 ;">
 <!-- footer -->
          <div class="footer"style="background-color:#AAAAAA	  ;">
            <div class="wthree-copyright">
              <p>?? 2021 Tin h???c L?? V????ng| Design by <a href="http://w3layouts.com">Duy??n M??y</a></p>
            </div>
          </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>





<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    
		
	   
	});
	</script>
<!-- calendar -->
	<!-- <script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script> -->
	<!-- //calendar -->
</body>
</html>
