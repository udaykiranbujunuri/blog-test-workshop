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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link rel="stylesheet" href="inc/bootstrap.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="jquery-3.5.1.slim.min.js" ></script>
    </head>

    <body>
     
 <div class="d-flex flex-wrap pb-5 mt-5">
<?php
$sql = "SELECT * FROM posts order by id desc";
//$sql = "SELECT * FROM test order by id desc";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '
       <div class="card col-4 mx-2">
       <img src='.$row['image'].' class="card-img-top" alt="https://i3.ytimg.com/vi/qUlk8q-lvgA/maxresdefault.jpg">
       <div class="card-body">
           <h5 class="card-title">'.$row['heading'].'</h5>
           <p class="card-text"></p>
           <a href="https://localhost/workshop-finalpro/blog_post.php?id='.$row['id'].'" class="btn btn-primary">View post</a>       </div>
   </div>';
    }
}
?>
</div>
        
    <?php
    include 'inc/footer.php';    
    ?>
    
    </body>
  </html>