const translate = document.querySelectorAll(".translate");
const big_title = document.querySelector(".big-title");
const header = document.querySelector("header");
const shadow = document.querySelector(".shadow");
const content = document.querySelector(".content");
const section = document.querySelector("section");
const image_container = document.querySelector(".imgContainer");
const opacity = document.querySelectorAll(".opacity");
const border = document.querySelector(".border");

let header_height = header.offsetHeight;
let section_height = section.offsetHeight;

window.addEventListener('scroll', () => {
    let scroll = window.pageYOffset;
    let sectionY = section.getBoundingClientRect();
    
    translate.forEach(element => {
        let speed = element.dataset.speed;
        element.style.transform = `translateY(${scroll * speed}px)`;
    });

    opacity.forEach(element => {
        element.style.opacity = scroll / (sectionY.top + section_height);
    })

    big_title.style.opacity = - scroll / (header_height / 2) + 1;
    shadow.style.height = `${scroll * 0.5 + 300}px`;

    content.style.transform = `translateY(${scroll / (section_height + sectionY.top) * 50 - 50}px)`;
    image_container.style.transform = `translateY(${scroll / (section_height + sectionY.top) * -50 + 50}px)`;

    border.style.width = `${scroll / (sectionY.top + section_height) *0 }%`;
})









const reviewsSection = document.querySelector('#reviews');
const reviews = document.querySelector('.reviews');

window.addEventListener('scroll', () => {
    const sectionPos = reviewsSection.getBoundingClientRect().top;
    const screenPos = window.innerHeight / 1.3;

    if (sectionPos < screenPos) {
        reviews.classList.add('visible');
    }
});












let reviewHeading = document.getElementById('review-heading');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    reviewHeading.style.marginTop = value * 1.5 + 'px';
});


const nextBtn = document.querySelector('.next-btn');
const prevBtn = document.querySelector('.prev-btn');
const slides = document.querySelectorAll('.slide');
const numberOfSlides = slides.length;
let slideNumber = 0;

nextBtn.onclick = () => {
  slides.forEach((slide) => {
    slide.classList.remove('active');
  });

  slideNumber++;

  if(slideNumber > (numberOfSlides - 1)) {
    slideNumber = 0;
  }

  slides[slideNumber].classList.add('active');
}


prevBtn.onclick = () => {
  slides.forEach((slide) => {
    slide.classList.remove('active');
  });

  slideNumber--;

  if(slideNumber < 0) {
    slideNumber = numberOfSlides - 1;
  }

  slides[slideNumber].classList.add('active');
}












window.addEventListener('scroll', function() {
    const featuredToursSection = document.querySelector('.featured-tours');
    const sectionPosition = featuredToursSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;

    if(sectionPosition < screenPosition) {
        featuredToursSection.classList.add('active');
    }
});









document.addEventListener('DOMContentLoaded', function() {
    const filterToggle = document.getElementById('filter-toggle');
    const filterContainer = document.getElementById('filter-container');
    const priceRange = document.getElementById('price-range');
    const priceValue = document.getElementById('price-value');
    
    // Toggle filter container visibility
    filterToggle.addEventListener('click', function() {
        filterContainer.classList.toggle('active');
    });

    // Update price value display
    priceRange.addEventListener('input', function() {
        priceValue.textContent = `$${this.value}`;
    });
});
