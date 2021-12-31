<?php 

session_start();


if (!isset($_SESSION['username'])){
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trek Voyagers</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome link  -->
    <script src="https://kit.fontawesome.com/c9fbbb82ef.js" crossorigin="anonymous"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="welcome.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <img class="logo" src="Trek 1.png">

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#reviews">review</a>
        <a href="#contact">contact us</a>
    </nav>

    <div class="icons">
        <i class="fas fa-user" id="login-btn"></i>
    </div>

</header>

<!-- header section ends -->

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
    <?php echo  $_SESSION['username']  ?>    
    
    
    <a href="logout.php">Logout</a>
    </form>

</div>

<!-- login form container  -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h1>TREK VOYAGER</h1>
        <p>discover new places with us, adventure awaits</p>
        <a href="#" class="btn">discover more</a>
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
            <input type="submit" class="btn" value="book now">
        </form>

    </div>

</section>

<!-- book section ends -->

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

    <p class="intro"> 
        We pride our selves in being the first the first travelling agency of our kind.
       We offer a wide range of services to make your travelling experience unforgetable 
       ane memorable.
   </p>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-record-vinyl"></i>
            <h3>Photography</h3>
            <p>
                Access to the proffesional photographers is provided to ensure that all 
                the beautiful moments you create with us are frozen in time. 
            </p>
        </div>
        <div class="box">
            <i class="fas fa-bus"></i>
            <h3>Transportation</h3>
            <p>
                Travelling in a new place is a hustle. We offer access to your desired 
                transportation medium from a range of luxury vehicles to bicycles or motorcycles.
            </p>
        </div>
        <div class="box">
            <i class="fas fa-directions"></i>
            <h3>Local Tourguides</h3>
            <p>
                To help you immerse yourself in the different cultures in an effort to experience
                the full local experience, our tour guides are local and can also be your 
                translators. 
            </p>
        </div>
        <div class="box">
            <i class="fas fa-shield-alt"></i>
            <h3>Security</h3>
            <p>
                It is becoming increasingly dangerous for tourists to travel. That is not the case
                you travel with us, your security is our highest priority.
            </p>
        </div>
        <div class="box">
            <i class="fas fa-language"></i>
            <h3>Translator</h3>
            <p>
                To help you immerse yourself in the different cultures in an effort to experience
                the full local experience, our tour guides are local and can also be your 
                translators. 
            </p>
        </div>
        <div class="box">
            <i class="fas fa-info"></i>
            <h3>Help</h3>
            <p>
                To help you immerse yourself in the different cultures in an effort to experience
                the full local experience, our tour guides are local and can also be your 
                translators. 
            </p>
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
            <img src="images/p-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> mumbai </h3>
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> hawaii </h3>
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/p-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> sydney </h3>
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/p-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> tokyo </h3>
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> egypt </h3>
               
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Los Angeles </h3>
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Vermont </h3>
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Greece </h3>
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <a name="reviews"></a>

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="">

        <div class="">

            <div class="">
                <div class="box">
                    <img src="Review/rev 1.jpg" alt="">
                    <h3>Amanda Lawrence</h3>
                    <p>This is the best travel agency I have used in all my travels around 
                      the world. The have such good employees and they are really helpful.
                      Their services really are 24/7 </p>
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
                    <img src="Review/rev 2.jpg" alt="">
                    <h3>Ryan Reynolds</h3>
                    <p> So the local tourguides are the best really helped me experience 
                        the full local experience. He helped me find all the popular local food
                        spots and he was an amazing translator.
                    </p>
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
                    <img src="Review/rev 3.jpg" alt="">
                    <h3>Jason Statham</h3>
                    <p>My wife and I met on a travel group on this agency. The networking they provided
                      was amazing. 
                    </p>
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
                    <img src="Review/rev 4.jpg" alt="">
                    <h3>John Meyer</h3>
                    <p>This is an amazing agency, my company really did get the full worth of
                      our money.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
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

        <form class="contact-form">
            <div class="inputBox">
                <input type="text" placeholder="name" class="name" required>
                <input type="email" placeholder="email" class="email" required>
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number" class="number" >
                <input type="text" placeholder="subject" class="subject" required>
            </div>
            <textarea placeholder="message" class="message" id="" cols="30" rows="10" required></textarea>
            <input type="submit" class="btn" value="send message">

         <script src="https://smtpjs.com/v3/smtp.js"></script>

         <script>
           

                //function to send email on click

                const form = document.querySelector('.contact-form');

                function sendMsg(e) {
                    e.preventDefault();
                 const  name = document.querySelector('.name'),
                        email = document.querySelector('.email'),
                        number = document.querySelector('.number'),
                        subject = document.querySelector('.subject'),
                        message = document.querySelector('.message');
                  

                    Email.send({
                    SecureToken : "42d86124-2fee-44fe-86ba-87db37f002cd",
                    To : 'pendoc15@gmail.com',
                    From : email.value,
                    Subject : "Contact Form",
                    Body : "message.value"
                }).then(
                message => alert(message)
                );
                }

//event listener
form.addEventListener('submit', sendMsg)


         </script>



        </form>

    </div>
    
</section>

<!-- contact section ends -->

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>
                We're the best in our field, and it's all thanks to the incredible relationships we've formed 
                with our clients. Unlike our competitors,we're invested in developing a personal connection
                with each and every one of our customers, by providing quality service and being available 
                to you 24/7.
              </p>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact us</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>

    </div>

    <h1 class="credit"> 
    <p>
        All Rights Reserved. &copy; 2021 
        TREK VOYAGERS  |  Designed By : PENDO
    </p>
    </h1>

</section>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>