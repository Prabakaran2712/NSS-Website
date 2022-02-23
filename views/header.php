<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
   <?php include 'public/css/styles.css'?></style>
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
    <header id="h">
    <div class="header" style="margin-top: -05px;">
  <h2></h2>
  
</div>
    <div class="col-sm-2" style="height:170px;margin-top: 10px;"> 
    <img  class="header-icon" src="public\img\logo.png" style="float:left;width:150px;height:150px;">
    </div>
    <div class="col-sm-8">
      <br><br><br>
    <h1 align="center" style="color:black;">MADRAS INSTITUTE OF TECHNOLOGY</h1>
    <h1 align="center" style="color:#303983;">NATIONAL SERVICE SCHEME</h1>
    </div>
    <div class="col-sm-2" style="height:170px;float:right;margin-top: 10px;"> 
    <img class="header-icon" src="public\img\college_logo.png" style="width:250;height:150px;">
</div>
<div style="height: 230px;">
    <div class="row" id="topnav">
        <div class="col" id="logo" style="padding: 0px;">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars" style="color:white"></i>
  </a>
        </div>
            <div class="col">
                <p>
            Home
                </p>
            </div>
            <div class="col">
                <p>
            History</p>
            </div>
            <div class="col">
           
            <div class="dropdown">
 People
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div> 
            </div>
            <div class="col">
                <p>
            Awards</p>
            </div>
            <div class="col">
            <div class="dropdown">
  Activities
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
            </div>
            
    </div>
    <div class="col-sm-5"></div>
    </div>
</div>
    </header>
    <script>
         window.onscroll = function() {stickynav()};

var navbar = document.getElementById("topnav");
var sticky = navbar.offsetTop;

function stickynav() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
    </script>