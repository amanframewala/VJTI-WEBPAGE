

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VJTI</title>
    <link rel="shortcut icon" href="logo.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style> 
.fixed-bg {
    background-image: url("departments.jpg");
    min-height: 300px;
    background-attachment: fixed;
    /*background-position: center;*/
    background-repeat: no-repeat;
    background-size: cover;
}
</style>


    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh2u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles/main2.css">


</head>

<body>

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
<!--                     class="active"
 -->                <li ><a href="#">About Us <span class="sr-only">(current)</span></a></li>
                    <li class="active";><a href="#">Departments</a></li>
                    <li><a href="#">Facilities</a></li>
                
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
                                        <li><a href="contactus.php">Contact Us</a></li>

                    
                  </ul>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>


				<br>
				<br>
              <h1>DEPARTMENTS</h1>




                                      <div class="fixed-bg"></div>




            <!-- Departments Table -->

<div class="departmentstable">


                    <!-- Row1 -->

                 <div class="row">
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#1" role="button" data-toggle="modal">
	  <!-- Modal -->
  <div class="modal fade" id="1" role="dialog" >
    <div class="modal-dialog modal-lg">
<?php    
$servername = "localhost";
$username = "root";
$password = "ajay";
$dbname = "college";
$id=1;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
$result = $conn->query($sql);
?>


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button><h2 class="modal-title"><?php 
		  while($row = $result->fetch_assoc())
		  echo "".$row["iddivision"]."";?>
	  </h2>
        </div>
        <div class="modal-body">
          <p>
<?php
		$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
		$result = $conn->query($sql);  
		if ($result->num_rows > 0) {
		//output data of each row
        $row = $result->fetch_assoc() ;
        echo "<p>". $row["divisiondel"]. "</p><br>";
} else {
    echo "0 results";
}
		  ?></p>
        </div>
       </div>
      
    </div>
  </div> 
        <img src="departmentpics/civil.jpg" style="width:50px height: 100px">
        <div class="caption">
          <p>Civil & Environmental</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#2" role="button" data-toggle="modal">
	  <!-- Modal -->
  <div class="modal fade" id="2" role="dialog" >
    <div class="modal-dialog modal-lg">
<?php    
$servername = "localhost";
$username = "root";
$password = "ajay";
$dbname = "college";
$id=2;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
$result = $conn->query($sql);
?>


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h2 class="modal-title"><?php 
		  while($row = $result->fetch_assoc())
		  echo "".$row["iddivision"]."";?>
	  </h2>
        </div>
        <div class="modal-body">
          <p>
<?php
		$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
		$result = $conn->query($sql);  
		if ($result->num_rows > 0) {
		//output data of each row
        $row = $result->fetch_assoc() ;
        echo "". $row["divisiondel"]. "<br>";
} else {
    echo "0 results";
}
		  ?></p>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div> 
        <img src="departmentpics/structural.jpg" style="width:50px height: 100px">
        <div class="caption">
          <p>Structural Engineering</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
     
<a href="#3" role="button" data-toggle="modal">
	  <!-- Modal -->
  <div class="modal fade" id="3" role="dialog" >
  <div class="modal-dialog modal-lg">

  <?php 
$servername = "localhost";
$username = "root";
$password = "ajay";
$dbname = "college";
$id=3;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
$result = $conn->query($sql);
?>


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h2 class="modal-title"><?php 
		  while($row = $result->fetch_assoc())
		  echo "".$row["iddivision"]."";?>
	  </h2>
        </div>
        <div class="modal-body">
          <p>
<?php
		$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
		$result = $conn->query($sql);  
		if ($result->num_rows > 0) {
		//output data of each row
        $row = $result->fetch_assoc() ;
        echo "<p>". $row["divisiondel"]. "</p><br>";
} else {
    echo "0 results";
}
		  ?></p>
        </div>
       </div>
      
    </div>
  </div> 
        <img src="departmentpics/computer.jpg" style="width:50px height: 100px">
        <div class="caption">
          <p>Computer Technology</p>
        </div>
      </a>
    </div>
  </div>

   <div class="col-md-3">
    <div class="thumbnail">
      <a href="#4" role="button" data-toggle="modal">
	  <!-- Modal -->
  <div class="modal fade" id="4" role="dialog" >
  <div class="modal-dialog modal-lg">

  <?php 
