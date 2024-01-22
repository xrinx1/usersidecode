<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>                
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Adamina&:wght@400family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>
<body>
<!-- navigation start -->
<?php include 'navbar.php'; ?>
<!-- navigation end -->

<div style="margin:auto; width:60%;">
  <!--carousel-->
  <div id="carouselExample" class="carousel slide"data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assests/about_us/carousel/image1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assests/about_us/carousel/image2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assests/about_us/carousel/image3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <!--carousel end-->



  
  <!--product cards section-->
 
  <div id="product_cards">
    <p class="text-center mb-5" style="font-family: Adamina; color: rgb(290, 90, 188); font-size: 56px; line-height: 1.4;">Our Collection</p>
    <div class="product_card d-flex align-items-center">
      <div class="owl-carousel owl-carousel1 owl-theme">
                 <div class="product_item">
                    <form action="product.php" method="POST">
                      <button class="btn2" name="selected_product_from_search" value="$view_product_id_collection" type="submit">
                      <div class="product_bg_image" style="background-image: url('$firstImagePath');">
                        <div class="blur_layer d-flex align-items-center">
                          <div class="product_image" style="background-image: url('$firstImagePath');"></div>
                        </div>
                      </div>
                     
                      </button>
                    </form>
                  </div>
                  
              
         
        
      </div>
      <div class="product_prev align-self-center"></div>
      <div class="product_next align-self-center"></div>
    </div>
  </div>
  <!--product cards section end-->
  <hr style="color:pink">
  <!--brag-->
 
      </div>
    </div>
  </div>
  <!--brag end-->
  <hr style="color:pink">
 
  <!--testimonials-->

  <!--testimonials end-->
  <!--contact us-->
  <div id="contact_us" style="padding-bottom: 100px;">
    <div class="d-flex justify-content-evenly">
      
      <div class="d-flex flex-column">
        <p class="text-center mb-4" style="font-family: Adamina; color: rgb(18, 70, 143); font-size: 36px; line-height: 1.4;">Contact Us</p>
        <div class="contact_us_items d-flex flex-row mb-4">
          <div class="contact_us_image mx-3"><img src="assests/contact_us/image1.jpeg" style="width:100%;height:100%;"></img></div>
          <div class="d-flex flex-column mx-3">
          <span class="contact_us_name my-1">Kathmandu</span>
          </div>
        </div>
        <div class="contact_us_items d-flex flex-row mb-4">
          <div class="contact_us_image mx-3"><img src="assests/contact_us/emai.png" style="width:100%;height:100%;"></img></div>
          <div class="d-flex flex-column mx-3">
            <span class="contact_us_name my-1">General Enquiries</span>
            
          </div>
        </div>
        <div class="contact_us_items d-flex flex-row mb-4">
          <div class="contact_us_image mx-3"><img src="assests/contact_us/call.png" style="width:100%;height:100%;"></img></div>
          <div class="d-flex flex-column mx-3">
            <span class="contact_us_name my-1">Call Us</span>
            <span class="contact_us_text my-1">+977-38793919</span>
          </div>
        </div>
        <div class="contact_us_items d-flex flex-row mb-4">
          <div class="contact_us_image mx-3"><img src="assests/contact_us/time.png" style="width:100%;height:100%;"></img></div>
          <div class="d-flex flex-column mx-3">
            <span class="contact_us_name my-1">Our Timing</span>
            <span class="contact_us_text my-1">Mon - Sun : 09:00 AM - 10:00 PM</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="about_us">
    <div class="d-flex justify-content-around">
      <div class="about_us_image mx-2" style="background-image: url('assests/about_us/about_us.webp');"></div>
      <div class="about_us_text mx-3">
      <p class="text-center my-2" style="font-family: Adamina; color: rgb(143, 70, 143); font-size: 36px;">About Us</p>
        <div class="text-center" style="font-size:18px; overflow:hidden;">
        Connect with us on social media to stay updated on the latest trends, promotions, and customer stories. We love hearing from our community and invite you to share your Look Eyewear experience.

Discover the perfect pair that reflects your style and enhances your vision. Look good. See better. Experience Look Eyewear today!
        </div>
      </div>
    </div>
  </div>
  <!--contact us end-->
</div>
</body>
<script>feather.replace()</script>
<script src="script.js"></script>
</html>