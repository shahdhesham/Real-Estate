<?php
session_start();

$title= $_POST['title'];
$title= filter_var( $title , FILTER_SANITIZE_STRING );
          if ( str_word_count( $title )== 1 ){
	if( preg_match( "/[^a-zA-Z\s'-]/" , $title )){
	echo "<font color='red'>"."Invalid name"."</font>";
	                                            }
												
	else{
		$_POST['title']= $title;
		 echo "<font color='green'>"."Valid"."</font>";
	    }
		
	                                         }
    else{
          echo "<font color='red'>"."Must have title"."</font>";
        }


?>