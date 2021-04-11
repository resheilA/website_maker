  <style>
	body{
	font-family: 'Rubik', sans-serif;
	}
	
	/* Set a background image by replacing the URL below */
	body {
	  background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  background-size: cover;
	  -o-background-size: cover;
	}
  </style>
<?php 
echo '

<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">About us</h1>
      <p class="lead">'.$content_business[0]['about_us'].'</p>           <br>
	   <h3>Business Details</h3>
					  <table border="1" class="table" style="">
						<tbody>
						<tr>
							<td>Nature Of Business</td><td>'.$content_business[0]["nature_of_business"].'</td>
						</tr>
						<tr>
							<td>GST Number</td><td>'.$content_business[0]["gstnumber"].'</td>
						</tr>
						<tr>	
							<td>CEO</td><td>'.$content_business[0]["ceo"].'</td>
						</tr>
						<tr>	
							<td>Number Of Employee</td><td>'.$content_business[0]["employee"].'</td>
						</tr>
						<tr>	
							<td>Establisment Year</td><td>'.$content_business[0]["establishment_year"].'</td>
						</tr>						
						<tr>	
							<td>Firm Status</td><td>'.$content_business[0]["firm_status"].'</td>
						</tr>
						</tbody>
					  </table>		
					  <br>
					  <h3>Certification</h3>
					  <img src="'.$prefix_image.$content_business[0]["gstin"].'" style="display:inline; max-width:300px;"class=" pr-5 img-fluid" style="display:inline;"></img>
					  <img src="'.$prefix_image.$content_business[0]["other"].'" style="display:inline; max-width:300px;" class="pl-5 img-fluid"></img>
					  
    </div>
  </div>
</div>
';
?>