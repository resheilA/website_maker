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
    <!--/Style-CSS -->
    <link rel="stylesheet" href="templates/temp2/css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->
</head>

<body>
    <div class="Coming-block">

        <div class="page">

        </div>
        <div class="content">
            <div class="logo">
                <a class="brand-logo" href="index.html"><?php echo $domain_name; ?></a>
                <!-- if logo is image enable this   
                <a class="brand-logo" href="#index.html">
                    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> 
            -->
            </div>
            <div class="w3l-coming-soon-page">
                <div class="coming-block">
                    <h1>Coming Soon</h1>
                    <p>We are almost there, Stay tuned for something amazing!!</p>
                    
                    <a href="contactus.php?d=<?php echo $domain_name;?>" class="home">Contact us</a>
                </div>
            </div>
            <div class="copy-right text-center">
            <p>© <?php echo date("Y"); ?> <?php echo $domain_name;?>. All rights reserved
            </div>
        </div>

        <script src="templates/temp2/js/jquery-3.3.1.min.js"></script>
        </div>
</body>

</html>