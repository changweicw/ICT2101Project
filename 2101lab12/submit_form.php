<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$dsn = "127.0.0.1";
$dbuser = "root";
$dbpwd = "";
$db = "2101_ytho";
$conn = mysqli_connect($dsn, $dbuser, $dbpwd, $db);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $experience = mysqli_real_escape_string($conn,$_POST['experience']);
    $comments = mysqli_real_escape_string($conn,$_POST['comments']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    
    $sql = "INSERT into feedback (ratings_exp,comments,name,email)"
            . " VALUES('$experience','$comments','$name','$email')";
    if (!mysqli_query($conn,$sql)) {
        die('Error: ' . mysqli_error($conn));
    }
    
}