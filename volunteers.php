<!doctype html>
<?php include 'views/header.php'?>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>    
<br>
<h1 style="text-align:center;color:black;">List of Volunteers </h1>
<br>
<br>
<div class="row">
<div class="col-sm-4" style="margin-left:20px; margin-right: 20px;">
<div class="container p-3 my-3 border">
<h2 style="text-align:center;color:black">Academic Year</h2>
<hr style="width:80%;color:black;margin-left: auto; margin-right: auto;">
<div class="d-flex justify-content-center">
<select class="form-select" aria-label="Select-year" id="select-year" name="select-year" onchange="selectyear()">
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
<div class="container">
<button class="tablink" onclick="openPage('unit1', this, 'white')" id="defaultOpen">Unit 1</button>
<button class="tablink" onclick="openPage('unit2', this, 'white')">Unit 2</button>
<button class="tablink" onclick="openPage('unit3', this, 'white')">Unit 3</button>
<button class="tablink" onclick="openPage('unit4', this, 'white')">Unit 4</button>
<button class="tablink" onclick="openPage('unit5', this, 'white')">Unit 5</button>
<button class="tablink" onclick="openPage('unit6', this, 'white')">Unit 6</button>
<button class="tablink" onclick="openPage('unit7', this, 'white')">Unit 7</button>
<div id="unit1" class="tabcontent">
<h3 style="text-align:center;color:black;">Unit 1 Volunteers</h3><br>
  <table>
    <tr>
    <th style="text-align:center;">S. No</th>
    <th style="text-align:center;">Name</th>
    <th style="text-align:center;">Register Number </th>
  </tr>
  <?php 
  include "views/config.php";
  $year=2020;
  $sql="select * from unit_1_".$year; 
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      echo "<tr><td>".$row["S_No"]."</td><td>".$row["Name"]."</td><td>".$row["Register_Number"]."</td></tr>" ;    }
  }
  ?>
</table>
</div>

<div id="unit2" class="tabcontent">
<h3 style="text-align:center;color:black;">Unit 2 Volunteers</h3><br>
  <table>
    <tr>
    <th style="text-align:center;">S. No</th>
    <th style="text-align:center;">Name</th>
    <th style="text-align:center;">Register Number </th>
  </tr>
  <?php 
  include "views/config.php";
  $year=2020;
  $sql="select * from unit_2_".$year; 
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      echo "<tr><td>".$row["S_No"]."</td><td>".$row["Name"]."</td><td>".$row["Register_Number"]."</td></tr>" ;    }
  }
  ?>
</table>
</div>

<div id="unit3" class="tabcontent">
<h3 style="text-align:center;color:black;">Unit 3 Volunteers</h3><br>
  <table>
    <tr>
    <th style="text-align:center;">S. No</th>
    <th style="text-align:center;">Name</th>
    <th style="text-align:center;">Register Number </th>
  </tr>
  <?php 
  include "views/config.php";
  $year=2020;
  $sql="select * from unit_3_".$year; 
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      echo "<tr><td>".$row["S_No"]."</td><td>".$row["Name"]."</td><td>".$row["Register_Number"]."</td></tr>" ;    }
  }
  ?>
</table>
</div>

<div id="unit4" class="tabcontent">
<h3 style="text-align:center;color:black;">Unit 4 Volunteers</h3><br>
  <table>
    <tr>
    <th style="text-align:center;">S. No</th>
    <th style="text-align:center;">Name</th>
    <th style="text-align:center;">Register Number </th>
  </tr>
  <?php 
  include "views/config.php";
  $year=2020;
  $sql="select * from unit_4_".$year; 
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      echo "<tr><td>".$row["S_No"]."</td><td>".$row["Name"]."</td><td>".$row["Register_Number"]."</td></tr>" ;    }
  }
  ?>
</table>
</div>

<div id="unit5" class="tabcontent">
<h3 style="text-align:center;color:black;">Unit 5 Volunteers</h3><br>
  <table>
    <tr>
    <th style="text-align:center;">S. No</th>
    <th style="text-align:center;">Name</th>
    <th style="text-align:center;">Register Number </th>
  </tr>
  <?php 
  include "views/config.php";
  $year=2020;
  $sql="select * from unit_5_".$year; 
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      echo "<tr><td>".$row["S_No"]."</td><td>".$row["Name"]."</td><td>".$row["Register_Number"]."</td></tr>" ;    }
  }
  ?>
</table>
</div>

<div id="unit6" class="tabcontent">
<h3 style="text-align:center;color:black;">Unit 6 Volunteers</h3><br>
  <table>
    <tr>
    <th style="text-align:center;">S. No</th>
    <th style="text-align:center;">Name</th>
    <th style="text-align:center;">Register Number </th>
  </tr>
  <?php 
  include "views/config.php";
  $year=2020;
  $sql="select * from unit_6_".$year; 
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      echo "<tr><td>".$row["S_No"]."</td><td>".$row["Name"]."</td><td>".$row["Register_Number"]."</td></tr>" ;    }
  }
  ?>
</table>
</div>

<div id="unit7" class="tabcontent">
  <h3 style="text-align:center;color:black;">Unit 7 Volunteers</h3><br>
  <table>
    <tr>
    <th style="text-align:center;">S. No</th>
    <th style="text-align:center;">Name</th>
    <th style="text-align:center;">Register Number </th>
  </tr>
  <?php 
   include "views/config.php";
  $year=2020;
  $sql="select * from unit_7_".$year; 
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      echo "<tr><td>".$row["S_No"]."</td><td>".$row["Name"]."</td><td>".$row["Register_Number"]."</td></tr>" ;    }
  }
  ?>
</table>
</div>

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
</div>
</div>
</div>
</body>
