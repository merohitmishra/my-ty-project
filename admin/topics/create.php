<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); ?>
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
    <title>Admin - Add Topics</title>
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
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>
            <div class="content">
                <h2 class="page-title">Add Topics</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?> 
                <form action="create.php" method="post">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $name?>" class="text-input">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description" id="body"><?php echo $description?></textarea>
                    </div>
                    <div>
                        <button type="submit" name="add-topic" class="btn btn-big">Add Topic</button>
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