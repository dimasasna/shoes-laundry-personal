<?php
session_start();
$error = "";
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        $error = "Gagal Login, Inputan Salah";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login Admin</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Start your project here-->
    <section class="vh-100" style="background-color: #D7D4D7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <form action="auth.php" method="POST">
                            <div class="card-body p-5 text-center">
                                <?php
                                if ($error) {
                                ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $error ?>
                                    </div>
                                <?php
                                    header("refresh:2;url=index.php");
                                }
                                ?>

                                <h3 class="mb-5">Sign in</h3>

                                <div class="form-outline mb-4">
                                    <input name="username" placeholder="Username" type="text" id="typeEmailX-2" class="form-control" />
                                </div>

                                <div class="form-outline mb-4">
                                    <input name="password" placeholder="Password" type="password" id="typePasswordX-2" class="form-control" />
                                </div>

                                <!-- Checkbox -->
                                <div class="mb-4 d-flex flex-start border-danger">
                                    <img src="captcha.php">
                                </div>
                                <div class="form-outline mb-4">
                                    <input name="captcha_code" type="text" class="form-control" id="captcha" placeholder="Captcha">
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>