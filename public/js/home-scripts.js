

const nav = document.getElementById('navbar-homepage');
window.addEventListener('scroll', navScroll ); 
function navScroll() { 
    if (document.body.scrollTop >= 190 || document.documentElement.scrollTop >= 190 ) {
        nav.classList.add("scrolled");
        // nav.classList.remove("nav-transparent");
    } 
    else {
        // nav.classList.add("nav-transparent");
        nav.classList.remove("scrolled");
    }
};



// Fade in on scroll
// add class of tile to html
let elementsArray = document.querySelectorAll(".tile");
console.log(elementsArray);
window.addEventListener('scroll', fadeIn ); 
function fadeIn() {
    for (var i = 0; i < elementsArray.length; i++) {
        var elem = elementsArray[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight + 180;
        if (distInView < 0) {
            elem.classList.add("inView");
        } else {
            elem.classList.remove("inView");
        }
    }
}
fadeIn();

// Fade in stacked img in about section
let stackImgArray = document.querySelectorAll(".stackItem");
console.log(stackImgArray);
window.addEventListener('scroll', showImg );  
function showImg() {
    console.log("image stack listener run");
    for (var i = 0; i < stackImgArray.length; i++) {
        var elem = stackImgArray[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight + 60;
        if (distInView < 0) {
            elem.classList.add("stackShown");
        } else {
            elem.classList.remove("stackShown");
        }
    }
}
showImg();



// Fade in on scroll - Services Element
let servicesArray = document.querySelectorAll(".service-tile");
console.log(servicesArray);
window.addEventListener('scroll', fadeInServices ); 
function fadeInServices() {
    for (var i = 0; i < servicesArray.length; i++) {
        var elem = servicesArray[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
        if (distInView < 0) {
            elem.classList.add("inView");
        } else {
            elem.classList.remove("inView");
        }
    }
}
fadeInServices();


// Burger Menu
const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;

menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
    console.log('open menu');

    document.getElementById("menu").style.height = "105vh";
    // disable scrolling
    document.body.style.overflow = 'hidden'

    nav.classList.add("scrolled");

  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
    console.log('close menu');

    document.getElementById("menu").style.height = "0vh";
    // Allow Scrolling
    document.body.style.overflow = '';

    navScroll();

  }
});
// END Burger Menu



// Prevent IE from being used
function msieversion() 
{
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0) // If Internet Explorer, return version number
    {
        alert(parseInt("Unfortunately Internet Explorer is not supported. Please use a differnt browser as some parts of this website may not work"));
    }
    // else  // If another browser, return 0
    // {
    //     // alert('otherbrowser');
    // }

    return false;
}
window.onload = msieversion();

// close nav function - Only needed for when on the homepage
function closeNav() {
    menuBtn.classList.remove('open');
    menuOpen = false;

    document.getElementById("menu").style.height = "0vh";
    // Allow Scrolling
    document.body.style.overflow = '';
}