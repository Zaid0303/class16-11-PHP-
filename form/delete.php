<?php 
include("config.php");

if(isset($_GET["id"])){
    $user_id = $_GET["id"];
}

$delete = "DELETE from `userdata` Where `id` = '$user_id'";
$query = mysqli_query($userdta , $delete);
if($query){
        
    echo '<script> 
    alert("data Delete done")
    window.location.href = "reguser.php" 
    </script>';
}
?>