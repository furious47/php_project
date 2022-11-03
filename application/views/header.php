<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/codeigniter_proj/source/css/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>

<body>
    <div class="content">
        <header>
            <div class="head-contain">
                <nav>
                    <div class="logo">
                        <h1>Ghoul Restaurant</h1>
                        <div class="nav-collapse">
                            <span class="btn"><i class="fa fa-bars fa-lg"></i></span>

                        </div>
                    </div>

                    <ul id="nav-links" class="nav-links">
                        <li><a href="<?php echo base_url() ?>">
                                <span>Home</span>
                                <i class="fa fa-home"></i>
                            </a></li>
                        <li><a href="<?php echo base_url('/index.php/contact') ?>">
                                <span>Contact</span>
                                <i class="fa fa-phone"></i>
                            </a></li>
                        <li><a href="<?php echo base_url('/index.php/dashboard') ?>">
                                <span>Profile</span>
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>