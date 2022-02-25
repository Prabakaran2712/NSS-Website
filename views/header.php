<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
    <link rel="stylesheet" href="public/css/volunteers.css">
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
              <h5 id="title">Anna University, MIT Campus</h5>
              <h5 id="title" style="color: #303983;">National Service Scheme</h5>
            </div>

            <!-- acronyms on small screens -->
            <div class="col only-small">
              <h5 id="title">MIT</h5>
              <h5 id="title" style="color: #303983;">NSS</h5>
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
        <a class="navbar-brand me-5 ms-3" href="#">NSS MIT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item me-3">
              <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link text-light" href="#">History</a>
            </li>
            <li class="nav-item dropdown me-3">
              <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                People
              </a>
              <ul class="dropdown-menu custom-nav-dropdown-color" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-light" href="volunteers.php">Volunteers</a></li>
                <li><a class="dropdown-item text-light" href="#">Office Bearers</a></li>
                <li><a class="dropdown-item text-light" href="./programofficers.php">Program Officers</a></li>
              </ul>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link text-light" href="#">Awards</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Activites</a>
            </li>      
        </div>
      </div>
    </nav>
