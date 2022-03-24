<?php
require "connect.php";

$id = $_GET['id'];

$sql = "SELECT * FROM people WHERE id=:id ";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();

$person = $stmt->fetch(PDO::FETCH_ASSOC);


if (isset($_POST['user']) && isset($_POST['email'])) {
    
    $username = $_POST['user'];
    $email = $_POST['email'];

    // sql statement
    $sql = "UPDATE people SET username=:username ,email=:email where id=:id" ;

    // prepare statement
    $stmt = $conn->prepare($sql);

    // bind parameters
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);

    // execute verification
    if ($stmt->execute()) {

    $msg = 'Mumber Edited successfully.';

    }

}
?>

<?php include "header.php"; ?>

<div class="container p-5 my-5">
    <div class="card">
    <div class="card-header">

        <h2>Edit infos</h2>

    </div>

    <div class="card-body">

        <form method="post" id="mfform">
            <div class="container mb-4">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="user" value="<?php echo $person['username']; ?>" >
            </div>

            <div class="container mb-4">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter password" name="email" value="<?php echo $person['email']; ?>" >
            </div>

            <div class="container mb-3">
                <button type="submit" class="btn btn-primary">Edit Now</button>
            </div>
        </form>

        <div class="container mt-4">
            <div class="alert alert-success" id="alert" style="display:none;"><strong>Success!</strong> <?php echo $msg; ?></div>
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






<h1 class="text-danger" ><? print_r($person); ?></h1>

<?php include "footer.php"; ?>