<?php

$remove4 = "First            1st";
$parts = preg_split('/\s+/', $remove4);
$i=0; foreach ($parts as $value) { $i++;
    $s[$i] = $value; 
}
$i=0; foreach ($parts as $value) { $i++;
    echo $s[$i] . "<br /> ";
}




