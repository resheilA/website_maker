<style>
.paddingTB60 {padding:60px 0px 60px 0px;}
.gray-bg {background: #F1F1F1 !important;}
.about-title {}
.about-title h1 {color: #535353; font-size:45px;font-weight:600;}
.about-title span {color: #AF0808; font-size:45px;font-weight:700;}
.about-title h3 {color: #535353; font-size:23px;margin-bottom:24px;}
.about-title p {color: #7a7a7a;line-height: 1.8;margin: 0 0 15px;}
.about-paddingB {padding-bottom: 12px;}
.about-img {padding-left: 57px;}

/* Social Icons */
.about-icons {margin:48px 0px 48px 0px ;}
.about-icons i{margin-right: 10px;padding: 0px; font-size:35px;color:#323232;box-shadow: 0 0 3px rgba(0, 0, 0, .2);}
.about-icons li {margin:0px;padding:0;display:inline-block;}
#social-fb:hover {color: #3B5998;transition:all .001s;}
 #social-tw:hover {color: #4099FF;transition:all .001s;}
 #social-gp:hover {color: #d34836;transition:all .001s;}
 #social-em:hover {color: #f39c12;transition:all .001s;}

</style>
<?php echo '
<div class="about-section paddingTB60 gray-bg">
                <div class="container">
                    <div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="about-title clearfix">
								<h1>About <span>us</span></h1>
								<h3>Know us better</h3>
								<p class="about-paddingB">'.$content_business[0]['about_us'].'</p>
							                         
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
						</div>';
?>						
						<div class="col-md-5 col-sm-6">
							<div class="about-img">
								<img src="https://devitems.com/preview/appmom/img/mobile/2.png" alt="">
							</div>
						</div>	
                    </div>
                </div>
            </div>