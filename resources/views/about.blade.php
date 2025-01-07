<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIM About</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
</head>
<body>
    <header class="header header__about">
        <nav>
            <div class="nav__bar">
                <div class="logo nav__logo">
                    <a href="#"><img src="assets/pim logo4.png" alt="logo"></a>
                </div>
                <div class="nav__menu__btn" id="menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="product">Product</a></li>
                <li><a href="service">Service</a></li>
                <!-- <li><a href="">Contact</a></li> -->
                <button class="btn">Contact</button>
            </ul>
        </nav>
        <div class="section__container header__container">
            <div class="header__content">
                <h1> About Me </h1>
                <div class="header__btn">
                    <button class="btn">Read More</button>
                </div>
            </div>
        </div>
    </header>
    <section class="section__container experience__container" id="about">
        <div class="experience__image">
            <img src="../assets/pelletmill3.jpg" alt="experience">
        </div>
        <div class="experience__content">
            <p class="section__subheader">SIAPA KAMI</p>
            <h2 class="section_header">
                Berdiri sejak 2018
            </h2>
            <p class="section__description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Libero ratione praesentium fuga ipsam, dolorem porro omnis,
                rem quasi rerum consequuntur alias impedit tenetur
                reprehenderit cumque voluptates quidem quam fugit laudantium
                cum necessitatibus? Neque, porro! Magnam, placeat dolorum,
                in eveniet vitae, dicta maxime ea rerum architecto odit est
                consequuntur debitis qui?
            </p>
            <button class="btn">Read More</button>
        </div>
    </section>
    <section class="customisation">
        <div class="section__container customisation__container">
            <p class="section__subheader">OUR CUSTOMISATION</p>
            <h2 class="section__header">
                Welding service matched
            </h2>
            <p class="section__description">
                Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Maiores, omnis?
            </p>
            <div class="customisation__grid">
                <div class="customisation__card">
                    <h4>100+</h4>
                    <p>Total Project</p>
                </div>
                <div class="customisation__card">
                    <h4>5</h4>
                    <p>Big Project</p>
                </div>
                <div class="customisation__card">
                    <h4>23</h4>
                    <p>Medium Project</p>
                </div>
                <div class="customisation__card">
                    <h4>70+</h4>
                    <p>Home Project</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section__container testimonial__container" id="client">
        <p class="section__subheader">CLIENT TESTIMONIALS</p>
        <h2 class="section__header">100% Approved By Customers</h2>
            <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
                <div class="swiper-slide">
                    <div class="testimonial__card">
                        <img src="../assets/booster_pump2.jpg" alt="testimonial1">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quia error nihil sequi fugiat sed consequuntur quod nemo
                            qui
                        </p>
                        <h4>- Sarah T.</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial__card">
                        <img src="../assets/pumbling1.jpg" alt="testimonial1">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quia error nihil sequi fugiat sed consequuntur quod nemo
                            qui
                         </p>
                        <h4>- Sarah T.</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial__card">
                        <img src="../assets/pumbling2.jpg" alt="testimonial1">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quia error nihil sequi fugiat sed consequuntur quod nemo
                            qui
                        </p>
                        <h4>- Sarah T.</h4>
                    </div>
                </div>
            </div>
            
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        
            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev"></div> -->
            <!-- <div class="swiper-button-next"></div> -->
        
            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
    </section>
    <section class="contact">
        <div class="section__container contact__container">
            <div class="contact__content">
                <p class="section__subheader">CONTACT US</p>
                <h2 class="section__header">Imagine Your Life is Better</h2>
                <p class="section__description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cum repellat tenetur eligendi ipsa fuga eaque commodi,
                    eum optio atque culpa?
                </p>
                <div class="contact__btns">
                    <button class="btn">Our Services</button>
                    <button class="btn">Contact Us</button>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="section__container subscribe__container">
            <div class="subscribe__content">
                <p class="section__subheader">OUR NEWSLETTER</p>
                <h2 class="section__header">Subscribe To Our Newsletter</h2>
                <p class="section__description">
                    Subscribe to our newsletter and recive exclusive content
                    insights, and special offers delivered directly to your
                </p>
            </div>
            <div class="subscribe__form">
                <form action="/">
                    <input type="text" placeholder="Your Email">
                    <button class="btn">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="section__container footer__container">
            <div class="footer__col">
                <div class="logo footer__logo">
                    <a href="#"><img src="../assets/pim logo9.png" alt="logo"></a>
                </div>
                <p class="section__description">
                    with a rich legacy spanning 25 years, our commitment .to 
                    in car servicing is unwavering
                </p>
                <ul class="footer__socials">
                    <li>
                        <a href="#"><i class="ri-facebook-fill"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-instagram-fill"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-youtube-fill"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-google-fill"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Our Services</h4>
                <ul class="footer__links">
                    <li><a href="#">Argon Welding</a></li>
                    <li><a href="#">MMA Welding</a></li>
                    <li><a href="#">MIG Welding</a></li>
                    <li><a href="#">Acytilin Welding</a></li>
                    <li><a href="#">Miliing/bubut</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Contact Info</h4>
                <ul class="footer__links">
                    <li>
                        <p>
                            Experience the magic of a rejuvenated ride as we
                            with precision care
                        </p>
                    </li>
                    <li>
                        <p>Phone: <span>+62 85895272037</span></p>
                    </li>
                    <li>
                        <p>Email: <span>didik4892@gmail.com</span></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="footer__bar">
        Copyright © 2024 Pratama Industries Technology. All rights reserved
    </div>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>