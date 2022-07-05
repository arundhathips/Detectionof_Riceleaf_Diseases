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
  background: url(css/paddy3.jpg);
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
     <h1><center>Upload Leaf Image </center></h1><br>
     <form action="" method="POST" enctype="multipart/form-data">
     <div id="t1">
     Image : <input type="file" name="uploadedfile"  required id="ip1" accept="image/*" class='form-control'><br><br>
 
     </div>
     <div class="text-center"><input type="Submit" name="Submit" value="Submit" class='btn btn-primary' id="p1"></div><br>
 
 
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