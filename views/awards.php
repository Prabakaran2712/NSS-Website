<div class="awards">
    <div class="slide-show">    
        <h2 class="award-heading">Our Awards</h2>
        <h3 class="award-sub-heading">An award recognizing your talent is an honor. That matters a lot to me.</h3>   
        <section class="awards-section">
                <div class="col-sm-6 awards-box">
                    <h2 class ="awards-subheading">NATIONAL SERVICE SCHEME</h2>
                    <p class="awards-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>					
                </div>
                <div class="col-sm-6 awards-box">
                    <img src="public/img/1.jpg" alt="Achievements by NSS" class="awards-image">
                </div>			
        </section>
        <section class="awards-section">
                <div class="col-sm-6 awards-box">
                    <h2 class ="awards-subheading">NATIONAL SERVICE SCHEME</h2>
                    <p class="awards-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>					
                </div>
                <div class="col-sm-6 awards-box">
                    <img src="public/img/2.jpg" alt="Achievements by NSS" class="awards-image">
                </div>			
        </section>
        <section class="awards-section">
                <div class="col-sm-6 awards-box">
                    <h2 class ="awards-subheading">NATIONAL SERVICE SCHEME</h2>
                    <p class="awards-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>					
                </div>
                <div class="col-sm-6 awards-box">
                    <img src="public/img/3.jpg" alt="Achievements by NSS" class="awards-image">
                </div>			
        </section>		
    </div> 
    <div class="row">
    </div>
    <div style="text-align:center">
  		<span class="dot"></span> 
  		<span class="dot"></span> 
  		<span class="dot"></span>   		
	</div>
</div>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("awards-section");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 3000); 
    }
</script>
