<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/all.css" />
</head>
<body>

<?php if(isset($_SESSION['id'])){ ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <ul class="navbar-nav ms-auto">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <li><a href="action.php?page=all-student" class="nav-link">All Student</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" ><?php echo $_SESSION['name']?></a>
                    <ul class="dropdown-menu">
                        <li><a href="action.php?page=logout" class="dropdown-item">Logout</a></li>
                    </ul>
            </li>
        </ul>
    </div>
</nav>

<?php } ?>