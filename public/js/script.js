function myFunction() {
    var x = document.getElementById("topnav");
    if (x.className === "row") {
        x.className= "row responsive";
      var all = document.getElementsByClassName('col');
for (var i = 0; i < all.length; i++) {
  all[i].style.display ='block';
}

    } else {
      x.className = "row";
      var all = document.getElementsByClassName('col');
      for (var i = 0; i < all.length; i++) {
        all[i].style.display ='none';
      }
      var z=document.getElementById('logo');
      z.style.display='block';

    }
  }
  function check(){
    if (!(window.matchMedia("(max-width: 768px)").matches)) {
        var all = document.getElementsByClassName('col');
      for (var i = 0; i < all.length; i++) {
        all[i].style.display ='block';
  }
  
}
  else{
    var all = document.getElementsByClassName('col');
    for (var i = 0; i < all.length; i++) {
      all[i].style.display ='none';
    }
    var z=document.getElementById('logo');
    z.style.display='block';
    
  }

}
  window.addEventListener('resize',check);
 