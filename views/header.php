<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="public/css/header.css">
    <style>
    <?php include 'public/css/welcome.css'?>
    </style>
    <link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/bc6d9c9627.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.syncfusion.com/ej2/ej2-base/styles/material.css" rel="stylesheet" type="text/css" />
            <link href="https://cdn.syncfusion.com/ej2/ej2-buttons/styles/material.css" rel="stylesheet" type="text/css" />
            <link href="https://cdn.syncfusion.com/ej2/ej2-calendars/styles/material.css" rel="stylesheet" type="text/css" />
  
      <style>
   <?php include 'public/css/history.css'?>
   <?php include 'public/css/activities.css'?>
   <?php include 'public/css/awards.css'?>
   <?php include 'public/css/query.css'?>
   <?php include 'public/css/styles.css'?>
   </style>
    <script src="public/js/script.js"></script>
  <script src="https://cdn.syncfusion.com/ej2/ej2-base/dist/global/ej2-base.min.js" type="text/javascript"></script>
            <script src="https://cdn.syncfusion.com/ej2/ej2-inputs/dist/global/ej2-inputs.min.js" type="text/javascript"></script>
            <script src="https://cdn.syncfusion.com/ej2/ej2-buttons/dist/global/ej2-buttons.min.js" type="text/javascript"></script>
            <script src="https://cdn.syncfusion.com/ej2/ej2-lists/dist/global/ej2-lists.min.js" type="text/javascript"></script>
            <script src="https://cdn.syncfusion.com/ej2/ej2-popups/dist/global/ej2-popups.min.js" type="text/javascript"></script>
            <script src="https://cdn.syncfusion.com/ej2/ej2-calendars/dist/global/ej2-calendars.min.js" type="text/javascript"></script>
  <script src="https://cdn.syncfusion.com/ej2/ej2-base/dist/global/ej2-base.min.js" type="text/javascript"></script>

    <title>National Service Scheme</title>
  </head>
  <body>
    <!-- header logo with title -->
    <div class="container my-1">
  <div class="row">
    <div class="col d-flex justify-content-start align-self-center">
      <img src="public/img/logo.png" alt="nss-logo" class="img-fluid">
    </div>
    <div class="col d-flex justify-content-center align-self-center">
    <div class="row text-uppercase text-center">
      <div class="col only-large">
        <h5 id="title">Madras Institute of Technology</h5>
        <h5 id="title">National Service Scheme</h5>
      </div>
      <div class="only-small">
        <h5 id="title">MIT</h5>
        <h5 id="title">NSS</h5>
      </div>
    </div>
    </div>
    <div class="col d-flex justify-content-end align-self-center">
    <img src="public/img/college_logo.png" alt="mit-logo" class="img-fluid">
    </div>
  </div>
</div>
    <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark accent-bg-color sticky-top">
  <div class="container-fluid">
    <!-- <a class="navbar-brand me-5 ms-3" href="#">NSS MIT</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left:0px;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="color:red;font-size:15px;">
        <li class="nav-item me-3" id="navelements">
          <a class="nav-link" aria-current="page" href="#" style="text-align:center;">Home</a>
        </li>
        <li class="nav-item me-3" id="navelements">
          <a class="nav-link" href="#" style="text-align:center;">History</a>
        </li>
        <li class="nav-item dropdown me-3" id="navelements">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-align:center;">
            People
          </a>
          <ul class="dropdown-menu custom-nav-dropdown-color" id="droplist" aria-labelledby="navbarDropdown">
            <li id="dropmenu"><a class="dropdown-item text-light" href="#" style="text-align:center;color:red;">Volunteers</a></li>
            <li id="dropmenu"><a class="dropdown-item text-light" href="#" style="text-align:center;color:red;">Office Bearers</a></li>
            <li id="dropmenu"><a class="dropdown-item text-light" href="#" style="text-align:center;color:red;">Program Officers</a></li>
          </ul>
        </li>
        <li class="nav-item me-3" id="navelements">
          <a class="nav-link" href="#" style="text-align:center;">Awards</a>
        </li>
        <li class="nav-item dropdown" id="navelements">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-align:center;">
            Activities
          </a>
          <ul class="dropdown-menu custom-nav-dropdown-color" id="droplist" aria-labelledby="navbarDropdown">
            <li id="dropmenu"><a class="dropdown-item text-light" href="#" style="text-align:center;color:red;">Session</a></li>
            <li id="dropmenu"><a class="dropdown-item text-light" href="#" style="text-align:center;color:black;">Upcoming Activites</a></li>
          </ul>
        </li>
      </ul>      
    </div>
  </div>
</nav>