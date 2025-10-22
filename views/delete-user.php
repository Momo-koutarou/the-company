<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- customize css -->
    <link rel="stylesheet" href="../assets/CSS/style.css">

</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom:80px">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3">The Company</h1>
            </a>
            <div class="navbar-nav">
                <span class="navbar-text"><?= $_SESSION['full_name'] ?></span>
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0">Log Out</button>
                </form>
            </div>
        </div>
    </nav>


    <!-- <main> -->
    <main class="row justify-content-center gx-0">
        <div class="col-4 text-center">
            <span class="text-warning display-4 d-block mb-2">
                <i class="fas fa-triangle-exclamation"></i>
            </span>

            <h2 class="text-danger mb-5">
                DELETE ACCOUNT
            </h2>

            <p class="fw-bold">
                Are you sure you want to delete your account?
            </p>

            <div class="row">
                <div class="col">
                    <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                </div>

                <div class="col">
                    <form action="../actions/delete-user.php" method="post">
                        <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- <table> -->

</body>

</html>