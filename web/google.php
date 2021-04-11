<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<Style>


body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif; 
   overflow-x: hidden;
  }
 
 /* banner */ 

  .hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://images.unsplash.com/photo-1554034483-04fda0d3507b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80");
    height: 96%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
  


</style>



<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>


<body>
<div class="w3-top">
<div class="w3-bar w3-green w3-xlarge">
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-left w3-hide-large w3-hide-medium" onclick="w3_open()">&#9776;</a>
  <a href="#" class="w3-bar-item w3-button">Webportal.in</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right">Link 3</a>  
</div>

</div>


<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<br>

<div class=" hero-image"> 

</div>

</body>
</html>
