<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
      <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
<div class="posts-list w-100 p-5">

<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:cornsilk;">
View A Blog
  </nav>

        <h1><a href="index.php"></a></h1>
    
    <div class="post-list mt-5">
        <div class="container">
            <?php
                $id = $_GET['id'];
                if ($id) {
                    include("config.php");
                    $sqlSelect = "SELECT * FROM blogs WHERE id = $id";
                    $result = mysqli_query($conn,$sqlSelect);
                    while ($data = mysqli_fetch_array($result)) {
                    ?>
                       <div class="post bg-light p-4 mt-5">
                       <p><?php echo $data['dates']; ?> </p>
                        <p><?php echo $data['title']; ?></p>
                        <p><img src="./images/<?php echo $data['image']; ?>"></p>
                        <p><?php echo $data['content']; ?> </p>
                       </div>
                    <?php
                    }
                }else{
                    echo "No post found";
                }
            ?>
         </div>
    </div>
    <div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
<div class="posts-list w-100 p-5">

<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:cornsilk;">
  Comment
  </nav>

            <form action=""  method="POST"enctype="multipart/form-data"  align="center">
            <div class="form-field mb-4">
                    <input type="text" class="form-control" name="name" id="" placeholder="Enter Name:"><br>
                </div>

                <div class="form-field mb-4">
                    <input type="text" class="form-control" name="email" id="" placeholder="Enter Email:"><br>
                </div>
                             
                <div class="form-field mb-4">
                    <textarea name="content"  class="form-control" id="" cols="5" rows="5" placeholder="Enter comment:"></textarea><br>
                </div>
                
                <div class="form-field">
                    <button type="submit" class="btn btn-primary" value="Submit" name="submit">Save</button>
                    
                </div>

            </form>
        </div>
             
    
</body>
</html>