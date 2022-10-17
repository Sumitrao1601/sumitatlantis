<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="home.css">
<link rel="stylesheet" type="text/css"    href="/media/css/dateinput/flight.css"/>
<link rel="stylesheet" type="text/css"    href="/media/css/dateinput/flight-calendar.css"/>
    </head>
<body>  

<div id="mySidenav" class="sidenav">
  <a href="about.html" id="about">About</a>
  <a href="#" id="blog">Blog</a>
  <a href="#" id="projects">Projects</a>
  <a href="contact.html" id="contact">Contact</a>
</div>

<div style="margin-left:90px;">
  
    
<ul>
    <img src="img/atlantis-logo.png">
    <li><a href="index.html">Login</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="services.html">Services</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Hotel</a>
    <div class="dropdown-content">
       <a href="hotel.html">Super Delux</a>
      <a href="hotel.html">Delux</a>
      <a href="hotel.html">Ordinary</a>
    </div>
  </li>
  <li><a href="home.html">Home</a></li>
</ul>  
</div>
        <style>
            
                 .center
            {
                 border-radius: 25px;
                padding: 20px;               
                display: block;
                margin-left: 10px;
                margin-right: auto;
                width: 35%;
            }
            .numbertext{
                margin: 150px 20px;
                
            }
        </style> 

<div class="center" >
    
    
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/hotel1.webp" style="height:500px ;width:1350px">
  <div class="text">Delux</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/hotel2.jpg" style="height:500px ;width:1350px">
  <div class="text">Ordinary</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/hotel3.webp" style="height:500px ; width:1350px">
  <div class="text">Super Delux</div>
</div>

</div>
<br>

<div style=" padding: 10px 20px;margin:-30px 620px;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<style>
    .flight{
        padding: 50px;
        margin-top: -50px;
         border-radius: 25px;             
         display: block;
         margin-left: auto;
         margin-right: auto;
         width: 80%;
         border-bottom: 2px solid black;
         background-color: #f3c17a;
         
    }
    
    
</style>
<form class="flight" >
  <label>
    Check-In:
    <input type="date" name="Check-In" value="Today"/>
  </label>
 &nbsp;&nbsp;
  <label>
    Check-Out:
    <input type="date" name="Check-Out" data-value="7" value="After one week"/>
  </label>
    <label>&nbsp;&nbsp;
    Child:<select name="select" class="p">
<option>select
<option value="Delhi" id="country" multiple>1
<option value="Bangalore">2
<option value="Mumbai">3
<option value="Kolkata">4</select></label>&nbsp;&nbsp;
    <label>
    Adult:<select name="select" class="p">
<option>select
<option value="Delhi" id="country" multiple>1
<option value="Bangalore">2
<option value="Mumbai">3
<option value="Kolkata">4</select></label>&nbsp;&nbsp;
    <input type="submit" value="Check Availability"  style="background-color:orange"></submit>
</form>
<?php
$(":date:first").data("dateinput").change(function() {
	// we use it's value for the seconds input min option
	$(":date:last").data("dateinput").setMin(this.getValue(), true);
})$(":date:first").data("dateinput").change(function() {
	// we use it's value for the seconds input min option
	$(":date:last").data("dateinput").setMin(this.getValue(), true);
})
$(":date:first").data("dateinput").change(function() {
	// we use it's value for the seconds input min option
	$(":date:last").data("dateinput").setMin(this.getValue(), true);
}) 
?>

<div class="parallax"></div>
   
    

<style>
    .parallax {
  /* The image used */
  background-image: url("img/home-room.jpeg");

  /* Set a specific height */
  min-height: 0px; }
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>


<!--
<a href="#login"><button onclick="document.getElementById('id01').style.display='block'" style="width:100%;">Login</button>
</a>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="uname" required><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>  -->
<div class="container">
        <div class="counter-counter">
            <span class="count" data-target='8930'>0</span>
            <span class="count-detail">User Acess</span>
        </div>
        <div class="counter-counter">
            <span class="count" data-target='5250'>0</span>
            <span class="count-detail">Trasactions</span>
        </div>
            <div class="counter-counter">
            <span class="count" data-target='6763'>0</span>
            <span class="count-detail">Rating & Review </span>
        </div>
    </div>
    <style>
       
        .container{
            width:100%;
            display:flex;
            justify-content: space-around;
        }
        .counter-counter{text-align:center;}
        .count{
            display: block;
            margin-bottom: 20px;
            font-size: 80px;
            color: #6a097d;
        }
        .count-detail{
            margin-bottom: 25px;
            font-size: nowrap;
            color: #565656;
        }
    </style>
    <script>
        let counts=document.querySelectorAll('.count');
        counts.forEach((count)=>{
            const updateCount = ()=>{
                
                let currentCount = parseInt(count.innerText);
                let targetCount = count.getAttribute('data-target');
                let increaseSpeed = 40;
                let increaseCount = parseInt(targetCount / increaseSpeed);
                if(currentCount < targetCount){
                    count.innerText = currentCount + increaseCount;
                }else{
                    count.innerText = targetCount;
                }
                setTimeout(updateCount,increaseSpeed);
            }
                updateCount();
            })
    </script>

 <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
 margin: -20px 620px;
 
 position: absolute;
  
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>


<h2>HOTEL FACILITIES</h2>




