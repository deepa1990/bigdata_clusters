<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hadoop BigData clusters</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>
	
  <body id="page-top">
 <?php
   include 'config.php';
    $conn = mysqli_connect($servername, $username, $password, $database);
 if(!$conn){
die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['add'])){
	$sql1 = "INSERT INTO register(FirstName,Email,StudentPassword,Teams)VALUES('".$_POST["un"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["teams"]."')";
	$retval1 = mysqli_query($conn,$sql1);

if(!$retval1){
	echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
   
} else{
     echo "Records inserted successfully.";
}
 }
mysqli_close($conn);

?>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">BIGDATA CLUSTER PROJECT</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
  <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Mylogin.php">Login</a>
            </li>
			</ul>
  </div>
	
      </div>
    </nav>
  
	
	 <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
		<form  action="SignUp.php" method="post" class="form-horizontal">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Please SignUp and Login</h2>
                    <hr>
                </div>
            </div>
			<div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="un">Username</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-text"></i></div>
                            <input type="text" name="un" class="form-control" id="un"
                                   placeholder="username" required autofocus>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">E-Mail Address</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="email" class="form-control" id="email"
                                   placeholder="you@example.com" required autofocus>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Password" required>
                        </div>
                    </div>
                </div>
				 <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        <!-- Put password error message here -->    
                        </span>
                    </div>
                </div>
				</div>
				<div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <select size="4" id="teams" name="teams">
							<option value="team1">others</option>
							<option value="team1">Team1</option>
							<option value="team2">Team2</option>
							<option value="team3">Team3</option>
							<option value="team4">Team4</option>
							<option value="team5">Team5</option>
							<option value="team6">Team6</option>
							<option value="team7">Team7</option>
							<option value="team8">Team8</option>
							<option value="team9">Team9</option>
							</select>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" style="padding-top: .35rem">
                    <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                        <label class="form-check-label">
                            <input class="form-check-input" name="remember" type="checkbox" >
                            <span style="padding-bottom: .15rem">Remember me</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success" id="add" name="add"><i class="fa fa-sign-in"></i> SignUp</button>
                </div>
            </div>
        </form>
		</div>
		</div>
      </div>
    </header>

        <script>
function relocate_home()
{
     location.href = "SignUp.php";
} 
</script>
<?php
	Session_destroy();

	?>
	</body>
	</html>