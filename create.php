<?php

require "connect.php";

$msg = '';

if (isset($_POST['user']) && isset($_POST['email'])) {
    
    $username = $_POST['user'];
    $email = $_POST['email'];

    // sql statement
    $sql = "INSERT INTO people(username,email) VALUES(:username ,:email)" ;

    // prepare statement
    $stmt = $conn->prepare($sql);

    // bind parameters
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);

    // execute verification
    if ($stmt->execute()) {

        $msg = 'Mumber created successfully.';

    }

}
?>

<?php include "header.php"; ?>

<div class="container p-5 my-5">
    <div class="card">
    <div class="card-header">

        <h2>Create a mumber</h2>

    </div>

    <div class="card-body">

        <form method="post" id="mfform">
            <div class="container mb-4">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="user">
            </div>

            <div class="container mb-4">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter password" name="email">
            </div>

            <div class="container mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>

        <div class="container mt-4">
            <div class="alert alert-success" id="alert" style="display:none;"><strong>Success!</strong> <?php echo $msg ?></div>
        </div>

    </div>
    </div>
</div>

<script>
$("#mfform").submit(function(){

    $("#alert").removeAttr("style");
    <?php $_POST = null; ?>

});
</script>

<?php include "footer.php"; ?>