<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="img/restaurent.jpg" alt="Mountains" style="width:100%">
  <h3 class="heading">Restaurant</h3>
  <p>All day dining with an Atlantis Resort.</p>
  <p>Akin to a fashionable drawing room for our esteemed clientele, 360° is the perfect space for breakfast, lunch or dinner with business associates, family or friends. Take your pick of European, Japanese, Thai and Indian food made just the way you like it by Oberoi chefs in their live kitchens....
  </p>
  <p>   <b>Timings  :</b>     7.00 am to 12.45 am</p>
	 
    </div>
    </div>
  <div class="column nature">
    <div class="content">
    <img src="img/bar.webp" alt="Lights" style="width:100%">
     <h3 class="heading">Bars</h3>
     <p>Sophisticated drinks in an elegant setting.</p>
     <p>Wind down after a busy day working or sightseeing with some expertly mixed cocktails, premium spirits or beers. Or step into Enoteca, the temperature controlled wine cellar adjacent to 360°, and take your pick from our 1,200 bottles of old and new world wine.

    <p><b>Timings: </b>7.00 am to 12.45 am</p>
	
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="img/pickup.jpg" alt="Nature" style="width:100%">
        <h3 class="heading">Pick Up</h3>
	<p>The PickupTracking APP is the mobile variation of the software allowing you access to all relevant data such as ADR, Revenue and RevPar – no matter where you are and what time it is.
        </p>
    <p>It is an additional information tool for all revenue managers, reservation managers, reception managers and hotel directors.
    </p>
<p>With the PickupTracking APP, your management has the freedom to access relevant hotel figures ad hoc, whenever information is needed. It also increases transparency for all decision-makers and reduces the risk of misjudgment.
</p></div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="img/swimpool.jpg" alt="Car" style="height:280px ;width:100%">
    <h3 class="heading">Swimming Pool</h3>
    <p>The First, a soothing green fresco set against the landscaping below, and the second is a decorated stone wall embossed with bronze art work. An urban oasis in the middle of the bustling city, it is a perfect place to relax and unwind. The bespoke luxury comes with an indulgent pool basket laden with fresh lemonade, chilled water, sunscreen lotion, rose water infused towels, choice of magazines along with a selection of light meals and refreshing drinks.</p>
    <p>Dimensions – Length: 25 meters, Width: 9 meters and Depth: 1.2 meters (4 feet)</p>
    <p><b>Timings: </b> 9.00 am- 6.00 pm</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/spa.jpg" alt="Car" style="width:100%">
      <h3 class="heading">Spa</h3>
	<p> The SPA offers a peaceful haven from the bustle of the city and luxurious restful spaces where guests may find a moment of calm and an array of signature treatments to harmonise the mind. SPA at The Atlantis Resort is a soothing retreat of natural wood, hand-carved stone and soft furnishings.</p>
	<p>The sprawling facilities spread over two levels, feature a café, a fitness studio, separate relaxation lounges for ladies and men, heat experiences with steam, sauna, heated benches; personalised lockers and lifestyle showers on the first level. The second level has seven treatment rooms, couple’s spa suite and a Finishing Studio.</p>    
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/gym.jpeg" alt="Car" style="width:100%">
      <h3 class="heading">Gym</h3>
	<p>The Fitness studio at The Atlantis Resort is equipped to help achieve your daily fitness goals. Our facilities offer the best in cardiovascular and resistance equipment and an area for free weights. Personal training is also offered for those wishing to achieve special results. </p>
		<p><b>Timings: </b> 6.00 am- 6.00 pm</p>
    </div>
  </div>
    </div>


<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>



			
<footer class="footer">
    <style>
h2{ color: #f2f2f2;}
/* Create three equal columns that floats next to each other */
.column1 {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */  
}
/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<div>
<div class="row1">
  <div class="column1" style="background-color:#aaa;">
      <h2>Company</h2>
    <a href=""><p>About us</p></a>
    <a href=""><p>Hotels</p></a>
    <a href=""><p>Customer Care</p></a>
    <a href=""><p>Contact Us</p></a>
      </div>
  <div class="column1" style="background-color:#bbb;">
    <h2>Our Facilities</h2>
    <a href=""><p>Resturant</p></a>
    <a href=""><p>Bars</P></a>
    <a href=""><p>Pick-up</p></a>
    <a href=""><p>Swimming Pool</p></a>
    <a href=""><p>Spa</p></a>
    <a href=""><p>Gym</p></a>
  </div>
  <div class="column1" style="background-color:#ccc;">
    <h2>Subscribe</h2>
    <p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>
<form action="#" id="form-subscribe">
<div class="form-field">
<input type="email" placeholder="Email Address" id="email">
 <input type="submit" id="submit" value="Send">
  </div>
</div>
 
    <div>
	<ul>

            <li><font color="orange">&copy; 2020 Responsive Hotel Site Template.</font>
			<a href="https://en-gb.facebook.com/login/" class="fa fa-facebook"></a>
                        <a href="https://twitter.com/twitt_login?lang=en" class="fa fa-twitter"></a>
                        <a href="https://www.instagram.com/accounts/login/" class="fa fa-instagram"></a>
                        <a href="https://www.linkedin.com/feed/" class="fa fa-linkedin"></a>
		</li>
	</ul>
</div>
</footer>
</body>
</html>
 
