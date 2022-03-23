<?php include "header.php"; ?>

<div class="container p-5 my-5">
    <div class="card">
    <div class="card-header">

        <h2>Create a mumber</h2>

    </div>

    <div class="card-body">

        <form method="post">
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

    </div>
    </div>
</div>

<?php include "footer.php"; ?>