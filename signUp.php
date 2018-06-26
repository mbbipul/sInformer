<?php
    require 'serverCon.php';
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $sql = "INSERT INTO tutors (userEmail,password)
                                    VALUES ('$email','$password');";
			$save=mysqli_query($link,$sql);
                        if($save){
                            header("location: index.php");
                        }
			exit();
    
?>
