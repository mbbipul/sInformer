<?php
    require 'serverCon.php';

        $id=$_GET['editValue'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];	
        $insName = $_POST['insName'];	
        $deptName = $_POST['deptName'];	
        $session = $_POST['session'];				
        $conatctNumber = $_POST['conatctNumber'];	
        $email = $_POST['email'];	
        $fbid = $_POST['fbid'];	
        $bio = $_POST['bio'];
        
        $sql = "UPDATE tutors set  firstName='$firstName',lastName='$lastName',instituteName='$insName',deptName='$deptName',session='$session',phnNo='$conatctNumber',email='$email',fbid='$fbid',tInform='$bio' where id=$id";                  
	$save=mysqli_query($link,$sql);
	if($save)
        {
            header("location: userProfile.php?user=$id");
        }
            exit();					
	
        

?>