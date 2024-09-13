<?php
//link the database connection php in signup page
include "dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--icons link using fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--css style for signup form link-->
    <link rel="stylesheet" href="style.css">
    <style>
      body{
        overflow-y: scroll; /* Show vertical scrollbar */
  overflow-x: scroll; /* Show horizontal scrollbar */

      }
      </style>
  </head>
<body>
    <h1 align="center">User Authentication System</h1>
    <!---<a href="logout.php" class="btn btn-danger">Logout</a>-->
    <table class="table table-hover text-center">
      <thead class="table-light">
        <tr>
          <th scope="col">S.No </th>  
          <th scope="col">Name </th>
          <th scope="col">Email Id </th>
          <th scope="col">Phone No </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `signup`";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["username"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["phno"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <!--<a href="logout.php" id="sbtn" name="submit">Logout<br><br>
    <button type="logout.php" class="btn btn-default">Logout</button>-->
    <a href="logout.php" class="btn btn-info" role="button">Logout</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>