<?php
include 'inc/header.php';
?>
 
<!DOCTYPE html>
<html>
 <head>
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
<link rel="stylesheet" href="inc/bootstrap.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="jquery-3.5.1.slim.min.js" ></script>
	  <style>
	  form{
		border:1px solid black;
		margin:1% 1% 3% 3%;
		padding:1% 1% 2% 2%;
	  }
	  body{
		overflow:scroll;
	  }
	  @media only screen and (max-width: 600px){
		form{
		border:1px solid black;
		margin:2% 2% 4% 4%;
		padding:1% 2% 2% 2%;
	  }
	  body{
		overflow:scroll;
	  }
	  }
	  
	  </style>
 </head>
  <body style="">
	 <form action="test.php" method="post" enctype="multipart/form-data" style="">
	 <h1 style="text-decoration:underline;padding-bottom:2%">Post something?</h1>
	 Title for your post?:
		<div class="input-group input-group-lg">
  			
 			 <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" type="text" name="heading" required>
			</div>
			Subtitle for your post?:
			<div class="input-group input-group-lg">
  			
 			 <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" type="text" name="subheading" required>
			</div>
		
		
			<br>
			Upload any image:
	<div class="input-group mb-3">
 		 <input type="file" class="form-control" name="photo" id="fileSelect" id="inputGroupFile02">
	</div>

	<p>(OR)</p>
 paste Your image link here:<br>


<div class="input-group mb-3">

  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" type="text" name="image">
</div>
		

		
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
		

		<div class="form-floating">
  <textarea class="form-control" type="text" name="content" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Content of blog post:</label>
</div>
		<br>
		<button  class="btn btn-primary btn-lg" type="submit" name="save" >Submit</button>
		
	</form>
	<?php
    include 'inc/footer.php';    
    ?>
  </body>
</html>
