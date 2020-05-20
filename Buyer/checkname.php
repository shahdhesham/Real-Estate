<?php
session_start();

$org= $_SESSION['fullname'];
$name= $_POST['name'];
$name= filter_var( $name , FILTER_SANITIZE_STRING );
          if ( str_word_count( $name )== 2 ){
	if( preg_match( "/[^a-zA-Z\s'-]/" , $name )){
	echo "<font color='red'>"."Invalid name"."</font>";
	                                            }
												
	else{
		$_POST['name']= $name;
		 echo "<font color='green'>"."Valid"."</font>";
	    }
		
	                                         }
    else{
          echo "<font color='red'>"."Must have first and last name"."</font>";
        }
