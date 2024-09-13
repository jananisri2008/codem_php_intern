<?php
//link the database connection php in signup page
include("dbconnect.php"); 
//check the submit button
//isset()-is uesd to set the variables.
if(isset($_POST['submit'])) //if the submit btn is clicked post method will be executed
{
    //database name will be stored in the variable name
    $username=$_POST['username'];
    $email=$_POST['email'];
   // $phno=$_POST['phno'];
    $pwd=$_POST['pwd'];
   // $cpwd=$_POST['cpwd'];

    //query used to store the user data in the db.
    $sql="SELECT * FROM signup WHERE username='$username'";
    //fetch the no of rows present
    $result=mysqli_query($connect,$sql);//mysqli()-object,sql query
    //count the no of rows return in the count_user variable.
    $count_username=mysqli_num_rows($result);

    //query used to store the user data in the db.
    $sql="SELECT * FROM signup WHERE email='$email'";
    //fetch the no of rows present
    $result=mysqli_query($connect,$sql);//mysqli()-object,sql query
    //count the no of rows return in the count_user variable.
    $count_email=mysqli_num_rows($result);

    //check the user & email is not present
    if($count_username==0 & $count_email==0)
    {
        //check the pwd is same
        if($pwd==$pwd)
        {
            //hash is used to protected the pwd from hackers.
            //pwd_hash is used to create a strong pwd in one way algorithm.
            //pwd_default is used to decrypt
            $hash=password_hash($pwd,PASSWORD_DEFAULT);
            //query insert the name and password 
            $sql=" INSERT INTO signup(username, email,password)VALUES('$username','$email','$hash')";
            //pwd will be store in the database
            //$result=mysqli_query($connect,$sql);
            //
            if($result)
            {
                //redirect to other page.
                //header("Location:home.php");
            }
        } 

    }
    //username &email is present already.
    else
    {
        if($count_username>0)
        {
            //window.location.href-->error msg display in the particular page (signup page)
            echo '<script>
            window.location.href="signup.php";
            alert("Username is already present");
            </script>';
        }
        if($count_email>0)
        {
            //window.location.href-->error msg display in the particular page (signup page)
            echo '<script>
            window.location.href="signup.php";
            alert("Email is already present");
            </script>';
        }

    }
}
?>
