<?php
    require_once('connection.php')

    if(isset($_POST['signUp'] ))
    { 
        // fetch data from
       $username = $_POST['username']; 
       $email = $_POST['email'];
       $password = $_POST['password'];
       $cpass = $_POST['cpassword'];

    //    check if username exists in the database
    $sqlusername= mysqli_query($conn,"SELECT*
    FROM account WHERE username ='$username' ");
    $checkusername=mysqli_num_rows($sqlusername)

    }

?>