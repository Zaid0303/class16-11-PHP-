<?php 
include("config.php");

if(isset($_GET["id"])){
    $user_id = $_GET["id"];
    // echo "$userd_id";

    $fetch_record = "SELECT * from `userdata` where `id` = '$user_id'";
    $result = mysqli_query($userdta, $fetch_record);
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

<form action="updatedata.php" method="post" class="mt-4">
    <label for="">id</label>
    <input type="hidden" name="id" class="form-control" required value="<?php echo $row ["id"]?>">
    <label for="">First Name</label>
    <input type="text" name="FName" class="form-control" required value="<?php echo $row ["fname"]?>">
    <br>
    <label for="">Last Name</label>
    <input type="text" name="LName" class="form-control" required value="<?php echo $row ["lname"]?>">
    <br>
    <label for="">Email</label>
    <input type="email" name="Email" class="form-control" required value="<?php echo $row ["email"]?>">
    <br>


    <!------------------- Button ------------------>
    <input type="submit" name="update" value="Update" class="btn btn-dark mt-5">
    <!------------------- Button ------------------>
</form>
</div>
<?php
}
}
}
}
?>

</body>
</html>