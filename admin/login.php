<?php
require_once("../app.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techstore | Dashboard</title>

    <link rel="stylesheet" href="<?= AURL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= AURL; ?>assetsplugins/fontawesome-free-5.0.1/css/fontawesome-all.css">
</head>

<body>


    <div class="container py-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <h3 class="mb-3">Login</h3>
                <div class="card">
                    <div class="card-body p-5">
                        <form method="post" action="<?= AURL ?>handlers/handle-login.php">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control">
                            </div>
                            <div class="text-center mt-5">
                                <button name="submit" type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>