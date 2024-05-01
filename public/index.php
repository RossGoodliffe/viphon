<?php

$title = 'Viphon | Home';

$content = 
'
<section id="hero">
<div class="hero-container">
    <div class="info">
        <h1>Viphon Limited</h1>
        <h2>Media Construction Specialists</h2>
        <p>specifying, managing and delivering</p>
        <p>complex media projects</p>
    
        <a href="/#about-home"><i class="arrow down"></i></a>
    </div>
</div>
</section>

<section id="about-home">
<div class="about-container">
    <div class="about-images">
        <div class="image-stack">
            <div class="image-stack-item image-stack-item-main">
                <img src="./img/about-stack-main.jpg" alt="">
            </div>
            <div class="image-stack-item image-stack-item-2 stackHidden stackItem">
                <img src="./img/about-stack2.png" alt="">
            </div>
            <div class="image-stack-item image-stack-item-3 stackHidden stackItem">
                <img src="./img/about-stack1.jpg" alt="">
            </div>
            <div class="image-stack-item image-stack-item-4 stackHidden stackItem">
                <img src="./img/about-stack4.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="about-text">
        <div class="about-text-heading">
            <h2>About</h2>
        </div>
        <div class="about-text-content">
            <p>Viphon is run by media construction specialist Richard Goodliffe, who has been managing the construction of media projects for over 25 years.</p>
            <p>Over this time Richard and our team have undertaken hundreds of projects for media companies both in the UK and internationally.</p>
            <p>Whilst we are happy to undertake design works internally or with our own expert associates, we are also very pleased to work with the client or developer`s own professional teams as required.</p>
            
        </div>
        <div class="about-text-button">
            <!-- <a href="/projects.html">View Projects</a> -->
        </div>
    </div>
</div>

</section>

<section id="projects-home">
<div class="projects-home-container">
    <div class="projects-home-text">
        <div class="projects-home-text-position">
            <h2>Previous Projects</h2>
            <p>Interested in discovering more about our previous work?</p>
        </div>

    </div>
    <div class="projects-home-link">
        <a href="project" class="projects-home-link-container">Learn More</a>
    </div>
</div>
</section>


<section id="services-home">

<div class="services-container">
    <div class="services-banner">
        <h2>Our Services</h2>
    </div>
    <div class="services-home">
        <div class="service-item tile tile1">
            <i class="fas fa-tasks fa-3x"></i>
            <h3>Project Specification</h3>
            <p>We can work with your team and external specialists, to produce a specification for your new facilities</p>
       
        </div>
        <div class="service-item tile tile2">
            <i class="fas fa-business-time fa-3x"></i>
            <h3>Project management</h3>
            <p>Ensuring projects are delivered on time and costs are monitored against budget</p>
        
        </div>
        <div class="service-item tile  tile3">
            <i class="far fa-calendar-check fa-3x"></i>
            <h3>Delivery and sign off</h3>
            <p>We can assist the client in accepting the installation whilst ensuring all documentation is in place</p>
        
        </div>
    </div>
    <div class="service-button">
        <a href="/services" class="service-home-link-container">Learn More</a>
    </div>
</div>


</section>


';

require '../home-layout.php';

?>