
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<title>login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<style type="text/css">
#ab1:hover{
	cursor:pointer;
}
.container{
	width:350px;
	margin-left:150px;


	margin-top:150px;
}



</style>
</head>

<body style="background:url('backgroundimg.jpeg') no-repeat; background-size:cover; height:75%">
	<div class="container">
		<div class="card">
			<img src="cardback.jpeg" class="img-card-top" style="height:150px">
			
			
			<div class="card-body" style="height:250px">

		<form class="form-group" action="func.php" method="post">
			<label>Username:</label><br>
			<input type="text" name="username" class="form-control" placeholder="enter username"><br>

			<label>Password:</label><br>
			<input type="password" name="password" class="form-control" placeholder="enter password"><br>
            
			<input type="submit" name="login_submit" id="b1" class="btn btn-primary">

		</form>
	</div>
	</div>
</div>
 

</body>
</html>