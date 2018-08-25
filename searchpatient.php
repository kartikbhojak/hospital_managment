<html>

<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
<?php
include("func.php");
$con=mysqli_connect("localhost","root","","hmsdb");

if(isset($_POST['patient_search_submit']))
{
	$contact=$_POST['sea'];
	$query="select * from doctorapptb where contact='$contact'";
	$result=mysqli_query($con,$query);

	echo "<div class='container-fluid' style='margin-top:50px;'>

	<div class='card'>
	<div class='card-body'><a href='patientdetails.php' class='btn btn-light'>Go Back</div>
	<img src='2.jpg' class='card-img-top'>
	<div class='card-body'style='background-color:#3498DB;color:#ffffff;''>
		<table class='table table-hover'>
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
  <tbody>";


	while($row=mysqli_fetch_array($result))
	{
	$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$docapp=$row['docapp'];
	$payment=$row['payment'];

	echo "<tr>
      
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
      <td>$payment</td>
    </tr>";
	}


	echo "</tbody></table></div></div></div>";

}
?>
</body>
</html>