$servername = "localhost";
$username = "root";
$password = "ajay";
$dbname = "college";
$id=4;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
$result = $conn->query($sql);
?>


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h2 class="modal-title"><?php 
		  while($row = $result->fetch_assoc())
		  echo "".$row["iddivision"]."";?>
	  </h2>
        </div>
        <div class="modal-body">
          <p>
<?php
		$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
		$result = $conn->query($sql);  
		if ($result->num_rows > 0) {
		//output data of each row
        $row = $result->fetch_assoc() ;
        echo "<p>". $row["divisiondel"]. "</p><br>";
} else {
    echo "0 results";
}
		  ?></p>
        </div>
       </div>
      
    </div>
  </div> 

        <img src="departmentpics/electrical.jpg" style="width:50px height: 100px">
        <div class="caption">
          <p>Electrical Engineering</p>
        </div>
      </a>
    </div>
  </div>


</div>

                    <!-- Row2 -->

                 <div class="row">
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#5" role="button" data-toggle="modal">
	  <!-- Modal -->
  <div class="modal fade" id="5" role="dialog" >
  <div class="modal-dialog modal-lg">

  <?php 
$servername = "localhost";
$username = "root";
$password = "ajay";
$dbname = "college";
$id=5;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
$result = $conn->query($sql);
?>


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h2 class="modal-title"><?php 
		  while($row = $result->fetch_assoc())
		  echo "".$row["iddivision"]."";?>
	  </h2>
        </div>
        <div class="modal-body">
          <p>
<?php
		$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
		$result = $conn->query($sql);  
		if ($result->num_rows > 0) {
		//output data of each row
        $row = $result->fetch_assoc() ;
        echo "<p>". $row["divisiondel"]. "</p><br>";
} else {
    echo "0 results";
}
		  ?></p>
        </div>
       </div>
      
    </div>
  </div> 

        <img src="departmentpics/mechanical.jpg" style="width:50px height: 100px">
        <div class="caption">
          <p>Mechanical Engineering</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#6" role="button" data-toggle="modal">
	  <!-- Modal -->
  <div class="modal fade" id="6" role="dialog" >
  <div class="modal-dialog modal-lg">

  <?php 
$servername = "localhost";
$username = "root";
$password = "ajay";
$dbname = "college";
$id=6;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
$result = $conn->query($sql);
?>


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h2 class="modal-title"><?php 
		  while($row = $result->fetch_assoc())
		  echo "".$row["iddivision"]."";?>
	  </h2>
        </div>
        <div class="modal-body">
          <p>
<?php
		$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
		$result = $conn->query($sql);  
		if ($result->num_rows > 0) {
		//output data of each row
        $row = $result->fetch_assoc() ;
        echo "<p>". $row["divisiondel"]. "</p><br>";
} else {
    echo "0 results";
}
		  ?></p>
        </div>
       </div>
      
    </div>
  </div> 

        <img src="departmentpics/production.jpg" style="width:50px height: 100px">
        <div class="caption">
          <p>Production Engineering</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#7" role="button" data-toggle="modal">
	  <!-- Modal -->
  <div class="modal fade" id="7" role="dialog" >
  <div class="modal-dialog modal-lg">

  <?php 
$servername = "localhost";
$username = "root";
$password = "ajay";
$dbname = "college";
$id=7;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
$result = $conn->query($sql);
?>


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h2 class="modal-title"><?php 
		  while($row = $result->fetch_assoc())
		  echo "".$row["iddivision"]."";?>
	  </h2>
        </div>
        <div class="modal-body">
          <p>
<?php
		$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
		$result = $conn->query($sql);  
		if ($result->num_rows > 0) {
		//output data of each row
        $row = $result->fetch_assoc() ;
        echo "<p>". $row["divisiondel"]. "</p><br>";
} else {
    echo "0 results";
}
		  ?></p>
        </div>
       </div>
      
    </div>
  </div> 

        <img src="departmentpics/textile.jpg" style="width:50px height: 100px">
        <div class="caption">
          <p>Textile Manufacturing</p>
        </div>
      </a>
    </div>
  </div>

 <div class="col-md-3">
    <div class="thumbnail">
      <a href="#8" role="button" data-toggle="modal">
	  <!-- Modal -->
  <div class="modal fade" id="8" role="dialog" >
  <div class="modal-dialog modal-lg">

  <?php 
$servername = "localhost";
$username = "root";
$password = "ajay";
$dbname = "college";
$id=8;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
$result = $conn->query($sql);
?>


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h2 class="modal-title"><?php 
		  while($row = $result->fetch_assoc())
		  echo "".$row["iddivision"]."";?>
	  </h2>
        </div>
        <div class="modal-body">
          <p>
