
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php echo $domain_name?></title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="" />
	<!-- //Meta tag Keywords -->

	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;700&display=swap" rel="stylesheet">
	<!-- //google fonts -->

	<link rel="stylesheet" href="templates/temp1/css/style.css" type="text/css" media="all" /> <!-- //Style-CSS -->

	<link href="templates/temp1/css/font-awesome.css" rel="stylesheet"><!-- //font-awesome-icons -->

</head>

<body>
	<!-- coming soon -->
	<section class="w3l-coming-soon-page">
		<div class="coming-page-info">
			<div class="wrapper">
				<div class="logo-center">
					<a class="logo" href="index.html">
						<span class="fa fa-glass"></span><?php echo $domain_name; ?>
					</a>
				</div>
				<!-- if logo is image enable this   
                    <a class="logo" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
					</a> -->

				<div class="coming-block">
					<h1>Coming Soon</h1>
					<h4 class="">Our website is under construction now</h4>
					<p>We are working very hard to give you the best
						experience with this one.</p>

				
					<div class="contact-button">
						<a href="contactus.php?d=<?php echo $domain_name;?>" class="btn">Contact us</a>
					</div>
				</div>
				<!-- copyright -->
				<div class="copyright-footer">
					<div class="w3l-copy-right">
						  <p>© <?php echo date("Y"); ?> <?php echo $domain_name;?>. All rights reserved							
					</div>
				</div>
				<!-- //copyright -->
			</div>
		</div>

		<!-- js -->
		<script src="templates/temp2/js/jquery-3.3.1.min.js"></script>

	</section>
	<!-- //coming soon -->

</body>

</html>