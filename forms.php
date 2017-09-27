<!DOCTYPE html>
<html lang="en">

<head>

  <style>
    #nav{

    }

    #athleteapp{
    color: #FFFFFF;
    }

      div {
        padding: 5px;
        margins: 15px;
      }
  </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UOIT Ridgebacks - Soccer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/formValidation.min.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/req.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color: #034D73;">

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
      <div class="container topnav">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand topnav" href="index.php">UOIT Ridgebacks Soccer</a>
          </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" class="nodot">
                    <li>
                        <a href="index.php#about">About</a>
                    </li>
                    <li>
                        <a href="index.php#services">Star Ridgebacks</a>
                    </li>
                    <li>
                        <a href="index.php#contact">Team Roster</a>
                    </li>
                    <li>
                        <a href="index.php#TeamStats">Team Statistics</a>
                    </li>
                    <li>
                        <a href="forms.php">Application Form</a>
                    </li>
                    <li>
                        <a href="plots.php">Sport Plots</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->

    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>UOIT Ridgebacks Soccer</h1>
                        <h2>"Where dreams are made a reality."</h2>
                        <!--<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
<div id="athleteapp">
<br>
<h1>Athlete Application:</h1>
<br>
<a name="about"></a>



<form id="signinForm" class="form-horizontal" method="post" action="forms.php">
	<div class="form-group" style="width: 50%;">
		<label for="username" class="col-sm-2 control-label">Name:</label>
		<div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" style="width: 100%;" />
    </div>
	</div>

	<div class="form-group" style="width: 50%;">
		<label for="email" class="col-sm-2 control-label">Email:</label>
		<div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" style="width: 100%;" />
    </div>
	</div>

	<div class="form-group" style="width: 50%;">
		<label for="password" class="col-sm-2 control-label">Password:</label>
		<div class="col-sm-10">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" style="width: 100%;" />
    </div>
	</div>

	<div class="form-group" style="width: 50%;">
		<label for="year" class="col-sm-2 control-label">Year of Study:</label>
		<div class="col-sm-10">
        <select class="form-control" id="year" name="year">
			<option> </option>
			<option>1st Year</option>
  			<option>2nd Year</option>
  			<option>3rd Year</option>
  			<option>4th Year+</option>
  			<option>Masters</option>
			<option>PhD</option>
			<option>N/A</option>
		</select>
    </div>
	</div>
  
	<div class="form-group" style="width: 50%;">
		<label for="password" class="col-sm-2 control-label">Active:</label>
		<div class="col-sm-10">
		<label class="checkbox-inline" >
		  <input type="checkbox" id="checkbox" name="checkbox" value=1> Yes I am
		</label>
		<label class="checkbox-inline" >
		  <input type="checkbox" id="checkbox" name="checkbox" value=0> No I'm not
		</label>

    </div>
	</div>

	<div class="form-group" style="width: 50%;">
		<label for="password" class="col-sm-2 control-label">School</label>
		<div class="col-sm-10">
		<label class="radio-inline">
		  <input type="radio" name="radiobox" id="radiobox" value=0> UOIT
		</label>
		<label class="radio-inline">
		  <input type="radio" name="radiobox" id="radiobox" value=1> Durham College
		</label>
		<label class="radio-inline">
		  <input type="radio" name="radiobox" id="radiobox" value=2> Other
		</label>

    </div>
	</div>

	<div class="form-group" style="width: 50%;">
		<label for="paragraph" class="col-sm-2 control-label">Bio: </label>
		<div class="col-sm-10">
        <textarea class="form-control" id="paragraph" name="paragraph" placeholder="Why do you want to join the team?" style="width: 100%;" row="4"> </textarea>
    </div>
	</div>

    <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
	<div class="form-group" style="width: 50%;">
		<div class="col-sm-10" align="right">
    <input type="submit" class="btn btn-primary"/>
	</div>
	</div>
</form>
<br>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/formValidation.min.js"></script>
<script src="js/framework/bootstrap.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.min.js"></script>

<script>
$(document).ready(function() {
    $('#signinForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
					stringLength: {
						min: 6,
						message: 'THe username must be at least 6 chars'
					}
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            },
			email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required'
                    }
                }
            },
			year: {
                validators: {
                    notEmpty: {
                        message: 'The year is required'
                    }
                }
            },
			checkbox: {
                validators: {
                    notEmpty: {
                        message: 'Please make a selection'
                    }
                }
            },
			radiobox: {
                validators: {
                    notEmpty: {
                        message: 'Please make a selection'
                    }
                }
            },
			paragraph: {
                validators: {
                    notEmpty: {
                        message: 'The Paragraph is required'
                    }
                }
            }
        }
    });
});
</script>


    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>"Talent wins games but, teamwork and intelligence wins championships."</h2>
                </div>
                <div class="col-lg-6">
                    <!--<ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>-->
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <!--<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>-->

    
<?php
    $db = new mysqli('localhost', 'root', '', 'lab');

    // TODO You must process the POST data from the form and then set the variables
    // below to be inserted in the database

    // You should see sucess if you can connect
    if($db->connect_errno > 0){
        echo "ERROR";
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
    else {
        echo "SUCCESS";
    }

    // Insert sample data into the database
    $sql = $db->prepare("INSERT INTO sample(name, email, password, dropdown, checkbox, " .
                        "radio, textarea) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // These should be retrieved from POST variables
    $name = $_POST['username'];
    $email = $_POST['email'];
    $insecure_pass = $_POST['password']; // This password needs to be securely hashed
    $dropdown = $_POST['year']; // This is one of the dropdown selection options
    $checkbox = $_POST['checkbox'];  // This is a boolean value 0 or 1
    $radio = $_POST['radiobox'];   // This is an integer value
    $message = $_POST['paragraph'];

    // Securely hash the password
    $password = password_hash($insecure_pass, PASSWORD_DEFAULT);

    // Bind the parameters to the SQL query above, s is a string i is an integer
    $sql->bind_param("ssssiis", $name, $email, $password, $dropdown, $checkbox, $radio, $message);

    // Execute the query, inserting the data
    $sql->execute();

    // Close the connection
    $sql->close();
    $db->close();

?>



</body>

</html>
