<?php

$title = 'Contact Us | Viphon';

session_start();

// Connection to database
require '../dbconnection.php';

$content = 
'
<section id="secondary-hero" class="secondary-hero-image3">
    <div class="secondary-hero-container">
        <div class="secondary-info">
            <h1>Contact Us</h1>
        
        </div>
    </div>
</section>

<section id="contact">
    <div class="contact-container">
        <div class="contact-details">
            <div class="contact-details-item">
                <i class="fas fa-map-marker-alt"></i>
                <div class="contact-topic">
                    <h2>Location</h2>
                </div>
                <div class="contact-info">
                    <p>London, UK</p>
                </div>
            </div>
            <div class="contact-details-item">
                <i class="fas fa-phone"></i>
                <div class="contact-topic">
                    <h2>Telephone</h2>
                </div>
                <div class="contact-info">
                    <p>+44 (0) 20 3576 3862</p>
                </div>
            </div>
            <div class="contact-details-item">
                <i class="fas fa-envelope"></i>
                <div class="contact-topic">
                    <h2>Email</h2>
                </div>
                <div class="contact-info">
                    <p>info@viphon.co.uk</p>
                </div>
            </div>
        </div>

        <div class="contact-border">

        </div>

        <div class="contact-form">
            <div class="contact-form-title">
                <h2>Send us a message</h2>
                <!-- <p>If you would like to get in touch and work together soon, please reach out to us and we will get back to you soon</p> -->
            </div>
            <div class="contact-form-container">
                <form action="sendMessage.php" method="POST">
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Enter your name">
                    </div>
                    <div class="input-box">
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="input-box message-box" placeholder="Your Message">
                        <textarea id="" name="message" rows="4" cols="50"></textarea>
                    </div>
                    <div class="button">
                        <input type="submit" value="Send Now" name="submit" >
                    </div>
                    </form>

            </div>
        </div>
    </div>
</section>

';

require '../layout.php';

?>