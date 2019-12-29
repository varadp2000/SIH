<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/style.css">
        <title> Court Case Management System </title>
        <link rel = "icon"
        href = "public/images/title_icon.jpg" type = "image/x-icon">
    </head>

    <body style="background-image:url('public/images/loginbg.jpg');background-repeat:no-repeat;background-attachment: fixed;background-size: cover;">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark nav-upper" role="navigation">

            <img class="navbar-brand" width="70px" height="70px" src="public/images/title_icon.jpg" style="border-radius:50%">
            <div class="court-case-title">
                Court Case
                <span>
                    Management System
                </span>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  justify-content-end" id="navbarNav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lawyersignup.php">
                            Lawyers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Contact Us
                        </a>
                    </li>
                </ul>

                <div class="btn-group">
                    <button class="btn my-sm-0 navbtn"
                        onclick="window.location.href='login.php';">
                        Login
                    </button>
                    <button class="btn my-sm-0 navbtn"
                    onclick="window.location.href='clientsignup.php';">
                        Sign up
                    </button>
                </div>
            </div>

        </nav>
