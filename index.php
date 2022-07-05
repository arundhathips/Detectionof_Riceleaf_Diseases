<?php
error_reporting(0);
?>


<html>
<head>
 <meta name="viewport" content="width=device-width" content="initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
</head>
<body>
  <style>
  .col-md-6{
	  padding:20px;
  }
  .col-md-6{
	  padding:50px;
  }
  .cc{
	  color:#fff;
	  margin-top:100px;
  }
  body {
  border: 1px solid black;
  height: 100%;
  background: url(css/paddy2.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
.div1 {
  border: 1px solid black;
  padding:20px;
  min-height:625px;
  
}
  </style>
  <div class="container-fulid" >
<center>
  
  <div class="col-md-12 div1" style='background-color:rgb(255,255,255);opacity:0.8;'>
  <br>
     <h1><center>Detection of Riceleaf Diseases </center></h1><br>
	 
     <div class="col-md-6">
	 <center>
               <form class="main_form" action="log.php" method="POST" enctype="multipart/formdata" >
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="form-control" placeholder="Username" type="email" name="email"> 
                     </div>
					 <br>
                     <div class="col-md-12"><br>
                        <input class="form-control" placeholder="Password" type="password" name="password"> 
                     </div>
					 <br>
                     <div class="col-sm-12"><br>
                        <button class="btn btn-primary" value="Login" name="login" >Sign In</button>
                     </div>
					 <div class="col-md-12">
					 <br>
						<p style="color:white;"><a href="signup.php"> <span class="yellow">Sign Up</span></a></p>
					 </div>
                  </div>
               </form>
			   </center>
            </div>
 
 
		 <?php
		 if(isset($_POST['Submit']))
		 {
			 echo"<h2>OUTPUT</h2>";

$target_path = "test/test/image.jpg";



			if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
			$python=`python test.py`;
			
			$file = file_get_contents('out.txt', true);
			echo "<h3>".$file."</h3>";
			  
			} else{
				echo "There was an error uploading the file, please try again!";
			}

		 }
?>
 
   </div>
   
   </div>
   </div>
   
</body>
</html>