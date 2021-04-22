<?php include("navbar_content.php"); ?>
<style>


.gray-bg {
    background-color: #f5f5f5;
}
/* Contact Us
---------------------*/
.contact-name {
  margin-bottom: 30px;
}
.contact-name h5 {
  font-size: 22px;
  color: #20247b;
  margin-bottom: 5px;
  font-weight: 600;
}
.contact-name p {
  font-size: 18px;
  margin: 0;
}

.social-share a {
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  text-align: center;
  margin-right: 10px;
}
.social-share .dribbble {
  box-shadow: 0 8px 30px -4px rgba(234, 76, 137, 0.5);
  background-color: #ea4c89;
}
.social-share .behance {
  box-shadow: 0 8px 30px -4px rgba(0, 103, 255, 0.5);
  background-color: #0067ff;
}
.social-share .linkedin {
  box-shadow: 0 8px 30px -4px rgba(1, 119, 172, 0.5);
  background-color: #0177ac;
}

.contact-form .form-control {
  border: none;
  border-bottom: 1px solid #20247b;
  background: transparent;
  border-radius: 0;
  padding-left: 0;
  box-shadow: none !important;
}
.contact-form .form-control:focus {
  border-bottom: 1px solid #fc5356;
}
.contact-form .form-control.invalid {
  border-bottom: 1px solid #ff0000;
}
.contact-form .send {
  margin-top: 20px;
}
@media (max-width: 767px) {
  .contact-form .send {
    margin-bottom: 20px;
  }
}

.section-title h2 {
    font-weight: 700;
    color: #20247b;
    font-size: 45px;
    margin: 0 0 15px;
    border-left: 5px solid #fc5356;
    padding-left: 15px;
}
.section-title {
    padding-bottom: 45px;
}
.contact-form .send {
    margin-top: 20px;
}
.px-btn {
    padding: 0 50px 0 20px;
    line-height: 60px;
    position: relative;
    display: inline-block;
    color: #20247b;
    background: none;
    border: none;
}
.px-btn:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    border-radius: 30px;
    background: transparent;
    border: 1px solid rgba(252, 83, 86, 0.6);
    border-right: 1px solid transparent;
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    width: 60px;
    height: 60px;
}
.px-btn .arrow {
    width: 13px;
    height: 2px;
    background: currentColor;
    display: inline-block;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    right: 25px;
}
.px-btn .arrow:after {
    width: 8px;
    height: 8px;
    border-right: 2px solid currentColor;
    border-top: 2px solid currentColor;
    content: "";
    position: absolute;
    top: -3px;
    right: 0;
    display: inline-block;
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}

</style>
<section class="section gray-bg mt-4 p-5" id="contactus">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Get In Touch</h2>
                    <p><?php echo $content_location[0]["about_us"]; ?></p>
                </div>
            </div>
        </div>
        <div class="row flex-row-reverse">
            <div class="col-md-7 col-lg-8 m-15px-tb">
                <div class="contact-form">
                    <div class="contact-name">
                    <h5>Visit Us</h5>
                    <p><?php echo $content_location[0]["address"]; ?> <br><?php echo $content_location[0]["city"]." - ".$content_location[0]["pincode"]; ?></p>
                </div>
                <div class="contact-name">
                    <h5>Phone</h5>
                    <p>+91 <?php echo $content_location[0]["contact_no"]; ?> / +91 <?php echo $content_location[0]["contact_no"]; ?></p>
                </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 m-15px-tb">
			  <div class="contact-name">
                    <h3><?php echo $content_location[0]["name"]; ?></h3>
                </div>
                <div class="contact-name">
                    <h5>Mail</h5>
                    <p><?php echo $content_location[0]["email"]; ?></p>
                </div>
               
                <div class="social-share nav">
                    <a class="dribbble" href="<?php echo $content_location[0]["instagram"]; ?>">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a class="behance" href="<?php echo $content_location[0]["facebook"]; ?>">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="linkedin" href="<?php echo $content_location[0]["twitter"]; ?>">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>