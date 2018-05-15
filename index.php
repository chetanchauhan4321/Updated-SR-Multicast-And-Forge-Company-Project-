<?php
$server="localhost";
$username="id2274291_learn_php";
$password="hello123";
$db="id2274291_pro_php";
$conn=mysqli_connect($server,$username,$password,$db);


?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SR Mulicast & Forge</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	
	<script src="js/jquery.js"></script>
	<script src="js/lightbox.js"></script> 
	<script src="js/bootstrap.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <style>
	#myBtn {
	  display: none;
	  position: fixed;
	  bottom: 20px;
	  right: 10px;
	  z-index: 99;
	  margin-bottom:60px;
	  border: none;
	  outline: none;
	  background-color: #33eae1;
	  color: white;
	  cursor: pointer;
	  padding: 15px;
	  border-radius: 10px;
	}

	#myBtn:hover {
	  background-color:#e2067b;
	}
	
</style>
	
	
</head>
<body>
<button onclick="topFunction()"  class="jumper" id="myBtn" title="Go to top" ><b>Move to Top</b></button>


<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


$(document).ready(function() {
  $(".jumper").on("click", function( e ) {

    e.preventDefault();

    $("body, html").animate({ 
      scrollTop: $( $(this).attr('href') ).offset().top 
    }, 600);

  });
});
</script>


	<nav class="navbar navbar-custom navbar-fixed-top " style="background:#2b2929;">
		<div class="container-fluid">
			<div class="navbar-header">
			
			<a href="index.php" class="navbar-brand" style="font-size:30px" id="header-top"><i class="fa fa-cog fa-spin fa-fw"></i>
		<span class="sr-only">Loading...</span>  SR Mulicast & Forge</a>
			</div>
			<ul class="nav navbar-nav navbar-right top-header" >
				<li><a  href="index.php" >Home</a></li>
				<li><a class="jumper" href="#product" >Our Product</a></li>
				<li><a  class="jumper" href="#aboutus" >About Us</a></li>
				<li><a class="jumper" href="#contactus" >Contact Us</a></li>
			</ul>
		</div>
	</nav>
<header id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/img23.jpg" alt="" style="width:100%; height:600px;">
        <div class="carousel-caption">
          <h3 class="trx">SR Mulicast & Forge</h3>
          <p class="prx">Let&apos;s Make Together</p>
        </div>
      </div>

      <div class="item">
        <img src="images/img25.jpg" alt="" style="width:100%;height:600px;">
        <div class="carousel-caption">
          <h3 class="trx">SR Mulicast & Forge</h3>
          <p class="prx">Let&apos;s Make Together</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/img18.jpg" alt="" style="width:100%;height:600px;">
        <div class="carousel-caption">
          <h3 class="trx">SR Mulicast & Forge</h3>
          <p class="prx">Let&apos;s Make Together</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   
  
