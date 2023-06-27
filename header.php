<?php
ob_start();
session_start();
?>
<?php include_once('db.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Room Finder</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#232628">
            <div class="container px-5" >
                <a class="navbar-brand" href="index.php">Room Finder</a>                    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                            <?php
                                     if (isset($_SESSION['user_name'])) {
                                            echo ' <li class="nav-item"><a class="nav-link" href="#"><b>[ '.$_SESSION['user_name'].' ]</b></a></li>';
                                    }
                            ?>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="blog-home.html">Blog Home</a></li>
                                    <li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
                                </ul>
                            </li> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span><i class="bi bi-person-circle"></i></span></a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    
                                    <?php
                                     if (!isset($_SESSION['login']) || ($_SESSION['login']!=1)) {
                                            echo '<li><a class="dropdown-item" href="login.php">LogIn</a></li>';
                                    }else
                                        echo '<li><a class="dropdown-item" href="login.php">LogOut</a></li><li><a class="dropdown-item" href="profile.php">Profile</a></li>';
                                    ?>
                                    </a></li>
                                    <li><a class="dropdown-item" href="register.php">Register</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


 <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Find In Your Own Way</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Make Easy By Yourself</p>
                </div>
            </div>
        </header>
        <br>