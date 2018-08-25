<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

</head>
<style type="text/css">

.jumbotron{
	background-image:url("2.jpg");
	width:100%;
	height:400px;
	
	background-size:cover;
	background-repeat: no-repeat;

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


</style>
<body>
		<div class="jumbotron"></div>
	<div class="container-fluid">
	<div class="card">
		<div class="card-body" style="background-color:#3498DB;color:#ffffff";>
		<div class="row">
		<div class="col-md-1">

				<a href="adminpanel.php" class="btn btn-light">Go Back</a>
			</div>
					<div class="col-md-3"><h3>Patient Details</h3></div>
					<div class="col-md-8">
						<form class="form-group" action="searchpatient.php" method="post">
							<div class="row">

							<div class="col-md-10"><input type="text" name="sea" class="form-control" placeholder="enter contact"></div>
							<div class="col-md-2"><input type="submit" name="patient_search_submit" value="search" class="btn btn-light"></div>

			</div>		
		</div>
	</div>
		<div class="card-body" style="background-color:#3498DB;color:#ffffff"></div>
		<table class="table table-hover">
  <thead>
    <tr>
      
      <th>First Name</th>
      <th>Last Name</th>
      <th >Email id</th>
       <th >Contact Details</th>
        <th>Doctor Appointment</th>
        <th>Payment</th>
    </tr>
  </thead>
  <tbody>

  	<?php get_patient_details(); ?>
  </tbody>
</table>



</div>


	</div>
</div>



<div id="header"><marquee>Emergency Number: 044-47437500</marquee></div>

</body>
</html>