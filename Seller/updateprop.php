<?php 

include "editprop.php";
include "../conn.php";
if (isset ($_POST ['update'] ))
{
	if (isset($_POST['radio']) == "sale") {
		$type = "Sale";
	} else {
		$type = "Rent";
	}
    
    $id = $_POST['id'] ;
    $title = $_POST['title'] ;
    $price = $_POST['price'] ;
    $city = $_POST['city'];
    $area = $_POST['area'];
    $propertyType=$type;
    $noOfRooms=$_POST['noOfRooms'];
    $noOfBathrooms= $_POST['noOfBathrooms'] ;
    $picture= $_POST['picture'] ;
   
   


$sql = "UPDATE property SET
   title = '".$title."',
    price= '".$price."',
    area = '".$area."',
    propertyType='".$propertyType."',
    noOfRooms='".$noOfRooms."',
    picture='".$picture."',
    city='".$city."',
    noOfBathrooms= '".$noOfBathrooms."' WHERE ID = '".$id."' ";


    $result = mysqli_query( $conn , $sql );	


  
if($result)	
		{
            echo '<script>window.location.href= "../seller/myprop.php";</script>';
			
		}
else
    {
		
    echo "<font color='red'>"."Connection Error"."</font>";
    echo $sql;
	}
}