</header>
	<div class="container-fluid do"><br><br><br>
		
			<div class="row">
			<h2>What We Are</h2><br>
				<div class="col-sm-9">
					
					<p>S.R MULTICAST & FORGE was originated in 2012. We offer wide range of engineering products and engineering services that find applications 
					in Iron & Steel Industry, Automobile Industry, Construction Industry and Agriculture Industry.</p>
					<p>
						Further, the experience of 6 years justifies our credibility as an eminent manufacturer, supplier and exporter of Grey & Ductile Iron 
						Castings, S.G Casting available in various standards specifications that can be customized to suit the varied requirements of the clients 
						within committed time frame. 
					</p><br>
					 <center><a href="#aboutus" class="btn btn-success btn-lg jumper">Know More</a></center>
				</div>
				<div class="col-sm-3 logo">
					<span><img src="images/logo7.jpg" style="width:200px; float:right; margin:0 30px;"></span>
					<!--<span class="glyphicon glyphicon-grain logo"></span>-->
				</div>
			</div>
	</div>
	<div class="container-fluid Quality">
		<div class="row">
			<div class="col-sm-4">
			  <span class="glyphicon glyphicon-signal logo1"></span>
			</div>
			<div class="col-sm-8">
			  <h2>Our Product Range Includes</h2><br>
			  <ul>
					<li>Cast Iron(Grey Iron) Castings</li>
					<li>Graded C.I Castings</li>
					<li>Casting By Green Sand Process</li>
					<li>Casting By No-Bake Process</li>
					<li>Casting By CO2 Process</li>

				</ul>
			  
			</div>
		</div>
	</div><br><br>
	<div id="services" class="container-fluid text-center">
		<h2>Our Clients</h2>
		<div class="row text-center slideanim">
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="images/img26.jpg" alt="Zoloto Valves" width="400" height="300">
				</div>
			
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="images/img27.jpg" alt="Sant Valves" width="400" height="300">
				</div>
			
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="images/img28.png" alt="Rail Tec" width="400" height="300">
				</div>
			
			</div>
		</div><br><br>
		<div class="slideanim"style="background-color:#F0F0F0;">
		<p><center style="font-size:18px;">Our major market includes U.A.E Countries (Dubai, Oman, Sharjah, Qatar, Bahrain and Doha)</center></p>
		</div>
	</div><br><br><br>
	<div class="Quality">
			<center><h3>What our customers say</h3></center>
		<div id="myCarousel1" class="carousel slide text-center car" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel1" data-slide-to="1"></li>
			  <li data-target="#myCarousel1" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner car-inner" role="listbox">
			  <div class="item active">
				<h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe,Customer</span></h4>
			  </div>
			  <div class="item">
				<h4>"One word... WOW!!"<br><span>Gurpreet Singh, Salesman</span></h4>
			  </div>
			  <div class="item">
				<h4>"Could I... BE any more happy with this company?"<br><span>Chetan Chauhan</span></h4>
			  </div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control car-control" href="#myCarousel1" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control car-control" href="#myCarousel1" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		</div>
	</div>
	<div class="container fluid slideanim" id="product"><br><br>
		<h2><b>Our Products</b></h2>
		<div class="col-md-4">
			<a href="images/img7.png" data-lightbox="gallery" data-title="JCB Bucket Teeth" class="thumbnail" id="img1" >
				<img src="images/img7.png" class="img-responsive">
			</a>
			<div class="clearfix"></div>
		</div>
		
		
		<div class="col-md-4">
			<a href="images/img9.jpg" data-lightbox="gallery" data-title="Bucket Teeth" class="thumbnail" >
				<img src="images/img9.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img10.jpg" data-lightbox="gallery" data-title="Bucket teeth" class="thumbnail" >
				<img src="images/img10.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img6.jpg" data-lightbox="gallery" data-title="L&T Bucket Teeth" class="thumbnail" >
				<img src="images/img6.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img11.png" data-lightbox="gallery" data-title="Excavator Tooth Point" class="thumbnail" >
				<img src="images/img11.png" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img12.jpg" data-lightbox="gallery" data-title="Heavy JCB Tooth Point" class="thumbnail" >
				<img src="images/img12.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img13.jpeg" data-lightbox="gallery" data-title="Slde Cutter" class="thumbnail" >
				<img src="images/img13.jpeg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img14.jpg" data-lightbox="gallery" data-title="Graded Casting" class="thumbnail" >
				<img src="images/img14.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img15.jpg" data-lightbox="gallery" data-title="SG Iron casting" class="thumbnail" >
				<img src="images/img15.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img16.jpg" data-lightbox="gallery" data-title="CI Casting" class="thumbnail" >
				<img src="images/img16.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img17.jpg" data-lightbox="gallery" data-title="Auto Parts" class="thumbnail" >
				<img src="images/img17.jpg" class="img-responsive">
			</a>
		</div>
	</div>
	
	
	<div class="container fluid" id="aboutus"><br><br>
		<div class="page-header">
			<h2><b>About Us</b></h2>
		</div>
		<div class="col-md-20 col-md-offset-1 about_para">
		<img src="images/logo7.jpg" style="width:200px; float:right; margin:30px">
			S.R. Multicast & Forge Inaugurated in the year 2011, at Jalandhar (Punjab, India), we, “S.R. Multicast & Forge”, are occupied 
			in manufacturing and supplying a qualitative gamut of Steel Casting, JCB Bucket Teeth, Auto Parts, Iron Casting, Valve Series, 
			Breaker Chisel Series, Bucket Teeth & Side Cutter Series, Auto & Motor Accessories, Komastu Bucket Teeth, Daewoo Bucket Teeth, 
			Hitachi & Esco Bucket Teeth, Kobelco Bucket Teeth and Hyundai Bucket Teeth. These are manufactured using the finest grade raw 
			material and sophisticated technology at our hi-tech production unit. Keeping in mind the various demands of our esteemed clients, 
			we are offering our wide range of products as per their varied requirements. Our offered product assortment is widely appreciated 
			among our esteemed clients for their enhanced durability, high strength, sturdy construction, low maintenance and robust design. 
			The offered product is designed with high precision in order to meet the international quality norms. Apart from this, the offered 
			range is available in various sizes, patterns, designs and shapes as per the variegated requirements of the clients.
		</div><br><br><br>
		<div class="col-md-20 col-md-offset-1 about_para">
			Our robust infrastructural facility is constructed over a wide area of land that enable us to fabricate bulk quantities of products
			in accordance with the universal standards. Manned by a team of highly experienced professionals, the entire facility is outfitted 
			with advanced machines and technologies. All the departments are properly handled to carry out the entire business operations in a 
			systematic manner. Our infrastructure is well connected with all the modes of transportation that enables prompt delivery of products 
			at client’s end. Furthermore, we have selected a team of young, energetic and qualified professionals, who hold immense years of knowledge 
			in their respective fields of operations. Our team is an inseparable part of the company, which works meticulously to contribute towards
			our success and growth. These professionals work under different functional units and supervise the entire business operations to achieve 
			the defined motives of our organization and attain optimum client contentment.
		</div><br><br><br>
		<div class="col-md-20 col-md-offset-1 about_para">
			Due to our high quality standards followed throughout our operations, we have been able to offer a qualitative range of products to 
			our esteemed clients. As quality being the hallmark of our company, we have selected an expert team of quality inspectors, who conduct
			rigorous tests on specific parameters before these are delivered clients end. As per the advice of our skilled professionals and current 
			quality needs, we follow quality management policies in order to inspect the raw material, supervise the production process and check the 
			end product for any kind of discrepancy. Since the establishment of our firm, the main aim has been to minutely comprehend the exact demands 
			of the patrons to offer the desired products maintaining quality as well as durability. Our team of client care executives possesses in depth 
			knowledge in their respective fields of operations, which enables us to provide helpful after sales support to the clients. We have been able 
			to garner huge base of satisfied clients spanning all across the globe due to our ethical business practices, wide distribution network, crystal
			clear dealings and easy modes of payment.
		</div><br><br><br>
		<div><h2><b>Client Satisfaction</b></h2></div>
		<div class="col-md-20 col-md-offset client">
			We have been able to build a huge client owing to the quality of our range of Engineering Products. Clients are the most important aspect 
			behind our success; their support has always encouraged us to offer innovative range of Engineering Products. We use state-of-the-art 
			machinery and latest technology to manufacture the entire range of Cast Iron Products that allow us to maintain quality of these products. 
			In addition, we also have a wide distribution network that has helped us to build a huge client base for ourselves not only in India but 
			other parts of the world as well.
	
		</div><br><br><br>
		<div><h2><b>Quality Assuranse</b></h2></div>
		<div class="col-md-20 col-md-offset Quality">
			We have always been appreciated for our strict quality management systems in the industry. Quality is the most important elements of our 
			business operations, which we never compromise on. We have established a modern quality testing facilities that enable us to check our Cast 
			Iron Products on various industrial standards. Further, we have appointed a team of quality controllers who monitor the entire manufacturing 
			process, right from procuring the raw material to final dispatch of the consignments. We use quality raw material that include Pig Iron, 
			Iron, Steel and Zinc that are sourced from various organizations.

			We test our Cast Iron Products on following Parameters:
			<ul>
				<li>Performance</li>
				<li>Reliability</li>
				<li>Dimension</li>
				<li>Finish</li>
				<li>Corrosion and Abrasion resistance</li>
				<li>Resistance to heat and temperature</li>
			</ul>
	
		</div><br><br><br>
	</div>
	
	<div class="container fluid" id="contactus" 
	style="
    background-image: url('images/img23.jpg');
    min-height:500px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
