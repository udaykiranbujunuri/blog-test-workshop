
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
<link rel="stylesheet" href="inc/bootstrap.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="jquery-3.5.1.slim.min.js" ></script>
      <style>
      .carousel-inner img{
        margin-top:0px;
        height:750px;
      }

      


      </style>


    </head>

    <body>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://user-images.githubusercontent.com/64728986/104121084-c65f4e80-5361-11eb-947e-a50aecb9f66a.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://user-images.githubusercontent.com/64728986/104121084-c65f4e80-5361-11eb-947e-a50aecb9f66a.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://user-images.githubusercontent.com/64728986/104121084-c65f4e80-5361-11eb-947e-a50aecb9f66a.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

    
     
 <div class="d-flex flex-wrap pb-5 mt-5">
<?php
$sql = "SELECT * FROM posts order by id desc LIMIT 4";
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
           <a href="https://localhost/workshop-finalpro/blog.php?id='.$row['id'].'" class="btn btn-primary">Go somewhere</a>       </div>
   </div>';
    }
}
?>
</div>



    </body>
  </html>
  <?php
    include 'inc/footer.php';    
    ?>