<?php
		$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
		$result = $conn->query($sql);  
		if ($result->num_rows > 0) {
		//output data of each row
        $row = $result->fetch_assoc() ;
        echo "<p>". $row["divisiondel"]. "</p><br>";
} else {
    echo "0 results";
}
		  ?></p>
        </div>
       </div>
      
    </div>
  </div> 

        <img src="departmentpics/chemical.jpg" style="width:50px height: 100px">
        <div class="caption">
          <p>Technical & Applied Chemistry</p>
        </div>
      </a>
    </div>
  </div>


</div>


                    <!-- Row3 -->

                 <div class="row">
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#9" role="button" data-toggle="modal">
	  <!-- Modal -->
  <div class="modal fade" id="9" role="dialog" >
  <div class="modal-dialog modal-lg">

  <?php 
$servername = "localhost";
$username = "root";
$password = "ajay";
$dbname = "college";
$id=9;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
$result = $conn->query($sql);
?>


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h2 class="modal-title"><?php 
		  while($row = $result->fetch_assoc())
		  echo "".$row["iddivision"]."";?>
	  </h2>
        </div>
        <div class="modal-body">
          <p>
<?php
		$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
		$result = $conn->query($sql);  
		if ($result->num_rows > 0) {
		//output data of each row
        $row = $result->fetch_assoc() ;
        echo "<p>". $row["divisiondel"]. "</p><br>";
} else {
    echo "0 results";
}
		  ?></p>
        </div>
       </div>
      
    </div>
  </div> 

        <img src="departmentpics/mathematics.jpg" style="width:50px height: 100px">
        <div class="caption">
          <p>Mathematics</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#10" role="button" data-toggle="modal">
	  <!-- Modal -->
  <div class="modal fade" id="10" role="dialog" >
  <div class="modal-dialog modal-lg">

  <?php 
$servername = "localhost";
$username = "root";
$password = "ajay";
$dbname = "college";
$id=10;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
$result = $conn->query($sql);
?>


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h2 class="modal-title"><?php 
		  while($row = $result->fetch_assoc())
		  echo "".$row["iddivision"]."";?>
	  </h2>
        </div>
        <div class="modal-body">
          <p>
<?php
		$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
		$result = $conn->query($sql);  
		if ($result->num_rows > 0) {
		//output data of each row
        $row = $result->fetch_assoc() ;
        echo "<p>". $row["divisiondel"]. "</p><br>";
} else {
    echo "0 results";
}
		  ?></p>
        </div>
       </div>
      
    </div>
  </div> 

        <img src="departmentpics/physics.jpg" style="width:50px height: 100px">
        <div class="caption">
          <p>Physics</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#11" role="button" data-toggle="modal">
	  <!-- Modal -->
  <div class="modal fade" id="11" role="dialog" >
  <div class="modal-dialog modal-lg">

  <?php 
$servername = "localhost";
$username = "root";
$password = "ajay";
$dbname = "college";
$id=11;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
$result = $conn->query($sql);
?>


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h2 class="modal-title"><?php 
		  while($row = $result->fetch_assoc())
		  echo "".$row["iddivision"]."";?>
	  </h2>
        </div>
        <div class="modal-body">
          <p>
<?php
		$sql = "SELECT iddivision,divisiondel FROM division
		WHERE id='$id'";
		$result = $conn->query($sql);  
		if ($result->num_rows > 0) {
		//output data of each row
        $row = $result->fetch_assoc() ;
        echo "<p>". $row["divisiondel"]. "</p><br>";
} else {
    echo "0 results";
}
		  ?></p>
        </div>
       </div>
      
    </div>
  </div> 

        <img src="departmentpics/humanities.jpg" style="width:50px height: 100px">
        <div class="caption">
          <p>Humanities & Management</p>
        </div>
      </a>
    </div>
  </div>


</div>
</div>


                        <div class="fixed-bg"></div>


                      <!--  <div class="teachers">


                        <table width="600" border="1" cellpadding="1" cellspacing"1">

                          <tr>
                            <th>SrNo</th>
                            <th>Name</th>
                            <th>Salary</th>
                          </tr>









                        </div>
-->
                        <div class="fixed-bg"></div>



            <div class="footer" style="height:100px;"><br><p>Veermata Jijabai Technological Institute © All rights reserved.
              <br><a href="#">Sitemap</a>      |     <a href="#">Location</a>      |     <a href="#">Contact Us</a>      |     <a href="#">RTI</a></p></div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>