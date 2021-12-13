<?php
    session_start();
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel around India </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" href="images/faviconn.ico">

    <!-- font link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!--  css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><img src="./images/Logo.png">Travel Next</a>


    
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        
    </nav>

   
    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
        
    </div>

    <p class="navbar-text pull-right">

    echo "Hello".$_SESSION['us'];
        // <strong><h1>rahul</h1></strong>
    </p>
    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="login.php" method="post">
        <h3>login</h3>
        <input type="email" name="uname" class="box" placeholder="enter your email">
        <input type="password" name="pass" class="box" placeholder="enter your password">
        <input type="submit" name="sub" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
     
    </form>
        <form action="login2.php" method="post">
            <h3>Register</h3>
            <input type="text" name="users" class="box" placeholder="enter your name">
            <input type="email" name="uname" class="box" placeholder="enter your email">
            <input type="password" name="pass" class="box" placeholder="enter your password">
            <input type="submit" name="sub2" value="Register now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
           
        </form>
       
        
    </div>
   
    
</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Take only memories, leave only footprints</h3>
        <p>Find your best place</p>
    
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- book section starts  -->

<section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="place name">
            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date">
            </div>
     
            <a href="https://www.makemytrip.com/">
                <input type="button" class= "btn" value="book now" />
             </a>

             </a>

        </form>

    </div>

</section>

<!-- book section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/p-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> mumbai </h3>
                <p>The Gateway of India is situated in the city of Mumbai.The Gateway of India is a monument that marks India's chief ports and is a major tourist attraction for visitors</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    
                </div>
                <div class="price"> $99.00 <span>$120.00</span> </div>
                <a href="https://www.makemytrip.com/" class="btn">View Package</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Agra </h3>
                <p> Taj Mahal is actually a mausoleum built to house the remains of Mumtaz Mahal, the wife of Mughal Emperor Shah Jahan. The building is known for its extensive use of white marble.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $89.00 <span>$119.00</span> </div>
                <a href="https://www.makemytrip.com/" class="btn">View Packages</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Jaisalmer </h3>
                <p>Located amidst the golden sands of the Thar Desert, the Jaisalmer Fort was built by the Bhati Rajput King Rawal Jaisal. It remained an important trade center during the medieval era.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                   
                    
                </div>
                <div class="price"> $100.00 <span>$139.00</span> </div>
                <a href="https://www.makemytrip.com/" class="btn">View Packages</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Uttar Pradesh </h3>
                <p> Also known by the names Kashi and Banaras, Varanas is known to be the spiritual capital of India. The city is also known for its Ghats located on the banks of the Ganges River.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price"> $80.00 <span>$110.00</span> </div>
                <a href="https://www.makemytrip.com/" class="btn">View Packages</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Aurangabad
                </h3>
                <p>Ajanta and Ellora Caves are rock cut Buddhist caves since 2nd century BC-800 AD. The Ajanta Caves consist of rock cut monuments dedicated to the ancient Buddhist traditions</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    
                </div>
                <div class="price"> $95.00 <span>$130.00</span> </div>
                <a href="https://www.makemytrip.com/" class="btn">View Packages</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Goa </h3>
                <p> Old Goa refers to historic town that served as the seat of the Portuguese. The city is also a UNESCO World Heritage Site due to its unique Baroque style architecture and churches.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="https://www.makemytrip.com/" class="btn">View Packages</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Book Domestic and International Hotels Online!</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>We are passionate about helping food travelers eat and drink better while traveling the world.</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safety guide</h3>
            <p>The aim is to meet increased safety demands towards authorised tour operators and travel agencies, as well as assisting operators in determining the safety!</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>We will also provide travelling few places around the world!</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Purchasing flight tickets and confirming your flight booking is the key aspect of planning a trip!</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Adventure travel is hugely popular in India, as there is such a wide range of possible activities.!</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                
                <a href="#" class="btn">know more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                
                <a href="#" class="btn">know more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                
                <a href="#" class="btn">know more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
               
                <a href="#" class="btn">know more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                
                <a href="#" class="btn">know more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                
                <a href="#" class="btn">know more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                
                <a href="#" class="btn">know more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                
                <a href="#" class="btn">know more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                
                <a href="#" class="btn">know more</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.jpg" alt="">
                    <h3>Tom Hanks</h3>
                    <p>I have got the best travel package from there. I purchased many travel packages from travel next and they are the best as they are 24*7 available, they are always responsive, professional.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.jpg" alt="">
                    <h3>Kaila Avent</h3>
                    <p>The trip was well planned and organised by the agent. Everything was on time and we were provided enough breaks to enjoy the moments. Overall , a very nice trip </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                       
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.jpg" alt="">
                    <h3>William Hemsworth</h3>
                    <p> The team is quite professional and very cooperative. For a hassle free travelling and booking experience, never doubt on this company. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.jpg" alt="">
                    <h3>Andrea</h3>
                    <P>Great service. It would have been impossible for us to take the north Sikkim trip without your assistance. We got immediate response for any query or help from we care travel agents.</P>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic5.jpg" alt="">
                    <h3>Daniella Amato</h3>
                    <p>The itinerary was excellent, professional and knowledgeable advisor, the properties were fantastic, and all arrangements went smoothly. Thank you Travel Next team.</p>
                    <div class="stars">

                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="login2.php" method="post">
            <div class="inputBox">
                <input type="text" placeholder="name" name="namec">
                <input type="email" placeholder="email" name="emailc">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number" name="numberc">
                <input type="text" placeholder="subject" name="subjectc">
            </div>
            <textarea placeholder="message" name="messagec" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message" name="sub3">
        </form>

    </div>
    
</section>

<!-- contact section ends -->


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Travel and Tour is an Indian online travel company founded in 2021 .The company provides online travel services including flight tickets, domestic and international holiday packages, hotel reservations, rail, and bus tickets..</p>
        </div>
        <!--
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div> -->
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit">  &#xA9 <span> Your Copyright </span> | all rights reserved! </h1>

</section>



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
?>