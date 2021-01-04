<?php include('path.php')?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--font awesom-->
    <link rel="stylesheet" href="assets/css/all.css">
    <!--custom style-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>influencingTech | Login</title>
</head>

<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <div class="auth-content">
        <form action="login.php" method="post">
            <h2 class="form-title">Login</h2>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?> 

            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            </div>
            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Login</button>
            </div>
            <p>Or <a href="<?php echo BASE_URL . 'register.php'?>">Sign Up</a></p>



        </form>
    </div>


    <!--jquery-->
    <script src="assets/js/jquery.js"></script>

    <!--custom scripts-->
    <script src="assets/js/scripts.js"></script>



</body>

</html>