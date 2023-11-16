<?php 
include("config.php");

if(isset($_GET["id"])){
    $user_id = $_GET["id"];
}

$trash = "UPDATE `userdata` set `status` = '0' Where `id` = '$user_id'";
$result2 = mysqli_query($userdta, $trash);

if($result2){
    header("location:trashdata.php");
}
?>