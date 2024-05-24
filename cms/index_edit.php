<!DOCTYPE html>
<html>

<head>
    <!-- set charset -->
    <meta charset="UTF-8" />
    <!-- set default scale -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- website icon -->
    <link rel="icon" href="../images/icon.jpg" type="image/x-icon" />
    <!-- bootstrap css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- common app.css -->
    <link rel="stylesheet" href="../css/app.css" />
    <!-- page css -->
    <link rel="stylesheet" href="../css/cms_index_edit.css" />
    <!-- page title -->
    <title>Index Edit</title>
</head>

<body id="indexEdit" class="page-container cms-page d-flex">
    <!-- import header -->
    <?php include '../app/views/cms_header.php' ?>
    <?php include '../app/views/cms_menu.php' ?>

    <?php include '../app/templates/index_edit.php' ?>
    <!-- import bootstrap js -->
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>