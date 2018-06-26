<?php
    require 'serverCon.php';


        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];	
        $insName = $_POST['insName'];	
        $deptName = $_POST['deptName'];	
        $session = $_POST['session'];				
        $conatctNumber = $_POST['conatctNumber'];	
        $email = $_POST['email'];	
        $fbid = $_POST['fbid'];	
        $bio = $_POST['bio'];
        
        
        if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}
        else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
			
			$location="images/" . $_FILES["image"]["name"];
	
			$sql = "INSERT INTO tutors (firstName,lastName,instituteName,profilePic,phnNo,tInform,deptName,session,email,fbid)
                                    VALUES ('$firstName','$lastName','$insName','$location','$conatctNumber','$bio','$deptName','$session','$email','$fbid');";
			$save=mysqli_query($link,$sql);
			if($save){
                            echo 'you have been succesfully added your personal Information\n';
                            echo 'Now click below to add your Tutor profile\n';
                            $tutorId = mysqli_insert_id($link);
                            echo "<a href='tutorsprofile.php?tutor=$tutorId'>Let\'s go</a>";
                        }					
	}
        

?>
