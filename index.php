<?php
session_start();
if(!isset($_SESSION["user"])){

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Dashboard</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="STYLE.css">
</head>

  <body style="background-image: url('k.jpg');">

<section>
 
        
        
      
         
<nav>
                    <div class="logo">
                    <h2>MINTY GREEN</h2>
                       <img class="pic1" src="logo.jpg.png" height="100px" width="80px" >
                    </div>
                    <ul>    
                       <div class="menuwords">
                        <a href="HOME.html"><li>HOME</li></a>
                        <a href="MENU.html"><li>MENU</li></a>
                        <a href="about.html"><li>ABOUT US</li></a>
                        <a href="COTANCT US.html"><li>CONTACT US</li></a>
                       </div>
                    
                        <div class="facebook"><a href="https://www.facebook.com/HyaMari"><img src="facebook.png" alt="Minty Green Facebook" style="width:42px;height:42px;"></a></div>
                        <div class="instagram"><a href="https://instagram.com/mintygreen007?igshid=OGQ5ZDc2ODk2ZA=="><img src="instagram.png" alt="Minty Green Instagram" style="width:42px;height:42px;"></a></div>
                        <div class="cart"><a href="MENU.html"><img src="cart.png" alt="My Cart" style="width:42px;height:42px;"></a></div>
                        <div class="login"><a href=""><img src="login.png" title="Login" alt="Login" style="width:42px;height:42px;"></a></div>
                        <div class="logout"><a href="logout.php" class="btn btn-warning">LOGOUT</a></div>
                      </nav>  
                
             
            <div class="main">
                <div class="men_text">
                    <h1>DELIGHTING TASTES ELEVATING <span>QUALITY</span><br>EXCELLING IN SERVICE</h1>
                    <p>Welcome to Minty Green, where culinary excellence meets the freshest ingredients to bring you a dining experience like no other. Our mission is to delight your taste buds with a symphony of flavors that celebrate the rich tapestry of global cuisine. From farm to table, we carefully curate our ingredients, ensuring that every bite you take is a burst of freshness and goodness. Whether you're a fan of international delicacies or crave the comfort of home-cooked meals, Minty Green has something for everyone. Explore our diverse menu, thoughtfully crafted by our talented chefs, and embark on a culinary journey that will leave you craving more. We invite you to savor the essence of Minty Green, where every meal is a celebration of taste, quality, and the joy of dining.

                    </p>
                </div>

                <div class="main_img">
                    <img src="ICED_STRAWBERRY_LATTE__1_-removebg-preview.png" width="900" height="900">
                </div>
            </div>
            <div class="menu" id="menu">
            <div class="menu-header">
                <h2>------------- FOODS AND DRINKS --------------</h2>
            </div>
            <div class="menu-content">
              <div class="container1">
                <div class="slideshow-container">
                  <div class="mySlides fade">
                    <img src="16.png" style="width:100%" alt="Cupcake 1">
                  </div>
                  <div class="mySlides fade">
                    <img src="17.png" style="width:100%" alt="Cupcake 7">
                  </div>
                  <div class="mySlides fade">
                    <img src="18.png" style="width:100%" alt="Cupcake 6">
                  </div>
                  <a class="prev" onclick="plusSlides1(-1)">❮</a>
                  <a class="next" onclick="plusSlides1(1)">❯</a>
                  <br>
                  <div style="text-align:center">
                    <span class="dot" onclick="currentSlide1(1)"></span>
                    <span class="dot" onclick="currentSlide1(2)"></span>
                    <span class="dot" onclick="currentSlide1(3)"></span>
                  </div>
                  <div class= "foods">Cupcakes and Cakes</div>
              </div>
            
              <div class="container2">
                <div class="slideshow-container">
                  <div class="mySlides2 fade2">
                    <img src="15.png" style="width:100%" alt="Iced Choco Latte">
                  </div>
                  <div class="mySlides2 fade2">
                    <img src="13.png" style="width:100%" alt="Iced Mocha">
                  </div>
                  <div class="mySlides2 fade2">
                    <img src="ICE CARAMEL MACCIATO.jpg" style="width:100%" alt="Ice Caramel Macchiato">
                  </div>
                  <a class="prev2" onclick="plusSlides2(-1)">❮</a>
                  <a class="next2" onclick="plusSlides2(1)">❯</a>
                  <br>
                  <div style="text-align:center">
                    <span class="dot2" onclick="currentSlide2(1)"></span>
                    <span class="dot2" onclick="currentSlide2(2)"></span>
                    <span class="dot2" onclick="currentSlide2(3)"></span>
                  </div>
                  <div class= "foods1">Drinks</div>
                </div>
              </div>

              <div class="container3">
                <div class="slideshow-container">
                  <div class="mySlides3 fade3">
                    <img src="10.png" style="width:100%" alt="Bundle 1">
                  </div>
                  <div class="mySlides3 fade3">
                    <img src="11.png"width:100%" alt="Bundle 2">
                  </div>
                  <div class="mySlides3 fade3">
                    <img src="12.png" style="width:100%" alt="Bundle 2">
                  </div>
                  <a class="prev3" onclick="plusSlides3(-1)">❮</a>
                  <a class="next3" onclick="plusSlides3(1)">❯</a>
                  <br>
                  <div style="text-align:center">
                    <span class="dot3" onclick="currentSlide3(1)"></span>
                    <span class="dot3" onclick="currentSlide3(2)"></span>
                    <span class="dot3" onclick="currentSlide3(3)"></span>
                  </div>
                  <div class= "foods2">Bundles</div>
                </div>
              </div>
              <a href="MENU1..html" class="about_btn">Order Now</a>
            </div>
            
            <script>
              let slideIndex1 = 1;
              let slideIndex2 = 1;
              let slideIndex3 = 1;
              let autoSlide = true;
            
              showSlides1(slideIndex1);
              showSlides2(slideIndex2);
              showSlides3(slideIndex3);
            
              function plusSlides1(n) {
                autoSlide = false;
                showSlides1(slideIndex1 += n);
              }
            
              function currentSlide1(n) {
                autoSlide = false;
                showSlides1(slideIndex1 = n);
              }
            
              function plusSlides2(n) {
                autoSlide = false;
                showSlides2(slideIndex2 += n);
              }
            
              function currentSlide2(n) {
                autoSlide = false;
                showSlides2(slideIndex2 = n);
              }

              function plusSlides3(n) {
                autoSlide = false;
                showSlides3(slideIndex3 += n);
              }
            
              function currentSlide3(n) {
                autoSlide = false;
                showSlides3(slideIndex3 = n);
              }
            
              function showSlides1(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) { slideIndex1 = 1 }
                if (n < 1) { slideIndex1 = slides.length }
                for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex1 - 1].style.display = "block";
                dots[slideIndex1 - 1].className += " active";
                autoSlide = true; // Reset autoSlide flag when showing a slide manually
              }
            
              function showSlides2(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides2");
                let dots = document.getElementsByClassName("dot2");
                if (n > slides.length) { slideIndex2 = 1 }
                if (n < 1) { slideIndex2 = slides.length }
                for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex2 - 1].style.display = "block";
                dots[slideIndex2 - 1].className += " active";
                autoSlide = true; // Reset autoSlide flag when showing a slide manually
              }

              function showSlides3(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides3");
                let dots = document.getElementsByClassName("dot3");
                if (n > slides.length) { slideIndex3 = 1 }
                if (n < 1) { slideIndex3 = slides.length }
                for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex3 - 1].style.display = "block";
                dots[slideIndex3 - 1].className += " active";
                autoSlide = true; // Reset autoSlide flag when showing a slide manually
              }
            
              function autoShowSlides() {
                if (autoSlide) {
                  plusSlides1(1);
                  plusSlides2(1);
                  plusSlides3(1);
                }
              }
            
              // Add automatic slideshow
              setInterval(autoShowSlides, 5000); // Change the interval as needed (in milliseconds)
            </script>
            
            
            
            </div>
        </div>
            </div>
        </section>

        <!-- ABOUT -->
    <div class="about" id="About">
        <div class="about_class">
            <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FHyaMari%2Fvideos%2F285552683846247%2F&show_text=false&width=267&t=0" width="500" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            <div class="about_text">
                <h3>WHY Choose Us?</h3>
                <p>
                    Selecting "Minty Green" as your dining destination is a decision rooted in the pursuit of freshness, flavor, and a unique dining experience. Our restaurant takes its name from the refreshing and invigorating qualities of mint, and our commitment to serving fresh, seasonal ingredients. Our menu is a delightful fusion of culinary traditions, all crafted with a focus on using the highest quality, locally sourced produce. From our crisp salads to our zesty entrees, every dish bursts with vibrant, mouthwatering flavors. The soothing, green-themed ambiance of our restaurant creates an inviting atmosphere that is perfect for any occasion, be it a casual lunch, a romantic dinner, or a special celebration. At Minty Green, we believe that exceptional food and a relaxing environment are essential for a memorable dining experience, and we're dedicated to ensuring your satisfaction with every visit. Join us in celebrating the art of fresh and flavorful cuisine at Minty Green and embark on a culinary journey that truly invigorates your taste buds.
                </p>
            </div>
            
        </div>
    </div>


    </body>
    </html>


