<?php
$server="localhost";
$username="id2274291_learn_php";
$password="hello123";
$db="id2274291_pro_php";
$conn=mysqli_connect($server,$username,$password,$db);


?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SR Mulicast & Forge</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="stylesheet" href="css/font-awesome.css">
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
});</script>
<nav class="navbar navbar-custom navbar-fixed-top" style="background:#2b2929;">
		<div class="container-fluid">
			<div class="navbar-header">
			<a href="adminDatabase.php" class="navbar-brand" style="font-size:30px" id="header-top"><i class="fa fa-cog fa-spin fa-fw"></i>
<span class="sr-only">Loading...</span>  SR Mulicast & Forge</a>
			</div>
			<ul class="nav navbar-nav navbar-right top-header">
				<li><a href="#database" class="jumper">Database</a></li>
				<li><a href="adminDatabase.php">Admin Page</a></li>
				
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
        <img src="images/img23.jpg" alt="Los Angeles" style="width:100%; height:600px;">
        <div class="carousel-caption">
          <h3 class="trx">SR Mulicast & Forge</h3>
          <p class="prx">Let&apos;s Make Together</p>
        </div>
      </div>

      <div class="item">
        <img src="images/img25.jpg" alt="Chicago" style="width:100%;height:600px;">
        <div class="carousel-caption">
          <h3 class="trx">SR Mulicast & Forge</h3>
          <p class="prx">Let&apos;s Make Together</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/img18.jpg" alt="New York" style="width:100%;height:600px;">
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
<div class="container">
	<div class="jumbotron" id="database" style="text-align:center;"><h2><b>Database</b> </h2> </div>

 	<?php
	 

	
	$sql="SELECT * FROM users order by date DESC";
	$run=mysqli_query($conn,$sql);
	echo "
	<table class='table'>
	<thead>
	<tr>
	<th>Sr. no.</th>
	<th>Username</th>
	<th>Email</th>
	<th>Contact</th>
	<th>Query or Comment</th>
	<th>Date</th>
	<th>Delete</th>
	</tr>
	
	</thead>
	<tbody>
	
	";
	$c=1;
	while($rows=mysqli_fetch_assoc($run))
	{
	echo "
	
	<tr>
	<td>$c</td>
	<td>$rows[name]</td>
	<td>$rows[email]</td>
	<td>$rows[contact_number]</td>
	<td>$rows[query]</td>
	<td>$rows[date]</td>
	<td><a href='adminDatabase.php?del_id=$rows[u_id]' class='btn btn-danger'>Delete</a></td>
	</tr>
	";
    $c++;	
	}
	echo "</tbody>
	
	</table>";
	?>
	
	</div>


</div>
<br><<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="footer text-center navbar-fixed-bottom">Copyright &copy;reserved</div>
</body>
</html>
<?php


if(isset($_GET['del_id'])){
	$del_sql="DELETE FROM users WHERE u_id='$_GET[del_id]' ";
	if(mysqli_query($conn,$del_sql))
	{
		?>
		<script>window.location="adminDatabase.php"</script>
		<?php
	}
	
	
}


?>