<?php
include("config.php");
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
     <!-- navbar start -->
    <?php 
       
        include("navbar.php")
      
    ?>
      <!-- navbar end -->

    <div class="container mt-5">

        <h3>Form Handling Date: 31-oct-2023</h3>

        <!------------------- form start ------------------>

        <form action="login.php" method="post" class="mt-4">

            <label for="">Email</label>
            <input type="email" name="Email" class="form-control" required>
            <br>
            <label for="">Password</label>
            <input type="Password" name="pass" class="form-control" required>

            <!------------------- Button ------------------>
            <input type="submit" name="login" value="Login" class="btn btn-dark mt-5">
            <!------------------- Button ------------------>
        </form>
    </div>
    <!------------------- form end ------------------>

    </div>

    <?php 
    if(isset($_POST["login"])) {
        $email = mysqli_real_escape_string($userdta, $_POST['Email']);
        $pass = mysqli_real_escape_string($userdta, $_POST['pass']);

        $verify = "SELECT * FROM `userdata` where `email` = '$email'";
        $result = mysqli_query($userdta, $verify);
        if($result) {
            if(mysqli_num_rows($result) > 0){

                $row = mysqli_fetch_assoc($result);
                $db_pass = $row["password"];
                
                $passVerify = password_verify($pass, $db_pass);
                if($passVerify){
                    echo "done";
                }
            }
        }
    }
    
    ?>
</body>

</html>