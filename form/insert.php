<?php
// print_r($_POST);

// foreach ($_POST as $key => $value) {
//     echo  "$key = $value <br>";
// }
include('config.php');

if (isset($_POST['register'])) {
    $fname = mysqli_real_escape_string($userdta, $_POST['FName']);
    $lname = mysqli_real_escape_string($userdta, $_POST['LName']);
    $email = mysqli_real_escape_string($userdta, $_POST['Email']);
    $pass = mysqli_real_escape_string($userdta, $_POST['pass']);

    // blowfish aligorithm
    $enc_pass = password_hash($pass, PASSWORD_BCRYPT);

    $check_email = "SELECT `email` from `userdata` where email = '$email'";
    $res = mysqli_query($userdta, $check_email);

    if ($res) {
        if (mysqli_num_rows($res) > 0) {
        echo '<script> 
        alert("Email already exist")
        window.location.href = "index.php" 
        </script>';
        }else{
            $insert = "INSERT into `userdata` (`fname`, `lname`, `email`, `password`) 
            VALUES ('$fname', '$lname', '$email', '$enc_pass')";
        
            $result = mysqli_query($userdta, $insert);
            if ($result) {
                echo '<script> 
                alert("data insert done")
                window.location.href = "index.php" 
                </script>';
            }
        }
    }

}
?>