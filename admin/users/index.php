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
    <title>Admin - Manage Users</title>
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
                <h2 class="page-title">Manage Users</h2>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Profile</td>
                            <td>Admin</td>
                            <td><a href="edit.php" class="edit">Edit</a></td>
                            <td><a href="#" class="delete">Delete</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Profile</td>
                            <td>Admin</td>
                            <td><a href="#" class="edit">Edit</a></td>
                            <td><a href="#" class="delete">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Admin Content-->

    </div>
    <!--//Admin page wrapper//-->


    <!--jquery-->
    <script src="../../assets/js/jquery.js"></script>

    <!--custom scripts-->
    <script src="../../assets/js/scripts.js"></script>

</body>

</html>