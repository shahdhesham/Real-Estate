<?php

$myInput=$_POST['password'];
 
  // Validate numbers
 $myInput=filter_var($myInput,FILTER_SANITIZE_STRING);
  
  // Validate length
  if(strlen($_POST['password']) >= 6) {
	  
	   if(strpbrk($myInput, '1234567890') !== FALSE) {  
	   
	   $_POST['password']=$myInput;
echo "<font color='green'>"."Valid"."</font>"; 
  } else {
  echo "<font color='red'>"."Password must have 1 number atleast"."</font>";
  }
   
  } else {
    echo "<font color='red'>"."Password too short "."</font>";
  }
