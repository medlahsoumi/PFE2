<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">


<style>
.navbar-fixed {
	top: -64px;
}

@media only screen and (max-width: 600px) {
	.navbar-lower {
		height: 49px;
	}
}

@media only screen and (min-width: 600px) and (max-width: 992px) {
	.navbar-lower {
		max-height: 29px;
	}
}

@media only screen and (min-width: 993px) {
	.navbar-lower {
		height: 112px;
	}
}

.navbar-lower nav {
	box-shadow: 0 2px 2px -2px rgba(0, 0, 0, 0.14), 0 1px 5px -2px rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
}

@media only screen and (max-width: 600px) {
	.nav-extended {
		max-height: 48px;
	}
}

@media only screen and (min-width: 600px) and (max-width: 992px) {
	.nav-extended {
		max-height: 48px;
	}
}

@media only screen and (min-width: 993px) {
	.nav-extended {
		max-height: 112px;
	}
}

.side-nav {
	z-index: 999;
}

#sidenav-overlay {
	z-index: 800;
}

.navbar-fixed {
	z-index: 900;
}

nav .fadeInLogo {
	font-size: 2.5rem;
	font-weight: 900;
	color: #fff;
	text-transform: uppercase;
	float: left;
	display: none;
}

nav .input-field input[type=search] {
	width: 0px;
}

nav .input-field input[type=search]:focus {
	width: 320px;
	color: transparent;
	text-shadow: 0 0 0 rgba(0, 0, 0, 0.87);
}

.row-noclear:after {
	clear: none !important;
}

ul#dropdown1.dropdown-content {
	width: 400px !important;
}

ul#dropdown1.dropdown-content:active {
	width: 400px !important;
}

#photo-bg {
	background-image: url(https://burst.shopifycdn.com/photos/country-cottage-sunset_925x.jpg);
	background-size: cover;
}

.side-nav li > a {
	padding: 0 16px;
}

.side-nav .divider {
	margin: 0;
	height: 8px;
	border-bottom: 1px solid #e0e0e0;
	background-color: transparent;
}

.sidenav-header {
	background: url("../images/user-bg.jpg") no-repeat center center;
	background-size: cover;
	margin-bottom: 0px;
	padding: 15px 0 0 15px;
}

.sidenav-header .row {
	margin-bottom: 0;
}

.sidenav-footer {
	margin-bottom: 0px;
	padding: 0;
}

.sidenav-footer .row {
	margin-bottom: 0;
}

.sidenav-footer .row .social-icons a {
	opacity: 0.5;
	padding: 0;
	text-align: center;
}

.sidenav-footer .row .social-icons a:hover {
	background-color: inherit;
	opacity: 1;
}

.nav-transparent {
	background-color: transparent;
	box-shadow: none;
}

.nav-breadcrumbs-dark .breadcrumb {
	color: rgba(0, 0, 0, 0.5);
}

.nav-breadcrumbs-dark .breadcrumb:last-child {
	color: black;
}

.nav-breadcrumbs-dark .breadcrumb:before {
	color: rgba(0, 0, 0, 0.2);
}
</style>
</head>
<body>
<div class="navbar-upper">
  <nav class="z-depth-0">
    <div class="nav-wrapper">
      <div class="row">
        <div class="col s12">
          <a href="#modal1" class="brand-logo" style="display:block;float:left;">Materialize framework</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            
            <li>
              
              <form style="height:64px;">
                <div class="input-field ">
                  <input id="search" type="search" required placeholder="Search">
                  <label class="label-icon" for="search"><i class="this material-icons">search</i></label>
