<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form handling31";

$userdta = mysqli_connect($servername, $username, $password, $dbname);
if (!$userdta) {
    echo mysqli_connect_error();
}
// else {
//     echo "connection ok";
// }

?>