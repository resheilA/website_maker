<?php 
include("functions.php");
$primary_color = "#28334AFF";
$secondary_color = "#F8de44ff";
$font_color =  getContrastColor($primary_color);


/*  
0-background-color
1-fontcolor-color
2-
*/

$navbar = array($primary_color, getContrastColor($primary_color));
$banner = array($secondary_color, getContrastColor($secondary_color),"90vh", "banner1.jpg");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/banner.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
  <style>
	body{
	font-family: 'Lemonada', cursive;	
	}
	
	.carousel-item {
	  height: <?php echo $banner[2]; ?>;
	  min-height: 350px;
	  background: no-repeat center center scroll;
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	}
	
	.masthead {
	  height: <?php echo $banner[2]; ?>;	  
	  background-color: <?php echo $banner[0]; ?> ;
	  color :<?php echo $banner[1]; ?>;
	  background-size: cover;
	  background-position: center;
	  background-repeat: no-repeat;
	}
  </style>
</head>
<body>

<!---------- ------->
<nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background-color:<?php echo $navbar[0]; ?>; color:<?php echo $navbar[1]; ?>">
  <a class="navbar-brand" style="color:<?php echo $navbar[1]; ?>;" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse  justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" style="color:<?php echo $navbar[1]; ?>;" href="#">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:<?php echo $navbar[1]; ?>;" href="#">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:<?php echo $navbar[1]; ?>;" href="#">Products</a>
      </li>    
	  <li class="nav-item">
        <a class="nav-link" style="color:<?php echo $navbar[1]; ?>;" href="#">Team</a>
      </li>    	  
	  <li class="nav-item">
        <a class="nav-link" style="color:<?php echo $navbar[1]; ?>;" href="#">Updates</a>
      </li>    
	  <li class="nav-item">
        <a class="nav-link" style="color:<?php echo $navbar[1]; ?>;" href="#">Gallery</a>
      </li>    
	  <li class="nav-item">
        <a class="nav-link" style="color:<?php echo $navbar[1]; ?>;" href="#">Clientele</a>
      </li>    
    </ul>
  </div>  
</nav>

<!---------- navigation end -------->
<!----------- BAnner ------------->


<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead" style="background-image: url('<?php echo $banner[3]; ?>'); box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.6);color:white;background-color:<?php echo $banner[1]; ?>">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">Vertically Centered Masthead Content</h1>
        <p class="lead">A great starter layout for a landing page</p>
      </div>
    </div>
  </div>
</header>



<!-------------- End ------------->

<!-- Page Content -->
<section class="py-5" style="background-color:<?php echo $navbar[0]; ?>; color:<?php echo $navbar[1]; ?>">
  <div class="container">
    <h1 class="font-weight-light">Half Page Image Slider</h1>
    <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images in this snippet are from <a href="https://unsplash.com">Unsplash</a>!</p>
  </div>
</section>