<!--                   <i class="material-icons" style="">close</i> -->
                </div>
              </form>
              
            </li>
            <!-- <li><a href="#modal1"><i class="material-icons">search</i></a></li> -->
            <!-- <li><a href="#modal1"><i class="material-icons">view_module</i></a></li> -->
            <!-- <li><a href="#modal1"><i class="material-icons">refresh</i></a></li> -->
            <li><a class="waves-effect waves-light btn btn-large animated tada" href="#modal1"><i class="material-icons left">phone</i>Call now!</a></li>
            <li><a href="#sheet1"><i class="material-icons">more_vert</i></a></li>
            
          </ul>
          
        </div>
      </div>
    </div>
  </nav>
</div>




<div class="navbar-lower">
  <nav class="z-depth-0 nav-extended">
    <div class="nav-wrapper">
      <div class="row">
        <div class="col s12">
          <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
          <a class="fadeInLogo brand-logo animated slideInUp">
            <!-- M -->
            <!-- <img src="https://materializecss.com/res/materialize.svg" alt="" style="margin-top:12px;" height="40px"/> -->
            <i class="large material-icons">important_devices</i>
          </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#modal1">Home</a></li>
            <li class="active"><a href="#modal1">About</a></li>
            <li><a href="#modal1">Team</a></li>
            <li><a href="#modal1">Blog</a></li>
            <li><a href="#modal1">Resources</a></li>
            <li><a href="#modal1">Careers</a></li>
            <li><a href="#!" class="dropdown-button" data-activates="dropdown1">Contact<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
        </div>
        <div class="nav-content ">
          <div class="col s12 nav-content red lighten-3">
            <ul class="tabs tabs-transparent ">
              <li class="tab"><a href="#tab1" class="active">Navbar tab</a></li>
              <li class="tab"><a href="#tab2">Another</a></li>
              <li class="tab"><a href="#tab3">Third one</a></li>
              <li class="tab"><a href="#tab4">Fourth tab</a></li>
            </ul>
            <ul class="side-nav grey darken-2" id="mobile-demo">
        
        
              <li class="sidenav-header red lighten-2">
          <div class="row">
            <div class="col s4">
                <img src="https://gravatar.com/avatar/961997eb7fd5c22b3e12fb3c8ca14e11?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" width="48px" height="48px" alt="" class="circle responsive-img valign profile-image">
            </div>
            <div class="col s8">
                <a class="btn-flat dropdown-button waves-effect waves-light white-text" href="#" data-activates="profile-dropdown">Jay<i class="mdi-navigation-arrow-drop-down right"></i></a>
                <ul id="profile-dropdown" class="dropdown-content">
                    <li><a href="#"><i class="material-icons">person</i>Profile</a></li>
                    <li><a href="#"><i class="material-icons">settings</i>Setting</a></li>
                    <li><a href="#"><i class="material-icons">help</i>Help</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="material-icons">lock</i>Lock</a></li>
                    <li><a href="#"><i class="material-icons">exit_to_app</i>Logout</a></li>
                </ul>
            </div>
          </div>
        </li>
        
              <li class="red lighten-2">
          <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header white-text waves-effect waves-blue "><i class="material-icons white-text ">language</i>Language <i class="material-icons right white-text" style="margin-right:0;">arrow_drop_down</i></a>
                <div class="collapsible-body z-depth-3">
                  <ul>
                    <li><a class="waves-effect waves-blue" href="#">English</a></li>
                    <li><a class="waves-effect waves-blue" href="#">العربية</a></li>
                    <li><a class="waves-effect waves-blue" href="#">中文</a></li>
                    <li><a class="waves-effect waves-blue" href="#">Čeština</a></li>
                    <li><a class="waves-effect waves-blue" href="#">Nederlands</a></li>
                    <li><a class="waves-effect waves-blue" href="#">Français</a></li>
                    <li><a class="waves-effect waves-blue" href="#">Deutsch</a></li>
                    <li><a class="waves-effect waves-blue" href="#">한국어</a></li>
                    <li><a class="waves-effect waves-blue" href="#">Português</a></li>
                    <li><a class="waves-effect waves-blue" href="#">Русский</a></li>
                    <li><a class="waves-effect waves-blue" href="#">Español</a></li>
                    <li><a class="waves-effect waves-blue" href="#">Svenska</a></li>
                    <li><a class="waves-effect waves-blue" href="#">ภาษาไทย</a></li>
                    <li><a class="waves-effect waves-blue" href="#">Türkçe</a></li>
                    <li><div class="divider"></div></li>
                  </ul>
                </div>
              </li>
          </ul>
        </li>
        
        
        
              <li class="white">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">folder_special</i>Layouts <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">fullscreen</i>Full Screen<span class="new badge right yellow grey lighten-1" data-badge-caption="updated"></span></a></li>
                        <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">swap_horiz</i>Horizontal Menu<span class="new badge right yellow darken-3"></span></a></li>
                        <li><div class="divider"></div></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="white">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">folder_open</i>A submenu <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">fullscreen</i>Full Screen</a></li>
                        <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">swap_horiz</i>Horizontal Menu</a></li>
                        <li><div class="divider"></div></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">mail</i>Menu item</a></li>
              <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">call</i> Menu item</a></li>
              <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">android</i> Menu item</a></li>
              <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">dialpad</i> Menu item</a></li>
              <li class="white"><div class="divider"></div></li>
              <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">language</i> Menu item<span class="new badge right yellow darken-3"></span></a></li>

              <li class="sidenav-footer grey darken-2">
                <div class="row">  
                  <div class="social-icons">
                    <div class="col s2">
                      <a href="#"><i class="fa fa-lg fa-linkedin-square"></a></i>
                    </div>
                    <div class="col s2">
                      <a href="#"><i class="fa fa-lg fa-facebook-official"></a></i>
                    </div>
                    <div class="col s2">
                      <a href="#"><i class="fa fa-lg fa-twitter"></a></i>
                    </div>
                    <div class="col s2">
                      <a href="#"><i class="fa fa-lg fa-google-plus"></a></i>
                    </div>
                    <div class="col s2">
                      <a href="#"><i class="fa fa-lg fa-pinterest"></a></i>
                    </div>
                    <div class="col s2">
                      <a href="#"><i class="fa fa-lg fa-youtube"></a></i>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      
      <!-- Dropdown Structure -->
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">A really long item here</a></li>
        <li><a href="#!">two</a></li>
        <!-- <li class="divider"></li> -->
        <li><a href="#!">grade</i>three</a></li>
      </ul>
      
      
      <a class="btn-floating btn-large halfway-fab waves-effect waves-light teal hide-on-med-and-down scale-transition scale-out pulse" href="#modal1">
          <i class="material-icons">call</i>
      </a>

    </div>
  </nav>
