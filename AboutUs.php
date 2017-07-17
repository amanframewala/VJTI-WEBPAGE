

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
    background-image: url("aboutus.jpg");
    min-height: 300px;
    background-attachment: fixed;
    /*background-position: center;*/
    background-repeat: no-repeat;
    background-size: cover;
}
</style>


    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles/main.css">


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
 -->                <li class="active";><a href="#">About Us <span class="sr-only">(current)</span></a></li>
                    <li ><a href="departments.php">Departments</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                
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
                                        <li><a href="#">Contact Us</a></li>

                    
                  </ul>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>



              <h1><br>About Us</h1>




                        <div class="fixed-bg"></div>

                        <div class="vision">

                          <h1>Vision and Values</h1><br>
                          <h2>Our Vision</h2><br>
                          <p>To establish global leadership in the field of Technology and develop competent human resources for providing service to society</p><br>
                          <h2>Mission</h2>
                          <p>To provide students with comprehensive knowledge of principles of engineering with a multi-disciplinary approach that is challenging.<br>
                            To create an intellectually stimulating environment for research, scholarship, creativity, innovation and professional activity.<br>
                            To foster relationship with other leading institutes of learning and research, 
                            alumni and industries in order to contribute to National and International development.<br></p>


                        </div>

                        <div class="fixed-bg"></div>

                        <div class="director">

                          <h1>Director's Desk</h1><br>
                              
                              <a href="Prof. Dhiren Patel.html">
                                <img src="DPatel.jpg" align>
                                <div class="caption">
                                  <p style="color:white;">Dr. Dhiren Patel</p>
                                </div>
                              </a>
                              
                          <p>VJTI Mumbai has pioneered India's Engineering and Technology education, research and training (Since 1887).
                           VJTI Mumbai is the preferred institute for talented students who want to stay one step ahead, who want to learn and grow, who want to make an impact, 
                           who want to work on interesting problems using technology for better society, stronger economy and safe environment.<br><br>
                           Let us join hands and support VJTI in its quest for excellence!!<br><br>
                           <a data-toggle="modal" href="#MessageModal" style="color:white;"><strong>Message for Student Applicants</strong></a></p><br>

                        </div>                        


                                                                 <!-- Modal -->
                                      <div id="MessageModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Message for Student Applicants</h4>
                                            </div>
                                            <div class="modal-body">
                                              <p align="left">Dear Student,<br><br>At VJTI Mumbai, we believe that knowledge and research can, and should, be used to improve lives. 
                                                Choosing a career building institution is undoubtedly one of the most significant decisions in your life. 
                                                VJTI Mumbai is highly recognized globally, and has pioneered India’s engineering education and research (since its establishment in 1887).
<br><br>We continuously strive to attain excellence and providing you<br>
<ul>
<li>An academic environment with better teaching/learning resources where all students thrive, flourish and fulfill their aspirations<br></li>
<li>A vibrant research environment that actively contributes new technologies, inventions and knowledge to industry and society<br></li>
<li>Flexibility in the curriculum, which allows students to pursue other interests beyond their chosen field of specialization<br></li>
<li>The opportunity to obtain a degree recognized worldwide as a hallmark of academic excellence <br></li>
</ul>
You are invited to VJTI to learn, create and innovate with the very best.<br><br>
With best wishes,<br>
Dr. Dhiren Patel,<br>
Director – VJTI Mumbai.</p>
                                            </div>
                                            
                                          </div>

                                        </div>
                                      </div>

                            <div class="fixed-bg"></div>


    <div class="div1" style="height:auto" style="overflow-x:auto;" align="center;" ><h1>MANAGEMENT</h1>
			
<table class="contactstable1">
<tr>
<th>Sr.No</th>
<th>Name of BOG Member</th>
<th>Affiliation</th>
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

$sql = "SELECT id, name, affiliation FROM manage";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
        echo "<tr>";
		echo "<td> ". $row["id"]. "</td>";
		echo "<td>". $row["name"]. "</td>";
		echo "<td>". $row["affiliation"]. "</td>";
		echo "</tr>";}
	
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</div>
		


                            <div class="fixed-bg"></div>
							
							
    <div class="div1" style="height:auto" style="overflow-x:auto;" align="center;" ><h1>ADMINISTRATION</h1>
			
<table class="contactstable">
<tr>
<th>Sr.No</th>
<th>Name</th>
<th>Designation</th>
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

$sql = "SELECT admin_id, name, designation FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
        echo "<tr>";
		echo "<td> ". $row["admin_id"]. "</td>";
		echo "<td>". $row["name"]. "</td>";
		echo "<td>". $row["designation"]. "</td>";
		echo "</tr>";}
	
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</div>
		


                            <div class="fixed-bg"></div>
							
							

                            <div class="DandB">
                            <div class="row">

                              <div class="col-md-6">
                                    <a href="VJTIdashboard.pdf"><img src="dashboard.jpg"  style="width:75%">
                                    <div class="caption">
                                      <p style="color:white;">Dashboard</p>
                                    </div></a>
                              </div>
                              <div class="col-md-6">
                                    <a href="VJTIbrochure.pdf"><img src="brochure.jpg"  style="width:75%">
                                    <div class="caption">
                                      <p style="color:white;">Brochure</p>
                                    </div></a>
                              </div>

                            </div>
                            </div>

                            <div class="fixed-bg"></div>

                        

            <div class="footer" style="height:100px;"><br><p>Veermata Jijabai Technological Institute © All rights reserved.
              <br><a href="#">Sitemap</a>      |     <a href="#">Location</a>      |     <a href="#">Contact Us</a>      |     <a href="#">RTI</a></p></div>









    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>