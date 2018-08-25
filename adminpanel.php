<?php include('func.php');?>
<?php

if(isset($_SESSION['username']))
{

}
else
{
	header('location:index.php');
}
?>


<!DOCTYPE html>



<html>
<head>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
-->

	<title>adminpanel</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src = "../jqu.js" type = "text/javascript"></script>
<style type="text/css">

.img-responsive{
	background-image:url("background.jpeg");
	width:100%;
	height: 500px;
		padding:0px;
	background-size:cover;
	background-repeat: no-repeat;
}



.row-kartik{

	text-align:center;
}

#header{
	z-index:100;
	
	bottom:0;
	width:100%;
	background-color:#14365C;
	padding:1%;
	color:#fff;
	font-family:Calibri;
	box-shadow:0 2px 5px rgba(0,0,0,0.5);
	font-weight:bold;
}
.image{
	width:15%;
	float:right;
	box-shadow:0 0 8px 2px rgba(0,0,0,0.4);
}


 #map {
        height: 400px;
        width: 10youtu0%;

       

       }
</style>

</head>
<body>


	<div class="img-responsive">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <i class="fa fa-h-square" style="font-size:48px;color:red"></i>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
         <li><a href="adminpanel.php">Home</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Doctors</a></li>
    <li><a href="#about">About US</a></li>
    <li><a href="#con">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="logout.php">Logout</a></li>
        </div>
        </ul>
     
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav></div>


		<div class="row">
			
			<div class="col-md-3">
				<div class="list-group">
					<a href="" class="list-group-item " style="background-color:#3498DB;color:#ffffff;border-color:#3498DB">Appointments</a>
					<a href="patientdetails.php" class="list-group-item">Patient details</a>
					
					<a href="paymentstatus.php" class="list-group-item">Payment status</a>
					<a href="adddoc.php" class="list-group-item">Doctor Section</a>
					
					
			</div>
		
			
					
			
		</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">

						<h3 align="center">Book an appointment</h3>
					
					
						<form class="form-group" action="func.php" method="post">
						<label>First Name:</label>
						<input type="text" name="fname" class="form-control"><br>
						<label>Last Name:</label>
						<input type="text" name="lname" class="form-control"><br>
						<label>Email id:</label>
						<input type="email" name="email" class="form-control"><br>
						<label>Contact:</label>
						<input type="tel" name="contact" class="form-control"><br>
							<label>Doctor Appointment :</label>
							<select class="form-control" name="docapp" >
								<!--option value="Dr Sharma From 6pm to 8pm">Dr sharma From 6pm to 8pm</option>
								<option value="Dr Shetty From 4pm to 6pm">Dr roy 24 Hours Available</option-->
							<?php display_docs(); ?>

							</select><br>
							<label>Payment:</label>
							<select class="form-control" name="pay">
								<option value="paid">Paid</option>
								<option value="pay-later">Not-paid</option>
							</select><br>

							<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter new Appointment">
						</form>	

					</div>
				
				</div>
			</div>
			
			<div class="col-md-1"></div>



	</div><hr>
	<div id="about">
	<h1 style="text-align:center;">About US</h1>
	<img src="https://exceladmissions.com/wp-content/uploads/2014/12/SRM-Medical-College.jpg" class="image">
			<p style="text-align:justify;">SRM Medical College Hospital and Research Centre (SRM MCHRC) offers a plethora of opportunities to climb the career ladder as well as to change this world to better healthier providing the sophisticated treatment. With an annual intake of 150 students, the medical college commenced in 2005. The facility of collaborative research in SRM Medical College and Hospital Campus is the focal point availing to the proximity to other institutions at the University.</p>
		</div>
		

</div><br><br><br><hr>


<div id="map" ></div>
    <script>
      function initMap() {
        var uluru = {lat: 12.8229418, lng: 80.04796420000002};
        var map = new google.maps.Map(document.getElementById('map'),
        {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIm7Ng9qY5WNSFKxf4uwd1D-x8jDns7Ng&callback=initMap">
    </script>
    <hr>


<div class="row-kartik" id="con">
<h1>Contact Us</h1>
<p>Srm hospital<br>Kattankulathur,Kancheepuram dist<br>Chennai-603203</p>
<p>Mob: +91 3972632</p>
<p>Email: srm@hospital.com</p>
</div><br>


<div id="header"><marquee>Emergency Number: 044-47437500</marquee></div>


</body>
</html>