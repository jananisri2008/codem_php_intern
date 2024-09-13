<?php
//link the database connection php in signup page
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$servername="localhost";
$username="root";
$password="";
$databasename="task1";
//connect the database in php code
$connect=new mysqli($servername,$username,$password,$databasename);
//check the connection of database
        if($connect->connect_error)//doesn't connect properly in database if(condition used)
        {
                echo("connection failed".$connect->connect_error);//error msg
        }
        else
        {
                $username=$_POST['username'];
                $email=$_POST['email'];
                $phno=$_POST['phno'];
                $pwd=$_POST['pwd'];
     
                $sql="INSERT INTO signup(username,email,phno,pwd)VALUES ('$username','$email','$phno','$pwd')";
                //$result=$connect->query($sql);
                $result=mysqli_query($connect,$sql);
     // if($connect->query($sql)===TRUE)
        if($result)
        {
       //  echo "New record created successfully";
       header("Location:signup.php?msg=New record created successfully");
        } 
        else
        {
         echo "Error:",$connect->error;

        }
        } 
        $connect->close();
} 
?>
<!---html code start-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up page</title>
    <!--bootstrap font style link--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--icons link using fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--css style for signup form link-->
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <!---div with id name form--->
  <div id="form">
    <!---heading for signup form--->
    <h1 id="heading">Registration Form</h1>

    <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
    <!--signup form created , connect to server , click submit btn action will be go to sign in page --->
    <form name="form" method="POST">
        <!--username,email,phone no,pwd,cpwd are given in textbox with required* option-->
                <!--user icon--> 
                <i class="fa-solid fa-user"></i>
        <input type="text" id="username" name="username" placeholder="Enter UserName" required><br><br>
                <!--email icon-->
                <i class="fa-solid fa-envelope"></i>
        <input type="email" id="email" name="email" placeholder="Enter Email" required><br><br>
                <!--phone icon-->
                <i class="fa-solid fa-phone"></i>
        <input type="text" id="phno" name="phno" placeholder="Enter Phone Number"><br><br>
                <!--password icon-->
                <i class="fa-solid fa-lock"></i>
        <input type="password" id="pwd" name="pwd" placeholder="Enter Password" required><br><br>
                <!--password icon-->
                <i class="fa-solid fa-lock"></i>
        <input type="password" id="cpwd" name="cpwd" placeholder="Enter ConfirmPassword" required><br><br>
        <!--submit button-->
        <input type="submit" id="sbtn" value="SignUp" name="submit"><br><br>
        <input type="reset" id="cbtn" value="Cancel" name="cancel">        
    </form>
  </div> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>