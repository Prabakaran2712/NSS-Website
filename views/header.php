<?php
if (session_status() === PHP_SESSION_NONE)
{
    session_start();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>National Service Scheme - Madras Institute of Technology, Anna University</title>
    <meta name="description" content="Welcome to the website of National Service Scheme, Madras Institute of Technology. We takes active part in serving the common man and enabling him to lead a happy life. MIT is not only known for producing sound engineers to the industries but develops and inculates the service notion in every MITian. The service is not confined to just a week in the campus, but beyond all that boundaries, the service needs to be implicated till one's life comes to an end. Our NSS organisation not only encourages service to humanity but stresses the need to live in.">
    <meta name="robots" content="index, follow">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- nss logo favicon -->
    <link rel="icon" type="image/x-icon" href="./public/icons/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- jquery / ajax -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- CSS for navbar & title -->
    <link rel="stylesheet" href="public/css/header.css">

  </head>

  <body>

  <!-- react scripts -->
<script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>

<!-- IMPORTANT: REMOVE ON PRODUCTION -->
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

<div id="header-section" class="py-2">
  <!-- logos & title -->
  <div class="container">    
      <div class="row">
        <!-- AU logo -->
        <div class="col-1 d-flex justify-content-start align-self-center">
          <img src="public/img/logo.png" alt="nss-logo">
        </div>        
        <!-- title -->
        <div class="col-1 justify-content-start align-self-center">        
          <div class="text-uppercase text-center">                        
              <h3 class="fw-bold" style="color: white">NSS</h3>                                     
          </div>          
        </div>        
        <!-- MIT logo -->
        <div class="col-1 d-flex justify-content-start align-self-center">
          <img src="public/img/college_logo.png" alt="mit-logo">
        </div>       
        <div class="col-8 align-self-center" id="nss-nav">
          <ul>
            <li class="nav-item dropdown mx-2 fs-5">
              <a class=" dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                People
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="mx-2 fs-5"><a href="#">Awards</a></li>
            <li class="nav-item dropdown mx-2 fs-5">
              <a class=" dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sessions
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown mx-2 fs-5">
              <a class="dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Camps
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class=" mx-2 fs-5"><a href="#">Contact</a></li>
          </ul>
        </div>        
      </div>      
    </div>
  </div>
</div>

<style>
  #header-section{
    background: rgb(57,66,137);
    background: linear-gradient(90deg, rgba(57,66,137,1) 0%, rgba(74,29,28,1) 50%, rgba(57,66,137,1) 100%);
    border-radius: 0 0 20% 20%;
  }
  #nss-nav{
    text-align: right;
  }
 #nss-nav > ul{
   list-style-type: none;
 }
 #nss-nav > ul > li{
   display: inline-block;
 }
 #nss-nav >ul > li > a{
   text-decoration: none;
   color: white;
   /* color: #303983; */
 }
</style>