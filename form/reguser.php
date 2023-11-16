<?php 
include("config.php");
include("navbar.php");
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


<h1>Welcome to my website</h1>

<?php
$fetch_data = "SELECT * FROM `userdata` Where `status` = '1' ";
$result1 = mysqli_query($userdta, $fetch_data);
if ($result1) {
    if (mysqli_num_rows($result1) > 0) {

        ?>

        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- loop starts -->
                    <?php
                    while ($data = mysqli_fetch_assoc($result1)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $data["fname"] ?>
                            </td>
                            <td>
                                <?php echo $data["lname"] ?>
                            </td>
                            <td>
                                <?php echo $data["email"] ?>
                            </td>
                            <td>
                                <?php echo $data["password"] ?>
                            </td>
                            <td> <a href="updata.php?id=<?php echo $data['id']?>">Update</a> </td>
                            <td> <a href="delete.php?id=<?php echo $data['id']?>">Delete</a> </td>
                            <!-- <td> <a href="">Delete</a> </td> -->

                        </tr>
                        <?php
                    }
    }
}
?>
            <!-- loop end -->

        </tbody>
    </table>

    </div>

    </body>
</html>