<div style="width:100%;;margin-bottom:0px;padding:0px;height:100%;">
  <div style="height:30px;">
  <marquee width="100%" direction="right" height="30px" style="background-color:white;">
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
    <div class="col-sm-12" style="height:280px;padding-left:50px;">
      <img id="wel" src="public/img/3.jpg" alt="Aleq">
      <center>
      <p style="font-size:25px;padding-top:45px;" id="msg">WELCOME</p>
      <p style="font-size:25px;" id="msg">TO</p>
      <p style="font-size:30px;color:white;">NATIONAL SERVICE SCHEME</p>
      </center>
  </div>
  <div class="col-sm-6" style="background-color:white;height:200px;">
      <?php
        echo "<p style='font-size:50px;font-family:Allerta Stencil;color:black;padding-left:40px;'>".date('M d')."</p>";
        echo "<p style='font-size:40px;font-family:Allerta Stencil;color:red;padding-left:40px;'>".date('Y')."</p>";
        echo "<p style='font-size:25px;font-family:Allerta Stencil;color:black;padding-left:40px;'>".date('l')."</p>";
    ?>
    </div>
    <div class="col-sm-6" style="color:black;font-size:15px;background-color:white;height:200px;overflow:hidden;">
      <h1 style='font-size:40px;font-family:Allerta Stencil;color:black;padding-left:40px;padding-top:20px;'>TODAY'S EVENTS</h1>
      <?php
      include 'config.php';
      $sql="select*from events;";
      $result=mysqli_query($con,$sql);
      $month=date('m');
      $day=date('d');
      $year=date('Y');
      $flag=1;
while($row=mysqli_fetch_assoc($result)){
    $date=explode('-',$row['date']);
  if(($date[0]==$year)&&($date[1]==$month)&&($date[2]==$day)){
    echo "<li id='ename'>".$row['e_name']."</li>";
    $flag=0;}
}
if($flag==1){
      echo "<li id='ename'>There are no events today</li>";}
      ?>
      </div>
      <div>
      </div>
</div>
