<?php 
include("config.php");

if(isset($_POST["addproduct"])){
    $proname = $_POST["pname"];
    $prodes = $_POST["pdes"];
    $price = $_POST["price"];
    $pimage = $_FILES["image"]["name"];
    $img_tem = $_FILES["image"]["tmp_name"];

    if(!empty($proname) AND !empty($prodes) AND !empty($price) AND !empty($pimage)){
        $insert = "INSERT INTO `products`(`pid`, `pname`, `pdes`, `price`, `pimage`, `action`, `datetime`) VALUES (NULL,'$proname','$prodes','$price','$pimage','1',current_time())";
        $result = mysqli_query($conn, $insert);
        move_uploaded_file($img_tem, 'upload/' . $pimage);
        if($result){
            header("location:index.php");
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Congrates</strong> Product Add in DataBase
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
}
?>