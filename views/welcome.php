<div>
    <div id="bg-image">     
      <div id="hometext">
        <p id="msg">WELCOME</p>
        <p>TO</p>
        <p>NATIONAL SERVICE SCHEME</p>
      </div>
  </div>
</div>
  <div style="height:30px;">
  <div class="events" style="display: flex;">
  <div class="event-name" style="width: 100px; background-color:#303983">
    <h2 style="text-align: center;font-size:25px;color:white">Events</h2>
  </div>
  <marquee class="news-content" width="100%" direction="right" height="30px" style="background-color:white;">
  <div id="hometext" style="text-align:center">
  <?php
    include 'config.php';
    $sql="select*from events";
    $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_assoc($result)){
      echo "<span>".$row['e_name']."</span><span style='margin-left:10px;margin-right:10px'>|</span>";
  }


  ?>
  </div>
    </marquee>
  </div>

  </div>
  <div class="container-fluid mt-3">
    <div class="row">
  <div class="row" style="background-color:white;height:auto;margin-top:10px;text-align:center;" id="hero">
      <?php
        echo "<div class='col-sm-4' style='font-size:40px;color:black;'>".date('M d')."</div>";
        echo "<div class='col-sm-4' style='font-size:60px;color:red;'>".date('Y')."</div>";
        echo "<div class='col-sm-4' style='font-size:40px;color:black;'>".date('l')."</div></div>";

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
        echo '<div class="col-sm-4" style="height:300px;border-color:red;border-style:solid none solid solid;border-radius:5px;margin-top:10px;">';
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['poster'] ).'" id="poster"/>';
        echo '</div>';
        echo "<div class='col-sm-8' id='hero' style='border-style:solid;border-radius:5px;color:black;font-size:15px;background-color:white;height:300px;overflow:scroll;overflow-x:hidden;margin-top:10px;'>";
        echo "<h1 id='ename'>".$row['e_name']."</h1>";
        echo '<div class="child"><h2 id="desp">'.$row['description'].'</h2></div></div>';
    $flag=0;}
      }
if($flag==1){
      echo "<div class='col-sm-12' style='margin-top:10px;padding:10px;color:black;font-size:15px;height:auto;border-color:red;border-style:solid;border-radius:5px;'>";
      echo '<ul id="ename">There are no events today.</ul></div>';}
      
    echo '</div></div>';
      ?>
</div>

<style>
  #bg-image{
    background-image:url(public/img/home.png);
    background-repeat:no-repeat;
    background-position: center center;
    background-size: 100vw;
  }  
  /* @media only screen and (max-width: 10px){
    #bg-image{
      height: 50vh;
    }
  } */
  @media only screen and (min-width: 420px){
    #bg-image{
      min-height: 50vh;
    }
  }
  @media only screen and (min-width: 650px){
    #bg-image{
      min-height: 70vh;
    }
  }
  @media only screen and (min-width: 600px){
    #bg-image{
      min-height: 80vh;
    }
  }
</style>
