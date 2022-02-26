<div id="volist">
<?php
$year="2021";
  if(isset($_POST['id'])){
    $year=$_POST['id'];
  }
  ?>
  <script>document.getElementById("defaultOpen").click();</script>
<button class="tablink" onclick="openPage('unit1', this, 'white')" id="defaultOpen">Unit 1</button>
<button class="tablink" onclick="openPage('unit2', this, 'white')">Unit 2</button>
<button class="tablink" onclick="openPage('unit3', this, 'white')">Unit 3</button>
<button class="tablink" onclick="openPage('unit4', this, 'white')">Unit 4</button>
<button class="tablink" onclick="openPage('unit5', this, 'white')">Unit 5</button>
<button class="tablink" onclick="openPage('unit6', this, 'white')">Unit 6</button>
<button class="tablink" onclick="openPage('unit7', this, 'white')">Unit 7</button>
<div id="unit1" class="tabcontent" >
<h3 style="text-align:center;color:black;">Unit 1 Volunteers</h3><br>
  <table>
    <tr>
    <th style="text-align:center;">S. No</th>
    <th style="text-align:center;">Name</th>
    <th style="text-align:center;">Register Number </th>
  </tr>
  <?php 
  include "views/config.php";
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
</div>
