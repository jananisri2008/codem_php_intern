<?php
include "config.php";

if (isset($_POST["submit"])) {
    $dates = $_POST['dates'];
   $title = $_POST['title'];
   $image = $_FILES["uploadfile"]["name"];
   $tempname=$_FILES["uploadfile"]["tmp_name"];
   $folder = "./images/" . $image;
   $content = $_POST['content'];

   $sql = "INSERT INTO `blogs`(`id`,`dates`, `title`, `image`, `content`) VALUES (NULL,'$dates','$title','$image','$content')";
   
   $result = mysqli_query($conn, $sql);

   if ($result) {
      //header("Location: index.php?msg=New blog created successfully");
   } else {
     // echo "Failed: " . mysqli_error($conn);
   }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog System</title>
   <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
<div class="posts-list w-100 p-5">

<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:cornsilk;">
  Add New Blog 
  </nav>

            <form action=""  method="POST"enctype="multipart/form-data"  align="center">
            <div class="form-field mb-4">
                    <input type="dates" class="form-control" name="dates" id="" placeholder="Enter Date:"><br>
                </div>

                <div class="form-field mb-4">
                    <input type="text" class="form-control" name="title" id="" placeholder="Enter Title:"><br>
                </div>
                
                
                <div class="form-field mb-4">
                    <input type="file" class="form-control" name="image" id=""><br>
                </div>
                               
                <div class="form-field mb-4">
                    <textarea name="content"  class="form-control" id="" cols="5" rows="5" placeholder="Enter content:"></textarea><br>
                </div>
                
                <div class="form-field">
                    <button type="submit" class="btn btn-primary" value="Submit" name="submit">Save</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>

</body>
</html>       