
<?php
include 'inc/config.php';
include 'inc/header.php';
?>
 

 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="fontawesome.min.css">
<link rel="stylesheet" href="inc/bootstrap.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="jquery-3.5.1.slim.min.js" ></script>
   
          <link rel="stylesheet" href="blog_post.css">
          

</head>
<body>
 <?php
$sql = "SELECT * FROM posts where id =".$_GET['id'];$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '
    
   <div class="blog-container">
    <h1 class="post-heading">'.$row['heading'].'</h1>
    
    <img class="blog-img" src='.$row['image'].' alt="">
    <div class="user-info">
    <img src="user.png" class="user-image" alt="">
       <div class="user-name">Admin<div>Share our post on</div></div>
       <div class="user-upload-time">1 Day ago</div>
       <div class="social"><i class="fa fa-facebook-official" aria-hidden="true"></i>
<i class="fa fa-twitter" aria-hidden="true"></i><i class="fa fa-google" aria-hidden="true"></i><i class="fa fa-whatsapp" aria-hidden="true"></i>

</div>
    </div>
    <br><br>
    <div class="blog-content">'.$row['content'].'</div>
 
    </div>';
    }
}
    ?>
    
    
    
</body>
</html>