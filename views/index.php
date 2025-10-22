<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center">LOGIN</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <div class="mb-2">
                            <input type="text" name="username" id="username" class="form-control" placeholder="USERNAME" required>
                        </div>

                        <div class="mb-5">
                            <input type="password" name="password" id="password" class="form-control" placeholder="PASSWORD" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Log in</button>
                    </form>
                    <p class="text-center mt-3 small">
                     <a href="register.php">Create Account</a>
                    </p>
                </div>
            </div>
        </div>

    </div>

</body>

</html>