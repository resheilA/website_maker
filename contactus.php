<?php 

if(isset($_GET["d"])){
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			   $to = "resheil@resheil.com";
			   $subject = $_POST["subject"];			 
			   $message .= "<br><Br><BR><b>Dear Sir,</b><br>";
			   $message .= "A user has tried to contact you.<br><br>";			   
			   $message .= "Following are the user details:<br>";
			   $message .= "User name : ".$_POST['name']." <br>";
			   $message .= "Email : ".$_POST['email']."<br>";
			   $message .= "Message : ".$_POST["message"]."<br><br><br>";
			   $message .= "Regards,<br>";
			   $message .= "Team Parkpage<br>";
			   $header = "From: Team Parkpage <noreply@parkpage.in>\r\n";
			   $header .= "MIME-Version: 1.0\r\n";
			   $header .= "Content-type: text/html\r\n";
			   $retval = mail ($to,$subject,$message,$header);
			   if( $retval == true )
			   {
				  echo "Message sent successfully...";
			   }
			   else
			   {
				  echo "Message could not be sent...";
			   }

		}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $_GET["d"]; ?></title>
  <link rel="stylesheet" href="css/style.css">
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("contact").submit();
       }
     </script>
</head>

<body>
  <!-- contact1 -->
  <section class="w3l-simple-contact-form1">
    <div class="contact-form section-gap">
      <div class="wrapper">
        <div class="contact-form" style="max-width: 450px; margin: 0 auto;">		
          <div class="form-mid">
		  <h1>Contact us</h1><hr>
            <form method="post" id="contact">
              <div class="field">
                <input type="text" class="form-control" name="name" id="w3lName" placeholder="Name" required="">
              </div>
              <div class="field">
                <input type="email" class="form-control" name="email" id="w3lSender" placeholder="Email"
                  required="">
              </div>
              <div class="field">
                <input type="text" class="form-control" name="subject" id="w3lSubject" placeholder="Subject"
                  required="">
              </div>
              <textarea name="w3lMessage" class="form-control" id="message" placeholder="Message"
                required=""></textarea>
			  <button class="g-recaptcha btn btn-contact" data-sitekey="6LcUdLEZAAAAAIDtWGViVft_vwD-WiEaFRu45j_r" data-callback='onSubmit'>Submit</button>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact1 -->
</body>

</html>