<section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url(&quot;https://images.unsplash.com/photo-1517216015940-049a2d4e2da4?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=14035a7d76df29c4697de036fcd005ce&quot;);">
        <div class="container ">
          <div class="row align-items-center d-flex justify-content-between">
            <div class="col-12 col-md-6 pb-5 order-2 order-sm-2 ">
              <h1 class="  text-white font-weight-bold mb-3 mt-5 display-3">Win Your Market.</h1>
              <p class="lead text-white">A collection of coded HTML and CSS elements to help your build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>
              <div class=" d-flex mt-3 mb-1">
                <a class="btn btn-primary btn-raised text-uppercase btn-lg  mt-md-3 " href="#" role="button">Download Now</a>
              </div>
            </div>
            <div class="col-12 col-md-6 order-sm-1 order-md-2  ">
              <div class="icon-wrap text-primary d-flex justify-content-md-center my-3">
                <button href="#" class="icon d-flex border-0 align-items-center justify-content-center bg-white text-dark shadow-lg rounded-circle " style="width:70px; height:70px">
                  <i class=" fa fa-play fa-lg ml-1"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
     </section>







<section class="">
  <div class="container-fluid m-0 ">
    <div class="row d-md-flex-row  overflow-hidden">
        <div class="col-md-4  p-0 col-12 bg-light d-flex overflow-hidden ">
            <div class="card p-0   w-100 h-100 text-light   border-0 ">
                <img class="card-img h-100 w-100" src="https://images.unsplash.com/photo-1522724709546-19901cb1818a?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=97bace733cd75edf9ec8b4a2ef1fad7c" alt="Card image">
                <div class="card-img-overlay p-1 p-md-3    ">
                    <div class="position-relative  w-100 h-25  d-flex">

                        <div class="container-fluid align-self-start   mt-2 mb-2">
                            <div class="row">
                                <div class="col-5 col-md-3">
                                    <h4 class="mt-1">mnml</h4>
                                </div>
                                <div class="col-md-9 col-7 text-right">
                                    <div class="row align-items-center">
                                        <div class="col-12 align-self-center">
                                            <hr class="border border-border-light mt-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative  w-100 h-50  d-flex">

                        <div class="container-fluid align-self-center   mt-5 mb-2">
                            <div class="row">
                                <div class="col-12">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="position-relative  w-100  h-25 d-flex">

                        <div class="container-fluid align-self-end  mt-5 mb-2">
                            <div class="row">
                                <div class="col-md-6 col-7">
                                    <div class=" pt-0 d-inline-block">
                                        <a href="#" role="button" class=" btn btn-link mr-2"><i class="fab fa-twitter fa-lg text-light" aria-hidden="true"></i></a>
                                        <a href="#" role="button" class=" btn btn-link mr-2"><i class="fab fa-facebook fa-lg text-light" aria-hidden="true"></i></a>
                          

                                    </div>
                                </div>
                                <div class="col-md-6 col-5 text-right">
                                    <a href="#" class="btn btn-outline-light">Hire me now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-8  pt-5 pt-md-1 pb-5 overflow-hidden bg-light">

            <div class="container-fluid p-md-5 d-flex align-items-center h-100">
                <div class="row justify-content-md-center">

                    <div class="col-md-8">

                        <h3 class="small">J O H N D O E / C V</h3>

                        <h1 class="  mb-5 pt-md-2 pt-sm-4">I'm Experienced<br>Web App &amp;  UI Designer </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.</p>
                        <h5 class="">Technologies used:</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="badge badge-info badge-pill">Angular</span></li>
                            <li class="list-inline-item"><span class="badge badge-success badge-pill">Python</span></li>
                            <li class="list-inline-item"><span class="badge badge-warning badge-pill">jQuery</span></li>
                            <li class="list-inline-item"><span class="badge badge-dark badge-pill">Webpack</span></li>
                            <li class="list-inline-item"><span class="badge badge-danger badge-pill">HTML/SASS</span></li>
                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">PostgresSQL</span></li>
                        </ul>

                        <p class="mt-md-5 mt-5 mb-5">
                            <a href="#" class="btn btn-dark shadow-lg">See my portfolio</a>
                        </p>

                    </div>
                    <div class="col-12 col-md-4 pt-md-5">
                        <h5 class="mt-md-4 mb-3 small text-uppercase">Frontend</h5>
                        <div class="progress mb-3 mt-2">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 60%">
                                <span class="stacked-label">HTML</span>
                            </div>
                        </div>
                        <div class="progress mb-3 mt-2">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 70%">
                                <span class="stacked-label">CSS</span>
                            </div>

                        </div>
                        <div class="progress mb-3 mt-2">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 80%">
                                <span class="stacked-label">JavaScript</span>
                            </div>
                        </div>
                        <h5 class="mt-md-5 mb-3 small text-uppercase">Backend</h5>
                        <div class="progress mb-3 mt-2">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 70%">
                                <span class="stacked-label">PHP</span>
                            </div>
                        </div>
                        <div class="progress mb-3 mt-2">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 80%">
                                <span class="stacked-label">NodeJs</span>
                            </div>
                        </div>
                        <div class="progress mb-3 mt-2">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 60%">
                                <span class="stacked-label">Pyton</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</section>













 <section class="pb-5 pt-5">
      <div class="container">
          <div class="row align-items-center justify-content-between ">
            <div class="col-12 col-md-5 pr-md-5 ">
              <h1 class="mb-3 mt-5 display-4 font-weight-bold">Hello.</h1>
              <p class="lead  ">A collection of coded HTML and CSS elements to help your build your new website. Clean design, fully responsive and based on Bootstrap.</p>
              <div class="  d-flex mt-3 mb-1">
                <a class="btn btn-success btn-lg  mt-md-3  " href="#" role="button">Learn more now</a>
              </div>
            </div>
            <div class="col-12 col-md-7  mt-4 mt-md-0">
              <div class="embed-responsive embed-responsive-16by9 shadow-lg rounded overflow-hidden">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
   </section>
   
   
   
   
   <section class="about-us py-5 " id="about-us">
    <div class="container mt-5">
	<div class="row">
		<div class="col-md-6">
		    <h1 class='text-success'>Welcome!</h1>
		    <h2>Know More About Us</h2>
		    <hr>
		    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etae magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    <button type="button" class="btn btn-success">Let's Know More</button>

		</div>
		<div class="col-md-6">
		    <img style="width:100%;" src="http://themebubble.com/demo/marketingpro/wp-content/uploads/2016/10/seo-slide.png "alt="">
		</div>
	</div>
</div>
</section>



<style>


<!--CSS-->/*text family*/
div{
    font-family:open sans;
}
.block{
    border:1px solid black;
    border-radius: 5px;
    font-size:17px;
}
/* hover on blocks*/
.block:hover{
    background-color:#337ab7;
    color:white;
}
img:hover{
    border:1px solid white;
}
/*background color*/
.block2{
    background-color:#084035;
}
/*texy size and color*/
h4{
    color:white;
}///

</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col- md-12 col-sm-12">
            <div class="row">
            <!--1 card-->
                <div class="col=lg-4 col-md-4 col-sm-12 order-md-1">
                    <div class="container block rounded-lg rounded-sm ">
                                                <!--1st row--->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a href=""><img style="max-width: 100%;" src="https://dummyimage.com/600x400/000/fff" alt="placeholder image" class="img-fluid"/></a>
                                 <p><center class="mb-3" style="text-align:justify;">For suitable crops, ingredients, product label and further information, click image for details.</center></p>
                            </div>
                        </div>
                        <!--2nd row--->
                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12 block2">
                                <p><h4 class="mb-3"><i class="fa fa-flask"></i> King Timer </h4></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2nd card--->
                <div class="col=lg-4 col-md-4 col-sm-12 order-md-2">
                    <div class="container block rounded-lg rounded-sm">
                                                <!--1st row--->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a href=""><img style="max-width: 100%;" src="https://dummyimage.com/600x400/000/fff" alt="placeholder image" class="img-fluid"/></a>
                                 <p><center class="mb-3" style="text-align:justify;">For suitable crops, ingredients, product label and further information, click image for details.</center></p>
                            </div>
                        </div>
                        <!--2nd row--->
                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12 block2">
                                <p><h4 class="mb-3"><i class="fa fa-flask"></i> Martin Super </h4></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3rd card-->
                 <div class="col=lg-4 col-md-4 col-sm-12 order-md-3">
                    <div class="container block rounded-lg rounded-sm">
                                                <!--1st row--->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a hred=""><img style="max-width: 100%;" src="https://dummyimage.com/600x400/000/fff" alt="placeholder image" class="img-fluid"/></a>
                                 <p><center class="mb-3" style="text-align:justify;">For suitable crops, ingredients, product label and further information, click image for details.</center></p>
                            </div>
                        </div>
                        <!--2nd row--->
                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12 block2">
                                <p><h4 class="mb-3"><i class="fa fa-flask"></i> Power Max Pro </h4></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
















<style>


/* FontAwesome for working BootSnippet :> */

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}

