<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('config.php');
?>
<?php 
$fetch_data = "SELECT * from `users` where `id`";
$result = mysqli_query($connection, $fetch_data);
if ($result){
    if(mysqli_num_rows($result) > 0){


?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Registerd users</h2>
                <hr>
            <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while ($data = mysqli_fetch_assoc($result)) {

                   
                    ?>
                    <tr>
                    <td><?php echo $data['pid']?></td>
                    <td><?php echo $data['pname']?></td>
                    <td><?php echo $data['pdes']?></td>
                    <td><?php echo $data['pprice']?></td>
                    <td><?php echo $data['pimage']?></td>
                    <td ><a href="update.php?=<?php echo $data['id']?>" class="btn btn-success">update</a>
                    <a href="delete.php?=<?php echo $data['id']?>" class="btn btn-danger">delete</a></td>

                </tr>
 
                    <?php 
                        }
                    }
                }
                    ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
            </nav>

            </div>

        </div>

    </div>


</body>

</html>










<?php
include('includes/footer.php');


?>