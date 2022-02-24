<div style="width:100%;;margin:0px;padding:0px;height:auto;background-color:white;" id="bgimg">
  
    <div class="col-sm-12" style="height:280px;padding-left:50px; background-image:url(public/img/3.jpg);float:none">
      
      <center>
      <p style="font-size:25px;padding-top:45px;" id="msg">WELCOME</p>
      <p style="font-size:25px;" id="msg">TO</p>
      <p style="font-size:30px;color:white;">NATIONAL SERVICE SCHEME</p>
      </center>
  </div>
  <div style="height:30px;">
  <div class="events" style="display: flex;">
  <div class="event-name" style="width: 100px; background-color:#303983">
    <h2 style="text-align: center;">Events</h2>
  </div>
  <marquee class="news-content" width="100%" direction="right" height="30px" style="background-color:white;">
  <center>
  <?php
    include 'config.php';
    $sql="select*from events";
    $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_assoc($result)){
      echo "<span>".$row['e_name']."|</span>";
  }


  ?>
  </center>
    </marquee>
  </div>
  </div>
  <div class="col-sm-3" style="background-color:white;height:200px;">
      <?php
        echo "<p style='font-size:50px;font-family:Allerta Stencil;color:black;padding-left:40px;'>".date('M d')."</p>";
        echo "<p style='font-size:40px;font-family:Allerta Stencil;color:red;padding-left:40px;'>".date('Y')."</p>";
        echo "<p style='font-size:25px;font-family:Allerta Stencil;color:black;padding-left:40px;'>".date('l')."</p></div>";

      include 'config.php';
      $sql="select*from events;";
      $result=mysqli_query($con,$sql);
      $month=date('m');
      $day=date('d');
      $year=date('Y');
      $flag=1;
      $loopc=1;
      while($row=mysqli_fetch_assoc($result)){
    $date=explode('-',$row['date']);
  if(($date[0]==$year)&&($date[1]==$month)&&($date[2]==$day)){
    ?>

      <?php
      if($loopc==1){
      echo '<div class="col-sm-3">';

    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['poster'] ).'" id="poster"/>';
     echo '</div>';
    echo "<div class='col-sm-6' style='color:black;font-size:15px;background-color:white;height:220px;overflow:scroll;'>";
    echo "<h1 style='font-size:40px;font-family:Allerta Stencil;color:black;padding-left:40px;padding-top:20px;'>TODAY'S EVENT :".$loopc."</h1>";
    echo "<ul id='ename'>".$row['e_name']."</ul>";
      echo "<li id='desp'>".$row['description']."</li></div>";
    $loopc+=1;}
    else{
      echo "<div class='col-sm-3'></div>";
      echo '<div class="col-sm-3" style="background-color:white;">';

    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['poster'] ).'" id="poster"/>';
     echo '</div>';
    echo "<div class='col-sm-6' style='background-color:white;color:black;font-size:15px;height:220px;overflow:scroll;'>";
    echo "<h1 style='font-size:40px;font-family:Allerta Stencil;color:black;padding-left:40px;padding-top:20px;'>TODAY'S EVENT :".$loopc."</h1>";
    echo "<ul id='ename'>".$row['e_name']."</ul>";
      echo "<li id='desp'>".$row['description']."</li></div>";
    }
    $flag=0;}
      }
if($flag==1){
/*       echo "<div class='col-sm-3'></div>";
      echo '<div class="col-sm-3" style="background-color:white;">';
     echo '</div>'; */
    echo "<div class='col-sm-9' style='background-color:white;color:black;font-size:15px;height:220px;overflow:scroll;'>";
    echo "<h1 style='font-size:40px;font-family:Allerta Stencil;color:black;padding-left:40px;padding-top:20px;'>TODAY'S EVENT :</h1>";
    echo "<ul id='ename'>There are no events today.</ul></div>";}
      ?>
</div>
