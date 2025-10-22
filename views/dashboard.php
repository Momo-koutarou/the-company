<?php
session_start();

require '../classes/user.php';
$user = new User;
$all_users = $user->getAllUsers();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        <div class="col-6">
            <h2 class="text-center">USER LIST</h2>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($user = $all_users->fetch_assoc()) {
                    ?>
                        <tr>
                            <td>
                                <!-- photo -->
                                <?php
                                if ($user['photo']) {
                                ?>

                                    <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>" class="d-block mx-auto dashboard-photo">

                                <?php
                                } else {
                                ?>
                                    <i class="fa-solid fa-user text-secondary d-block mx-auto dashboard-icon"></i>

                                <?php
                                }
                                ?>
                            </td>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['first_name'] ?></td>
                            <td><?= $user['last_name'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td>
                                <?php
                                if ($_SESSION['id'] == $user['id']) {

                                ?>

                                    <a href="edit-user.php" class="btn btn-outline-warning" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="delete-user.php" class="btn btn-outline-danger" title="Delete"><i class="fa-regular fa-trash-can"></i></a>

                                <?php
                                }

                                ?>

                            </td>
                        </tr>

                    <?php
                    }

                    ?>

                </tbody>
            </table>
        </div>
    </main>

    <!-- <table> -->

</body>

</html>