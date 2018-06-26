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
 <?php  while($row=mysqli_fetch_array($result)){?>
   <title><?php echo ''.$row['firstName'].'    '.$row['lastName'].' ';?></title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <style>
      label{
          font-size: 20px;
          color: black;
          font-weight: bold;
      }
  </style>
  
  
</head>
<body>
<section class="menu cid-qBZdT3LhKQ" once="menu" id="menu1-j" data-rv-view="195">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.php">sInformer</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"> </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="addStudent.html">
                        <span class="mbri-plus mbr-iconfont mbr-iconfont-btn"></span>
                        Add Student
                    </a>
                </li>
               <!-- <li class="nav-item">
                    <a class="nav-link link text-white display-4" href=""><span class="mbri-update mbr-iconfont mbr-iconfont-btn">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href=""><span class="mbri-update mbr-iconfont mbr-iconfont-btn">Delete</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="">
                        </a>
                </li>-->
               
               </ul>
            
        </div>
    </nav>
</section>

  

    <br>
    <br>
    <div class="container">
        <center>
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="editAction.php?editValue=<?php echo $id ?>">
        <div class="form-group">
            <label class="control-label col-sm-2" for="fname">First Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fname" value="<?php echo ''.$row['firstName'].' ';?>" name="firstName">
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="lname">Last Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="text"  value="<?php echo ''.$row['lastName'].' ';?>" name="lastName">
          </div>
        </div>
        

        <div class="form-group">
            <label class="control-label col-sm-2" for="facname">Institute Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="facname"  value="<?php echo ''.$row['instituteName'].' ';?>" name="insName">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="depname">Department Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="depname"  value="<?php echo ''.$row['deptName'].' ';?>" name="deptName">
            </div>
        </div> 
        <div class="form-group">
            <label class="control-label col-sm-2" for="session">Session</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="session"  value="<?php echo ''.$row['session'].' ';?>" name="session">
            </div>
        </div> 
        <div class="form-group">
            <label class="control-label col-sm-2" for="num">Contact Number:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="num" value="<?php echo ''.$row['phnNo'].' ';?>" name="conatctNumber">
            </div>
        </div> 
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" value="<?php echo ''.$row['email'].' ';?>" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="fbid">Facebook id:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fbid" value="<?php echo ''.$row['fbId'].' ';?>" name="fbid">
        </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="det">About's</label>
            <div class="col-sm-10">          
                <input type="text" class="form-control" value="<?php echo ''.$row['tInform'].' ';?>" id="det" name="bio">
            </div>
        </div>
        <div class="form-group">        
             <div class="col-sm-offset-2 col-sm-10">
                 <input type="submit" class="btn btn-success" value="Update">
            </div>
        </div>
        </form>
        </center>
    </div>
</section>
<?php
  }?>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbri-down mbr-iconfont"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>