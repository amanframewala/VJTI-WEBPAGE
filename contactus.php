<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VJTI</title>
    <link rel="shortcut icon" href="logo.png">

    <style> 
.fixed-bg {
    background-image: url("home2.jpg");
    min-height: 700px;
    background-attachment: fixed;
    /*background-position: center;*/
    background-repeat: no-repeat;
    background-size: cover;
}
</style>


<!--     W3schools-->
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->


    <!-- Bootstrap -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles/main.css">




</head>

 <body>
<!--                 style="background-color:black;"-->           

             <nav class="navbar navbar-inverse navbar-fixed-top "  role="navigation" >
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">VJTI</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                  <ul class="nav navbar-nav">
                    <!-- <li class="active"><a class="navbar-brand" href="index.html">VJTI</a>
                    </li> -->
<!--                     class="active"
 -->                <li ><a href="#">About Us <span class="sr-only">(current)</span></a></li>
                    <li><a href="departments.php">Departments</a></li>
                    <li><a href="#">Facilities</a></li>


                    <!-- <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li> -->
                    
                  </ul>



                  <ul class="nav navbar-nav navbar-right">
                    <li>                  <!-- Search -->
                  <form class="navbar-form navbar-right">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                    </li>
                                        <li class="active";><a href="contactus.php">Contact Us</a></li>

                    
                  </ul>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <!-- <div class="fixed-bg"><img src="home.jpg" class="img-responsive" style="width:100%;"></div> -->
			<div class="fixed-bg"></div>
			
			
            <div class="div1" style="height:auto" style="overflow-x:auto;" align="center;" ><h1>CONTACT US</h1>
			
<table class="contactstable">
<tr>
<th>Designation</th>
<th>Name</th>
<th>Email</th>
<th>Telephone</th>
<th>Purpose for Contact</th>
</tr>
 
<?php
$servername = "localhost";
$username = "root";
$password = "ajay";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Designation, Name, Email, Telephone,Purpose_for_Contact FROM cons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
        echo "<tr>";
		echo "<td> ". $row["Designation"]. "</td>";
		echo "<td>". $row["Name"]. "</td>";
		echo "<td>". $row["Email"]. "</td>";
		echo "<td> ". $row["Telephone"]. "</td>";
		echo "<td> ". $row["Purpose_for_Contact"]. "</td>";
		echo "</tr>";}
	
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</div>


			
			</div>

                        


                         



                     <!--<div class="fixed-bg"></div>-->

            <div class="footer" style="height:100px;"><br><p>Veermata Jijabai Technological Institute © All rights reserved.
              <br><a href="#">Sitemap</a>      |     <a href="#">Location</a>      |     <a href="#">Contact Us</a>      |     <a href="#">RTI</a></p></div>





    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>