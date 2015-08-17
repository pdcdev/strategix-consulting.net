<!DOCTYPE html> 
<html> 
<head> 
<link href="http://fast.fonts.net/cssapi/c0791320-eb3a-41c7-8868-c0ceb0eb6a90.css" type="text/css" rel="stylesheet"/>
<meta charset="UTF-8"> 
<title>Strategix Consulting</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
 
</head>
<style>
    @import "bourbon/bourbon";
    @import "grid-settings";
    @import "neat/neat";
    @import "utilities/variables";
    @import "utilities/universal";
    @import "compass/css3";

      nav,  .burger-menu {
          -webkit-touch-callout: none;
          -webkit-user-select: none;
          -khtml-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        nav {
          position: fixed;
          left: 0;
          z-index: 10;
          background-color: #000;
          opacity: 0.8;
          width: 100%;
          height: 100%;
          text-align: center;
          display: table;
          color: white;
        }

        .nav-hide { display: none; 
        }

        nav ul {
          padding-top: 100px;
          vertical-align: middle;
          padding-left: 0 !important;
          height: 500px;
          overflow: scroll;
        }

        nav ul li { list-style: none;
            margin-bottom: 20px;
         }

        nav ul li a {
          font-size: 25px;
          color: #b2b2b2;
          font-weight: bolder;
          text-decoration: none;
          font-family: Exo, sans-serif;
        }

        @media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : landscape) { 
              nav ul {
                  padding-top: 100px;
                  vertical-align: middle;
                  padding-left: 0 !important;
                  height: 300px;
                  overflow: scroll;
                }
        }

        .burger-menu {
          position: absolute;
          width: 30px;
          height: 50px;
          cursor: pointer;
          right:0;
          margin-right: 30px;
        }
        .burger {
          position: absolute;
          background: #b2b2b2;
          width: 100%;
          height: 3px;
          top: 33px;
          left: 0px;
          margin-top: -5px;
        }
        .burger::before {
          position: absolute;
          background: #b2b2b2;
          width: 30px;
          height: 3px;
          top: 8px;
          content: "";
          display: block;
          z-index: 999;
        }
        .burger::after {
          position: absolute;
          background: #b2b2b2;
          width: 30px;
          height: 3px;
          bottom:8px;
          content: "";
          display: block;
          z-index: 999;
        }
        .burger::after, .burger::before, .burger {
          transition: all .3s ease-in-out;
          -webkit-transition: all .3s ease-in-out;
        }
        .burger-menu.menu-on .burger::after{
           transform: rotate(-45deg);
           -webkit-transform: rotate(-45deg);
          bottom: 0px;
        }
        .burger-menu.menu-on .burger::before{
           transform: rotate(45deg);
           -webkit-transform: rotate(45deg);
          top: 0px;
        }
        .burger-menu.menu-on .burger{
         background: rgba(111,111,111,.0);
        }

        @media screen and (min-width: 768px) {
            .burger-menu{
                display: none;
            } 
        }

        nav.nav-hide ul.overlay li a{
          font-family: inherit !important;
        }


</style>
<body>




<header class="nav-down">

	<div class="hamburger-slim">
    </div>


    <div class="burger-menu">
      <div class="burger"></div>  
    </div>

    <nav class="nav-hide">
      <ul class="overlay">
        <li><a href="index.php">Home</a></li>

        <li><a href="index.php">About</a></li>
        
        <li><a href="case-studies.php">Case Studies</a></li>

        <li><a href="index.php">Profile</a></li>

      </ul>
    </nav>

	<div class="menu">
		<div id="nav">
			<div class="logo"><a href="index.php"><img src="images/logo-2x.png"></a>
			</div>
			<ul class="navigation">
				<li id="services_btn"><a href="#">About</a></li>
                <li id="projects_btn"><a href="case-studies.php">Case Studies</a></li>
                <li id="about_btn"><a href="#">Profile</a></li>
                <li id="contact_btn"><a href="#">Contact</a></li>
			</ul>
		</div>
	</div>
</header>
<script type="text/javascript">
    $(function(){
      $('.burger-menu, nav').click(function(){
        $('.burger-menu').toggleClass('navbar-on');
        $('nav').fadeToggle();
        $('nav').removeClass('nav-hide');
      });
    });
    </script>
    <script type="text/javascript">
    $(".burger-menu").click(function () {
          $(this).toggleClass("menu-on");
    });
   

    </script>