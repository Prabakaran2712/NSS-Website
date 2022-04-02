<?php
  if (session_status() === PHP_SESSION_NONE) {
   session_start();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="./public/icons/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- jquery for ajax -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom font -->
    <link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/welcome.css">
    <link rel="stylesheet" href="public/css/history.css">
    <link rel="stylesheet" href="public/css/activities.css">
    <link rel="stylesheet" href="public/css/awards.css">
    <link rel="stylesheet" href="public/css/query.css">
    <link rel="stylesheet" href="public/css/styles.css">

    <!-- title -->
    <title>National Service Scheme</title>

  </head>

  <body>

    <!-- logos & title -->
    <div class="container">
      
      <div class="row">

        <!-- AU logo -->
        <div class="col d-flex justify-content-start align-self-center">
          <img src="public/img/au_logo.png" alt="nss-logo" class="img-fluid">
        </div>

        <!-- title -->
        <div class="col-6 d-flex justify-content-center align-self-center">

          <div class="row text-uppercase text-center">

            <!-- expanded text on large screens -->
            <div class="col only-large">
              <h1 class="fw-bold" style="color: #303983;">National Service Scheme</h1>
              <h5 class="lead">Anna University, MIT Campus</h5>
            </div>

            <!-- acronyms on small screens -->
            <div class="col only-small">
              <h1 class="fw-bold" style="color: #303983;">NSS</h1>
              <h5 >MIT</h5>
            </div>

          </div>

        </div>

        <!-- MIT logo -->
        <div class="col d-flex justify-content-end align-self-center">
          <img src="public/img/college_logo.png" alt="mit-logo" class="img-fluid">
        </div>

      </div>
      
    </div>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark accent-bg-color">
      <div class="container-fluid">
        <a class="navbar-brand me-5 ms-3" href="index.php">NSS MIT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item me-3">
              <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link text-light" href="./index.php#about">About</a>
            </li>
            <li class="nav-item dropdown me-3">
              <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                People
              </a>
              <ul class="dropdown-menu custom-nav-dropdown-color" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-light" href="./programofficers.php">Programme Officers</a></li>
                <li><a class="dropdown-item text-light" href="./incharges.php">Incharges</a></li>
                <li><a class="dropdown-item text-light" href="volunteers.php">Volunteers</a></li>
              </ul>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link text-light" href="awards.php">Awards</a>
            </li>
            <li class="nav-item dropdown me-3">
              <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                Sessions
              </a>
              <ul class="dropdown-menu custom-nav-dropdown-color">
                <li><a class="dropdown-item text-light" href="./recent-sessions.php">
                  <img src="./public/icons/star.svg" alt="recent" width="20px" class="navbar-icon me-1">
                  Recent Sessions
                </a></li>
                <li><a class="dropdown-item text-light" href="./sessions.php">
                <img src="./public/icons/list.svg" alt="recent" width="20px" class="navbar-icon me-1">
                  All Sessions
                </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown me-3">
              <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                Camps
              </a>
              <ul class="dropdown-menu custom-nav-dropdown-color">
                <li><a class="dropdown-item text-light" href="./camp.php?year=2022">                  
                  2022
                </a></li>
                <li><a class="dropdown-item text-light" href="./camp.php?year=2019">
                  2019
                </a></li>
              </ul>
            </li>
        </div>
      </div>
    </nav>

    <style>
      .navbar-icon{
        filter: invert(100%);
      }
    </style>
