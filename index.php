<?php require "connect.php";
 
    // sql statement
    $sql = "SELECT * FROM people";

    $people = $conn->query($sql);

?>

<?php require "header.php"; ?>

    <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>All mumbers</h2>
                </div>
                <div class="card-body">

                    <table class='table table-bordered'>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        
                        <?php foreach($people as $mumber): ?>
                       
                            <tr>
                                <td><?= $mumber["id"] ?></td>
                                <td><?= $mumber["username"] ?></td>
                                <td><?= $mumber["email"] ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $mumber["id"] ?>" class="btn btn-primary" >Edit</a>
                                    <a href="delete.php?id=<?= $mumber["id"] ?>" class="btn btn-danger" >Delete</a>
                                </td>
                            </tr>

                            
                        <?php endforeach; ?>
                    </table>

                </div>
            </div>
    </div>

<?php require "footer.php"; ?>