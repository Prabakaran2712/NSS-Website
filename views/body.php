<section class="about-section">
      
            <div class="col span_1_of_2 about-box">
                <h1 class="about-heading">HISTORY OF NSS</h1>
                <p class="about-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. </p>  
            </div>
            <div class="col span_1_of_2 about-box">
                <img src="public\img\1.jpg" alt="Digisolve app on Laptop" class="laptop-image">
				
            </div>
        
    </section>
    <section class="eve-act-section" id ="eve-act">
		<h2 class="eve-act-heading1">Our WORKS</h2>
		<div class="row">
			<div class="col span_1_of_4">
				<div class="eve-act-box" onclick="send()"><br>			
					<div>					
						<h4 class="eve-act-heading">Session</h4>	
						<p class="eve-act-subheading">2021-2022</p>	
					</div>
					<div>
						<ul>
							<li><i class="fas fa-check small-icon"></i><a target="_blank" href="resources/ext/INSTRUCTION TO CANDIDATES EXAM FEB2022.pdf">1st pdf</a></li>	
						</ul>
					</div>					
				</div>

			</div>
			<div class="col span_1_of_4">
				<div class="eve-act-box"><br>					
					<div>					
						<h4 class="eve-act-heading">Upcoming Session</h4>	
						<p class="eve-act-subheading">2019-2020</p>					
					</div>
					<div>
						<ul>
							<li><i class="fas fa-check small-icon"></i>1st pdf</li>							
						</ul>
					</div>
				</div>
			</div>
            <div class="col span_1_of_4">
				<div class="eve-act-box"><br>					
					<div>					
						<h4 class="eve-act-heading">Camp</h4>	
						<p class="eve-act-subheading">2019-2020</p>					
					</div>
					<div>
						<ul>
							<li><i class="fas fa-check small-icon"></i>1st pdf</li>							
						</ul>
					</div>
				</div>
			</div>
            <div class="col span_1_of_4">
				<div class="eve-act-box"><br>					
					<div>					
						<h4 class="eve-act-heading">Magazine</h4>	
						<p class="eve-act-subheading">2019-2020</p>					
					</div>
					<div>
						<ul>
							<li><i class="fas fa-check small-icon"></i>1st pdf</li>							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="slide-show">
        <div class="row">
            <h2 class="award-heading">Our Awards</h2>
		  <h3 class="award-sub-heading">An award recognizing your talent is an honor. That matters a lot to me.</h3>
	   </div>
		<section class="awards-section">
			<div class="row">
				<div class="col span_1_of_2 awards-box">
					<h2 class ="awards-subheading">NATIONAL SERVICE SCHEME</h2>
					<p class="awards-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>					
				</div>
				<div class="col span_1_of_2 awards-box">
					<img src="public\img\1.jpg" alt="Achievements by NSS" class="awards-image">
				</div>			
			</div>			
		</section>
		<section class="awards-section">
			<div class="row">
				<div class="col span_1_of_2 awards-box">
					<h2 class ="awards-subheading">NATIONAL SERVICE SCHEME</h2>
					<p class="awards-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>					
				</div>
				<div class="col span_1_of_2 awards-box">
					<img src="public\img\2.jpg" alt="Achievements by NSS" class="awards-image">
				</div>			
			</div>			
		</section>
		<section class="awards-section">
			<div class="row">
				<div class="col span_1_of_2 awards-box">
					<h2 class ="awards-subheading">NATIONAL SERVICE SCHEME</h2>
					<p class="awards-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>					
				</div>
				<div class="col span_1_of_2 awards-box">
					<img src="public\img\3.jpg" alt="Achievements by NSS" class="awards-image">
				</div>			
			</div>			
		</section>		
	</div>
	<br>
	<div style="text-align:center">
  		<span class="dot"></span> 
  		<span class="dot"></span> 
  		<span class="dot"></span>   		
	</div>
    <section class="query-section">		
        <div class="row">
            <h2 class="query-heading">Contact Us</h2>		  
	   </div>
		<div class="row">
			<form method="post" class="query-form">
				<div class="row">
					<div class="col span_1_of_3">
						<label for = "name" class="query-label">Name</label>
					</div>
					<div class="col span_2_of_3">
						<input type="text" name="name" id="name" placeholder="Your Name" required>
					</div>
				</div>
				<div class="row">
					<div class="col span_1_of_3">
						<label for ="message" class="query-label">Query</label>
					</div>
					<div class="col span_2_of_3">
						<textarea name="message" id="message" placeholder="Your message" required></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col span_1_of_3">
						&nbsp;
					</div>
					<div class="col span_2_of_3">
						<input type="submit" onclick="send()">
					</div>
				</div>
			</form>
		</div>
	</section>	
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
          setTimeout(showSlides, 30000); 
        }        
        function send()
        {
            alert("Hello");
        }
	</script>
