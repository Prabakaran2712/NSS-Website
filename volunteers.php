<!doctype html>
<?php include 'views/header.php'?>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script type="text/javascript" src="volunteers.js" ></script>
</head>
<body>    
<br>
<h1 style="text-align:center;color:black;">List of Volunteers </h1>
<br>
<br>
<div class="row">
<div class="col-sm-4" style="margin-left:20px; margin-right: 20px;">
<div class="container p-3 my-3 border">
<h2 style="text-align:center;color:black">Select Academic Year</h2>
<hr style="width:80%;color:black;margin-left: auto; margin-right: auto;">
<div class="d-flex justify-content-center">
<select class="form-select" aria-label="Select-year" id="select-year" name="select-year"  method="POST" onChange="selectchange()">
  <option  value="2021" name="y2021" style="color:black;" selected>2021-2022</option>
  <option value="2020" name="y2020" style="color:black;">2020-2021</option>
</select>
</div>
</div> 
<br>
<h2 style="text-align:center;color:black;">Role of NSS Volunteers</h2>
<h6 style="text-align:left;padding:10px;color:black;">NSS volunteers work in rural areas, adopted villages and school to the serving the cause of society through survey, education and health awareness programme. This study involves in identifying the importance, aims and objectives of NSS in higher education which in turn create social responsibility among the students.</h6>
</div>
<div class="col-sm-7" style="margin-left:20px; margin-right: 20px;">
<div class="container" id="vlist" name="vlist">
<?php include 'volunteers_list.php'?>
</div>
</div>
</body>
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
    tablinks[i].style.color = "white";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
  elmnt.style.color = "black";
}
document.getElementById("defaultOpen").click();
</script>


