<?php 
include("config.php");

if(isset($_POST["updated"])){
    $pid =$_POST["pid"];
    $proname = $_POST["pname"];
    $prodes = $_POST["pdes"];
    $price = $_POST["price"];
    $pimage = $_FILES["image"]["name"];
    $img_tem = $_FILES["image"]["tmp_name"];
}

$update = "UPDATE `products` SET `pname`= '$proname',`pdes`= '$prodes',`price`= '$price' WHERE `pid`= '$pid'";

$result = mysqli_query($conn, $update);

if($result){
    
    echo '<script> 
    alert("data insert done") 
    </script>';
}
?>