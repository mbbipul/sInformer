<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "tutor");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term = mysqli_real_escape_string($link, $_REQUEST['term']);
 
if(isset($term)){

    $parts = preg_split('/\s+/', $term);
            $i=0; foreach ($parts as $value) { $i++;
                $search[$i] = $value; 
    }
    $i=0; foreach ($parts as $value) { $i++;
                $search[$i] = $value; 
    }
    // Attempt select query execution
    if($term!=0){
         
        $sql = "SELECT * FROM tutors WHERE  "
                . "class LIKE '%," . $term . ",%' "
               . "OR class LIKE '%" . $term . ",%,' "
               . " OR class LIKE '%" . $term . "%'";
   
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo '<div id="chatlist" class="mousescroll">';
            while($row = mysqli_fetch_array($result)){
               
                ?>

                <figure class="snip1336">
                    <figcaption>
                        <img src="<?php echo $row['profilePic'];?>" alt="profile-sample4" class="profile" />
                        <br><br><h2 style="display: block"><?php echo $row['firstName'];echo ' ';echo $row['lastName'];?><br><span style="color: blue">cse</span></h2>
                        <br><br><br><br><br><p><?php echo $row['addInfo'];?> </p>
                      <a href="#" class="follow">+880<?php echo $row['phnNo'];?></a>
                      <a href="userProfile.php?user=<?php echo $row['id']?>" class="info">More Info</a>
                    </figcaption>
                </figure>

<?php
            }
            // Close result set
            echo '                </div>
';
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }
    } 
     }
    else{
            echo "<p>No matches found</p>";
    }
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// close connection
mysqli_close($link);
?>