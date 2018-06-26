<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbName = 'tutor';
    $dbpass = '';
   
    $link = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(!$link){
        die('Server Connection problem');
    }
    $db = mysqli_select_db($link, $dbName);
    if(!$db){
        die('Database not found');
    }