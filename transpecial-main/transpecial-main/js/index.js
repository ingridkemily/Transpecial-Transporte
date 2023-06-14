let i = 0;
let timeout;
var images = [];
images[0] = "url('images/TE2.jpg')";
images[1] = "url('images/TE7.jpg')";
images[2] = "url('images/TE6.jpg')";

const currentSlide = (n) => {
  i = n;
  clearTimeout(timeout);
  showSlides(true);
};

const createDots = () => {
  images.forEach((item, index) => {
    var newDot = document.createElement("div");
    var sliderDiv = document.getElementById("sliders-pointers");

    newDot.className = "pointer";
    newDot.onclick = () => currentSlide(index);
    sliderDiv.appendChild(newDot);
  });
};

const showSlides = (isClicked = false) => {
  let slides = document.getElementById("banner");
  let dots = document.getElementsByClassName("pointer");
  let delay = 5000;

  slides.style.backgroundImage = images[i];
  slides.style.transition = "all 1s";

  for (let e = 0; e < dots.length; e++) {
    dots[e].className = dots[e].className.replace("active", "");
  }
  dots[i].className += " active";

  if (i < images.length - 1) {
    i++;
  } else {
    i = 0;
  }

  if (!isClicked) {
    clearTimeout(timeout);
    timeout = setTimeout(showSlides, delay);
  }
};

createDots();
showSlides();
