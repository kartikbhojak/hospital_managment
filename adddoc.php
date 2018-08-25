<!DOCTYPE html>
<?php include('func.php') ?>

<html>
<head>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
-->


  <title>adminpanel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">


.kartik{
  background-image:url("background.jpeg");
  width:100%;
  height: 500px;
    padding:0px;
  background-size:cover;
  background-repeat: no-repeat;
}
</style>

</head>
<body>


  <div class="kartik">
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
    <li><a href="#">About US</a></li>
    <li><a href="#">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php">Logout</a></li>
        </div>
        </ul>
     
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav></div>


    <div class="row">
      
      <div class="col-md-3">
        <div class="list-group">
          <a href="adminpanel.php" class="list-group-item active" style="background-color:#3498DB;color:#ffffff;border-color:#3498DB">Appointments</a>
          <a href="patientdetails.php" class="list-group-item">Patient details</a>
          
          <a href="paymentstatus.php" class="list-group-item">Payment status</a>
          <a href="adddoc.php" class="list-group-item">Doctor Section</a>
          
          
      </div>
    
      
          
      
    </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <form class="form-group" method="post" action="func.php" style="padding-top:10px;">
            <label>Doctor's name:</label>
            <input type="text" name="doc" placeholder="enter doctor's name" class="form-control" required>
            <br>
          
            <input type="submit" value="Add Doctor" name="doc_sub" class="btn btn-primary">
          </form>
          </div>
          </div><br><br>
        </div>

      
       
      </div>
      <div class="col-md-1"></div>




  </div>


<div id="header"><marquee>Emergency Number: 044-47437500</marquee></div>


    </body>
</html>