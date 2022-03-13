<?php include 'views/header.php'?>
    
<style>

.card-container{
width: 300px;
height: 480px;
background: #FFF;
border-radius: 6px;
box-shadow: 0px 1px 10px 1px #000;
overflow: hidden;
display: inline-block;
}
.upper-container{
height: 150px;
background: #303983;
}
.image-container{
background: white;
width: 110px;
height: 110px;
border-radius: 50%;
padding: 5px;
transform: translate(100px,70px);
}
.image-container img{
width: 100px;
height: 100px;
border-radius: 50%;
}
.lower-container{
height: 280px;
background: #FFF;
padding: 20px;
padding-top: 40px;
text-align: center;
}
.lower-container h3, .lower-container h4{
box-sizing: border-box;
line-height: 1.5;
color: #000;
}
.lower-container h4{
opacity:   .9;
font-weight: bold;
color: #303983;
}
.lower-container p{
font-size: 16px;
color: gray;
margin-bottom: 30px;
}

.fa{
    color: #000;
}
.contact{
    
    padding: 10px 0px;
   
}
.contact-element{
    font-weight: 400;
    font-family: Arial, Helvetica, sans-serif;
}
.grid-container {
  display: grid;
  align-items: center;
  grid-template-columns: auto auto auto;
  padding: 10px;
}

.grid-item {
  
  border: none;
  padding: 20px;
  text-align: center;
}
.years-associated{
    font-weight: lighter;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #000;
    font-size: large;
    opacity: 1;
}
.title-program-officers{
   margin-top: 100px;
   margin-bottom: 40px;
    text-align: center;
}
@media screen and (max-width: 1136px) {
 .grid-container {
  width: 100%;
  padding: 10px;
}}
@media screen and (max-width: 1030px) {
 #blank-position{
     display: none;
 }
 .grid-container {
  display: flex;
  flex-direction: column;
  width: 100%;
  padding: 10px;
}
}
@media screen and (max-width: 454px) {

.title-program-officers h1{
color: #000;
}}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include 'views/config.php';
    $sql="select * from programofficers order by id";
    $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
    ?>
    <div class="program-officers">
        <div class="title-program-officers">
            <h1>PROGRAMME OFFICERS</h1>
        </div>
    <div class="grid-container">
    <div class="grid-item" id="blank-position"></div>
        <div class="grid-item"><div class="card-container" style="height: 550px;">
            <div class="upper-container">
               <div class="image-container">
               <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"; /> 
               </div>
            </div>
            <div class="lower-container">
               <div>
                  <h3><?php echo $row['name'];?></h3>
                  <h4><?php echo $row['designation'];?></h4>
               </div>
               <div class="contact">
                <i class="fa fa-envelope" >  <span class="contact-element"><?php echo $row['email'];?></span></i>
                </div>
                <div class="contact">
                <i class="fa fa-phone"> <span class="contact-element">91+ <?php echo $row['phonenumber'];?></span></i>
               </div>
               <div class="years-associated">Years associated with NSS - <?php echo $row['year']?></div>
              
            </div>
         </div></div>
        <div class="grid-item" id="blank-position"></div>
         <?php  while($row=mysqli_fetch_assoc($result)){
             if($row['designation']!="head"){?>
        
        <div class="grid-item"><div class="card-container">
            <div class="upper-container">
               <div class="image-container">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"; /> 
                  
               </div>
            </div>
            <div class="lower-container">
               <div>
                  <h3><?php echo $row['name'];?></h3>
                  <h4><?php echo $row['designation'];?></h4>
               </div>
               <div class="contact">
                <i class="fa fa-envelope" >  <span class="contact-element"><?php echo $row['email'];?></span></i>
                </div>
                <div class="contact">
                <i class="fa fa-phone"> <span class="contact-element">91+ <?php echo $row['phonenumber'];?></span></i>
               </div>
               <div class="years-associated">Years associated with NSS - <?php echo $row['year']?></div>
            </div>
         </div></div>
            
  <?php }} ?>        
     
    </div>
    </div>

<?php include 'views/footer.php'?>

