<?php
if(isset($_GET["submit"])){
    // echo "submitted successfully";

$servername="localhost";
$username  ="root";
$password  ="";
$db        ="session";

$conn=mysqli_connect($servername,$username,$password,$db);
}

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

// echo"connected successfully";
$fn=$_GET["firstname"];
$ln=$_GET["lastname"];
$sql = mysqli_query($conn,"INSERT INTO tbl_user (firstname,lastname) values ('$fn','$ln')");

if($sql){
    echo"ADMIN:".$fn.$ln;
}


?>
<html>
    <head>
        <body>
            <form method="get" action="3rd.phpz">
            <center><div><h1>CAR PARKING</h1></div></center><br><br>
            <center>
                <div>
                    <label for="" name="carno">CAR NO   :</label>
                    <input type="text"><br><br>
                    <label for="" name="carmodel">CAR MODEL:</label>
                    <input type="text"><br><br>
                    <label for="" name="carcolor">CAR COLOR:</label>
                    <input type="text"><br><br>
                    <label for="" name="carowner">CAR OWNER:</label>
                    <input type="text"><br><br>

                    <input type="submit" name="park" value="PARK THE CAR">

                </div>
            </center>
            </form>
        </body>
    </head>
</html>