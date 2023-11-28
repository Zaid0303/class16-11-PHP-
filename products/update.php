<?php 
include("config.php");



if(isset($_GET["pid"])){
    $pid = $_GET["pid"];
    // echo "$userd_id";

    $fetch_record = "SELECT * from `products` where `pid` = '$pid'";
    $result = mysqli_query($conn, $fetch_record);
    if($result){
        if(mysqli_num_rows($result)> 0){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
    <?php 
while($row = mysqli_fetch_array($result)){
?>
                <!------------------- form start ------------------>
                <form action="pupdate.php" method="POST" enctype="multipart/form-data" class="mt-4">
                    <!-- <label for="">id</label> -->
                    <input type="hidden" name="id" class="form-control" required
                     value="<?php echo $row ["pid"]?>">
                    <label for="">Product Name</label>
                    <input type="text" name="pname" class="form-control" required>
                    <br>
                    <label for="">Description</label>
                    <input type="text" name="pdes" class="form-control" required>
                    <br>
                    <label for="">Price</label>
                    <input type="text" name="price" class="form-control" required>
                    <br>
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" required>

                    <!------------------- Button ------------------>
                    <input type="submit" name="updated" value="Updated" class="btn btn-dark mt-4">
                    <!------------------- Button ------------------>
                </form>
                <!------------------- form end ------------------>
    </div>
    <?php 
    }
}
}
}
    ?>
</body>
</html>