">
	
 	 <div class="page-header">
			
			<h2 style="color:white"></><i class="fa fa-mobile " aria-hidden="true"></i><b>   Contact Us</b></h2>
		</div>
	<form class="col-md-6 col-md-offset-3" method="POST" action="send_form_email.php">
	<div class="form-group">
	<label style="color:white">Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="Full Name" required>	
	</div>
	<div class="form-group">
	<label style="color:white">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email" required>	
	</div>
	<div class="form-group">
	<label style="color:white">Contact Number</label>
    <input type="text" class="form-control" name="number" placeholder="Phone Number" required>	
	</div>
	<div class="form-group">
	<label style="color:white" >Comments or Query</label>
    <textarea type="text" class="form-control" name="query" rows="10" style="resize:none;" placeholder="Comments" required></textarea>	
	</div>
	<div class="form-group">
    <input type="submit" class="btn btn-danger btn-block" name="submit_user">	
	</div>
	
	<div class="address col-md-15" style="color:black;" >
					
				<h3><span class="glyphicon glyphicon-map-marker"></span>Address:</h3>
				<p><h3>S.R.Multicast & Forge</h3> 
				<h4>Hanish Goel(Partner) No.37,Sango Sohal</h4>
				<h4>Wariana Industrial Complex</h4>
				<h4>Jalandhar-144013,Punjab,India</h4></p>
			</div><br><br><br>
	</form>
	
	
	</div>
	<br><br><br><br><br><br><br><br><br><br><br>

	<footer class="navbar  navbar-fixed-bottom" style="background:#2b2929;">
			<div class="col-md-4" style="color:white;padding:20px"><center>Copyright &copy; 2017 S.R.Multicast & Forge Reserved</center></div>
            <div class="container-fluid pull-right">
			<ul class="nav navbar-nav">
				<li><div class="pull-left findus" style="padding-top:25px;color:white"><b>Find Us on</b></div></li>
				<li><a style="color:#4274f4;padding-top:20px;padding-bottom:20px;padding-right:0px" href="https://www.facebook.com/pages/SR-Multicast-Forge/390526047664856"> <i class="fa fa-facebook-official pull-right fa-2x" aria-hidden="true" style="margin-right:20px"></i></a>
			    </li>
				<li><a style="color:#4274f4;padding-top:20px;padding-bottom:20px;padding-left:0px" href="https://www.google.co.in/maps/dir/31.3348802,75.5154457/Wariana+Industrial+Complex,+Pushpa+Gujral+Science+City,+Jalandhar,+Punjab+144002/@31.334596,75.5152978,1162m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x391a454552505413:0x4865dd4604ebdf25!2m2!1d75.5154423!2d31.3349644"><i class="fa fa-globe pull-right fa-2x" aria-hidden="true" style="margin-right:7px"></i></a> 
			    </li>
				
					
			</ul>
		</div>
	</footer>
	<script>
		$(document).ready(function(){
			$(window).scroll(function() {
				$(".slideanim").each(function(){
				  var pos = $(this).offset().top;

				  var winTop = $(window).scrollTop();
					if (pos < winTop + 600) {
					  $(this).addClass("slide");
					}
				});
			});
		})
		
	</script>

</body>	
</html>
<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "k1424@gmail.com";
    $email_subject = "We want to Contact with You";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['number']) ||
        !isset($_POST['query'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['number']; // not required
    $comments = $_POST['query']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
 
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
   
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>
		
	