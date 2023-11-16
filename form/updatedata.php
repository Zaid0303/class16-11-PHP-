<?php 
include("config.php");

if(isset($_POST["update"])){
    $userid = $_POST["id"];
    $fname = $_POST["FName"];
    $lname = $_POST["LName"];
    $email = $_POST["Email"];
}

$update = "UPDATE `userdata` SET `fname`= '$fname',`lname`= '$lname',`email`= '$email' WHERE `id`= '$userid'";

$result = mysqli_query($userdta, $update);

if($result){
    
    echo '<script> 
    alert("data insert done")
    window.location.href = "reguser.php" 
    </script>';
}
?>