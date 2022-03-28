<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo('title');?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/assets/img/ickon.jpg">
		<!-- CSS here -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/flaticon.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/slicknav.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/themify-icons.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/nice-select.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
		
   </head>
   <?php wp_head();?>
   <body>
    <!-- Preloader Start -->
    <div class="top-bar">
    <div class="container">
    <div class="row">
    <div class="col-xl-6">
    <p><i class="ti-email"> </i> <a href="#"> contact@assureinfra.com</a></p>
    <p><i class="ti-tablet"></i> +91- 8233 359 128 </p>
    </div>
		
    <div class="col-xl-6">
<div class="top-social">
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-linkedin"></i></a>
</div>
    </div>
    </div>
    </div>  
    </div>
   <!--start menu_toggle-->
   
</div>
<!--header-menu-->
<nav class="navbar navbar-expand-lg navbar-light">

  <div class="logo">
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>

</div>
                                <a href="<?php bloginfo('url')?>">
								<?php 
								  $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}
								?>
								</a>
                            </div>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown text-dark" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-active">
          Company
        </a>
  <div class="dropdown-content">
 <a href="Company.html">About us</a>
 <a href="Company.html">Our Vision & Mission</a>
 <a href="Company.html">Our Principle</a>
 <a href="Company.html">CSR</a>
 <a href="board of Director.html">Board of Directors</a>
 <a href="leadership.html">Leadership Team</a>
  </div>



      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">Business</a>
      </li>
	       <li class="nav-item">
        <a class="nav-link text-dark" href="#">Client</a>
      </li> 
	       <li class="nav-item">
        <a class="nav-link text-dark" href="#">Gallery</a>
      </li> 
	  
	       <li class="nav-item">
        <a class="nav-link text-dark" href="#">Policy & Certifications </a>
      </li> 
	   <li class="nav-item">
        <a class="nav-link text-dark" href="#">Contact  </a>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Country
        </a>
  <div class="dropdown-content">
 <a href="india.html">India</a>
 <a href="mynmar.html">Myanmar</a>
 <a href="srilanka.html">Srilanka</a>
 <a href="philippines.html">Philippines</a>
 <a href="nepal.html">Nepal</a>
 <a href="thailand.html">Thailand</a>
  </div>
      </li>
    </ul>
  </div>
</nav>




<?php
  if(is_front_page()){
echo do_shortcode('[smartslider3 slider="18"]');
}	   
?>
			
