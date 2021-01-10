<?php
    include 'inc/header.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-3.5.1.slim.min.js" ></script>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    <h1>Thanks for contributing us...</h1>
    
</body>
</html>

<?php
include 'inc/config.php';



?>
<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
        
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            
            // Old Name Of The file 
                   
            
            
            // Check whether file exists before uploading it
            if(file_exists("images/" . $filename)){
                 $old_name = $filename ;  
                    $randno=rand(1,10000000000000);
                    // New Name For The File 
                    $new_name = $randno.'.'.$ext; 
                    if(isset($_POST['save']))
{	 
                     $heading = $_POST['heading'];
                     $sub_heading = $_POST['subheading'];
                     $page_content = $_POST['content'];
                     $sql = "INSERT INTO posts (heading,subhead,content,image)
                     VALUES ('$heading','$sub_heading','$page_content','images/$new_name')";
                     if (mysqli_query($link, $sql)) {
                       
                     } 
                     mysqli_close($link);
}
                
                     move_uploaded_file($_FILES["photo"]["tmp_name"], "images/" . $new_name);
                ;
                    // Checking If File Already Exists 
                   
            } else{
                
               
                    

                
                move_uploaded_file($_FILES["photo"]["tmp_name"], "images/" . $new_name);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>



