<?php
if(isset($_GET["park"])){

$servername="localhost";
$username  ="root";
$password  ="";
$db        ="session";

$con=mysqli_connect($servername,$username,$password,$db);
if($con){
    echo"connected";
}

$cn=$_GET["carno"];
$cm=$_GET["carmodel"];
$cc=$_GET["carcolor"];
$co=$_GET["carowner"];

// $sql=mysqli_query($conn,"")

}
?>