</style>
<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">OUR TEAM</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>
<!-- Team -->



















<style>



.row.heading h2 {
    color: #fff;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;
    text-transform: uppercase;
}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
	display: block;
	padding-top: 60px;
	padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{ 
     border:1px solid #999999; 
	 text-align:center; 
	 margin-bottom:28px; 
	 padding:40px 25px;
}
.our-webcoderskull .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{ 
    color:#3c3c3c; 
	font-size:24px; 
	font-weight:500;
	font-family: 'Poppins', sans-serif;
	padding: 10px 0;
}
.practice-area .inner p{ 
    font-size:14px; 
	line-height:22px; 
	font-weight:400;
}
.practice-area .inner img{
	display:inline-block;
}


.our-webcoderskull{
  background: url("http://www.webcoderskull.com/img/right-sider-banner.png") no-repeat center top / cover;
  
}
.our-webcoderskull .cnt-block{ 
   float:left; 
   width:100%; 
   background:#fff; 
   padding:30px 20px; 
   text-align:center; 
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-webcoderskull .cnt-block figure{
   width:148px; 
   height:148px; 
   border-radius:100%; 
   display:inline-block;
   margin-bottom: 15px;
}
.our-webcoderskull .cnt-block img{ 
   width:148px; 
   height:148px; 
   border-radius:100%; 
}
.our-webcoderskull .cnt-block h3{ 
   color:#2a2a2a; 
   font-size:20px; 
   font-weight:500; 
   padding:6px 0;
   text-transform:uppercase;
}
.our-webcoderskull .cnt-block h3 a{
  text-decoration:none;
	color:#2a2a2a;
}
.our-webcoderskull .cnt-block h3 a:hover{
	color:#337ab7;
}
.our-webcoderskull .cnt-block p{ 
   color:#2a2a2a; 
   font-size:13px; 
   line-height:20px; 
   font-weight:400;
}
.our-webcoderskull .cnt-block .follow-us{
	margin:20px 0 0;
}
.our-webcoderskull .cnt-block .follow-us li{ 
    display:inline-block; 
	width:auto; 
	margin:0 5px;
}
.our-webcoderskull .cnt-block .follow-us li .fa{ 
   font-size:24px; 
   color:#767676;
}
.our-webcoderskull .cnt-block .follow-us li .fa:hover{ 
   color:#025a8e;
}

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
        <h2>Our Team</h2>
    </div>
    <ul class="row">
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Web coder skull</a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Kappua </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Manish </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
       </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Atul </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
    </ul>
  </div>
</section>

</body>
</html>


