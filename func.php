<?php

session_start();

$conn=mysqli_connect("localhost","root","","hmsdb");
if(isset(($_POST['login_submit'])))
{
$username=$_POST['username'];
$password=$_POST['password'];	
$query="select * from logintb where username='$username' and password='$password'";

$result=mysqli_query($conn,$query);
$row=mysqli_num_rows($result);

if($row==1)
{
	$_SESSION['username']=$username;
 	header("Location:adminpanel.php");
}
else
{ 
	 echo "<script>alert('enter correct credentials!')</script>";
	 echo "<script>window.open('index.php','_self')</script>";	
}
}

if(isset($_POST['pat_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$payment=$_POST['pay'];

	$query="insert into doctorapptb(fname,lname,email,contact,docapp,payment)values('$fname','$lname','$email','$contact','$docapp','$payment')";

	$result=mysqli_query($conn,$query);
	if($result)
	{
       
       echo "<script>alert('Appointment registered!')</script>";
	   echo "<script>window.open('adminpanel.php','_self')</script>";
	}


}



function get_patient_details(){
	global $conn;
	$query="select * from doctorapptb";
	$result=mysqli_query($conn,$query);

	while($row=mysqli_fetch_array($result)){
		
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
}

if(isset($_POST['update_data']))
{
	$contact=$_POST['contact'];
	$status=$_POST['status'];
	$query="update doctorapptb set payment='$status' where contact='$contact'";
	$result=mysqli_query($conn,$query);
	if($result)
	   header("Location:updated.php");


	}
	
	function display_docs()
	{
		global $conn;
		$query="select * from doctb";
		$result=mysqli_query($conn,$query);
		while($row=mysqli_fetch_array($result))
		{
			$name=$row['addname'];
			echo '<option value="'.$name.'">'.$name.'</option>';
		}
	}

 if(isset($_POST['doc_sub']))
 {
    
 	$addname=$_POST['doc'];
    $sql="insert into doctb(addname)values('$addname')";
   // echo $addname;
    $result= $conn->query($sql);
    if($result)
    {   echo $addname;
    	header("Location:docadded.php");
    }





 }



?>