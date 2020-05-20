<?php
session_start();

$city= $_POST['city'];
$city= filter_var( $city , FILTER_SANITIZE_STRING );
          if ( str_word_count( $city )== 1 ){
	if( preg_match( "/[^a-zA-Z\s'-]/" , $city )){
	echo "<font color='red'>"."Invalid name"."</font>";
	                                            }
												
	else{
		 echo "<font color='green'>"."Valid"."</font>";
	    }
		
	                                         }
    else{
          echo "<font color='red'>"."Must have City"."</font>";
        }


?>