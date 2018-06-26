<?php
    require 'serverCon.php';
    $id=$_GET['tutor'];
    $class = implode(',', $_POST['check_list_class']);
    $sub = implode(',', $_POST['check_list_sub']);
    $info = $_POST['additionalInfo'];
    $query = "UPDATE tutors SET class='$class',sub='$sub',addInfo='$info' WHERE id=$id";
    $result=mysqli_query($link,$query);
    if($result){
        header('Location: userProfile.php?user='.$id);
    }
    else {
        echo "<p>Something going wrong ,Please try again</p><br><a href='editTutionProfileAction.php?tutor=$id'>Let\'s go</a>";
   }
?>