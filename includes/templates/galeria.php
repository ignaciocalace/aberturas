 <!-- Slideshow container -->
 <div class="slideshow-container">

     <!-- Full-width images with number and caption text -->
     <div class="mySlides fade">
         <picture class="overlay">
             <source srcset="build/img/<?php echo $trabajo['foto1']; ?>.webp" type="image/webp">
             <source srcset="build/img/<?php echo $trabajo['foto1']; ?>.jpg" type="image/jpeg">
             <img loading="lazy" alt="trabajo">
         </picture>
         <div class="text">Caption Text</div>
     </div>


     <!-- Next and previous buttons -->
     <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
     <a class="next" onclick="plusSlides(1)">&#10095;</a>

 </div>
 <br>

 <!-- The dots/circles -->
 <div style="text-align:center">
     <span class="dot" onclick="currentSlide(1)"></span>
     <span class="dot" onclick="currentSlide(2)"></span>
     <span class="dot" onclick="currentSlide(3)"></span>
 </div>