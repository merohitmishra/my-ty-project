<?php include("../../path.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--font awesome-->
    <link rel="stylesheet" href="../../assets/css/all.css">
    <!--custom style-->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!--admin style-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Admin - Edit User</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!--Admin page wrapper-->
    <div class="admin-wrapper">

        <!-- Left Sidebar-->
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!--// Left Sidebar-->

        <!--Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage User</a>
            </div>
            <div class="content">
                <h2 class="page-title">Edit User</h2>
                <form action="create.php" method="post">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" class="text-input">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="text-input">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" class="text-input">
                    </div>
                    <div>
                        <label>Confirm Password</label>
                        <input type="password" name="passwordConf" class="text-input">
                    </div>
                    <div>
                        <label>Role</label>
                        <select name="role" class="text-input">
                            <option value="author">Author</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-big">Update User</button>
                    </div>
                </form>
            </div>
        </div>
        <!--Admin Content-->


    </div>
    <!--//Admin page wrapper//-->


    <!--jquery-->
    <script src="../../assets/js/jquery.js"></script>

    <!--Ckeditor-->
    <script src="../../assets/js/ckeditor.js"></script>

    <!--custom scripts-->
    <script src="../../assets/js/scripts.js"></script>

</body>

</html>