<?php
    require 'serverCon.php';
    $id=$_GET['user'];
    $query = "SELECT * FROM tutors where id=$id";
    $result=mysqli_query($link,$query);
    
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <?php  while($row=mysqli_fetch_array($result)){
      $subQuery = "SELECT * FROM tutors WHERE id = $id";
                    $subResult=mysqli_query($link,$subQuery);
                    $subRow= mysqli_fetch_array($subResult);
                    $arr = $subRow['class'];
                    $arrResult=explode(',',$arr);
                    $subQuery2 = "SELECT * FROM tutors WHERE id = $id";
                    $subResult2=mysqli_query($link,$subQuery);
                    $subRow2= mysqli_fetch_array($subResult);
                    $arr2 = $subRow['sub'];
                    $arrResult2=explode(',',$arr2);
      
      
      ?>
   <title><?php echo ''.$row['firstName'].'    '.$row['lastName'].' ';?></title>
 
  

<link type="text/css" rel="stylesheet" href="style.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

</head>
<body id="top">
    
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			 <?php
                        
                        echo '<p><img src="'.$row['profilePic'].'" media-simple></p>';
                ?>
                    
                    
		</div>
           
		<div id="name">
			<h1 class="quickFade delayTwo"> <?php echo ''.$row['firstName'].'    '.$row['lastName'].' ';?></h1>
			<h2 class="quickFade delayThree"><?php echo ''.$row['deptName'].'';?></h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>e: <a><?php echo ''.$row['email'].'';?></a></li>
				<li>Fb: <a href="https://<?php echo ''.$row['fbId'].'';?> " target="_blank"><?php echo ''.$row['fbId'].'';?></a></li>
				<li>m: <?php echo '0'.$row['phnNo'].'';?></li>
			</ul>
		</div>
             <div>
                 <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="profilePicUpdate.php?tutor=<?php echo $id ?>">
                <div class="form-group">
          
          <div class="col-sm-10">    
              <div class="clear"></div>
              <a href="#" style="text-decoration: underline"><label class="control-label" for="img">Choose Profile Picture</label></a>
              <input type="file" style="display: none" class="form-control" id="img" name="image" required/>
              <input type="submit" value="Change">
          </div>
        </div> 
                 </form>
            </div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
                    
                    <div>
                        <center>
                            <h1><b><i>Personal Profile</i></b></h1>
                            <a href="edit.php?user=<?php echo $id;?>">Edit Personal Profile</a>
                        </center>
                    </div>
			<article>
				<div class="sectionTitle">
					<h1>About</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo ''.$row['tInform'].'';?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		

            <section>
			<div class="sectionTitle">
				<h1>Institute</h1>
			</div>
			
			<div class="sectionContent">
                            <h3><?php echo ''.$row['instituteName'].'';?></h3>
			</div>
			<div class="clear"></div>
		</section>
            <section>
			<div class="sectionTitle">
				<h1>Dept. Name</h1>
			</div>
			
			<div class="sectionContent">
                            <h3><?php echo ''.$row['deptName'].'';?></h3>
			</div>
			<div class="clear"></div>
		</section>
		<section>
			<div class="sectionTitle">
				<h1>Session</h1>
			</div>
			
			<div class="sectionContent">
                            <h3><?php echo ''.$row['session'].'';?></h3>
			</div>
                    <div class="clear"></div><br>
		</section>

            <br>
            <br>
           
	</div>
    <div id="mainArea" class="quickFade delayFive">
		<section>
                    
                    <div>
                        <center>
                            <h1><b><i>Tution Profile</i></b></h1>
                             <a href="editTutionProfile.php?tutor=<?php echo $id;?>">Edit Tution Profile</a>

                        </center>
                    </div>
			<article>
				<div class="sectionTitle">
					<h1>Additional Info</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo ''.$subRow['addInfo'].'';?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		

            <section>
			<div class="sectionTitle">
				<h1>Interested Class</h1>
			</div>
			
			<div class="sectionContent">
                            <ul class="tags">
                    <?php foreach($arrResult as $val)
                        {
                        ?>
                        
                                <li class="tag">Class:<?php  echo "$val";?></li>
                   <?php }?>
                 </ul>
			</div>
			<div class="clear"></div>
		</section>
            <section>
			<div class="sectionTitle">
				<h1>Interested Subject</h1>
			</div>
			
			<div class="sectionContent" >
                           <ul class="tags">
                    <?php foreach($arrResult2 as $val2)
                        {
                        ?>
                        
                               <li class="tag">Subjects:<?php  echo "$val2";?></li>
                   <?php }?>
                 </ul>  
			</div>
			<div class="clear"></div>
		</section>
		

            <center><a href="index.php"><button id="back" class="btn btn-success">Back</button></a></center>
            <?php
                
                        }
                        ?>
	</div>
</div>
    
</body>
</html>