</div>
</body>
<script>
// AFFIX LOWER NAVBAR ON SCROLL
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 64) {
        $(".navbar-lower").addClass("navbar-fixed");
    }
    else {
        $(".navbar-lower").removeClass("navbar-fixed");     
    }
});


// FADE IN SMALL LOGO AND FAB ON SCROLL
$(window).scroll(function() {
  var scrollPosition = $(this).scrollTop();
  var $fadeInLogo = $('.fadeInLogo');
  var $growInFab = $('.halfway-fab');
  if (scrollPosition > 128) {
    // Fade in logo & bring in FAB
    $fadeInLogo.fadeIn(200);
    $growInFab.removeClass("scale-out");
  } else {
    // Fade out logo & remove FAB
    $fadeInLogo.fadeOut(200);
    $growInFab.addClass("scale-out");
  }
});


// MODAL
$(document).ready(function(){
  $('.modal').modal();
});

// DROPDOWNS
$(document).ready(function(){
  $(".dropdown-button").dropdown(
    {
      belowOrigin: true
    }
  );
});

//TABS
$(document).ready(function(){
  $('ul.tabs').tabs();
});

//SCROLLSPY
$(document).ready(function(){
    $('.scrollspy').scrollSpy();
});

// SIDEBAR
$(document).ready(function(){
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
});</script>
</html>