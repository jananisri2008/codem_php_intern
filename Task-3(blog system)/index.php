

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="posts-list w-100 p-5">
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:cornsilk;">
    Blog System
  </nav>
  
    <a href="add-new.php" class="btn btn-dark mb-3">Add New Blog</a>

    <?php
               
  ?>
            <?php
            include("config.php");
            $sqlSelect = "SELECT * FROM blogs";
            $result = mysqli_query($conn,$sqlSelect);
            while($data = mysqli_fetch_array($result)){
            ?>
                                  <div class="post bg-light p-4 mt-5">

            <p><?php echo $data["dates"]?></p>
            <p><?php echo $data["title"]?></p>
            <p><?php echo '<img src="'. $data["image"].'" style="max-width: 100px; max-height: 100px;"/>';?></p>
            <p><?php echo $data["content"]?></p>
                                  </div><br>
                                  
                <a class="btn btn-info" href="view.php?id=<?php echo $data["id"]?>">View</a>
                <a class="btn btn-info" href="views.php?id=<?php echo $data["id"]?>">Read More</a>
                
            
            <?php
            }
            ?>
           
</div>


    
</body>
</html>
