
document.addEventListener("DOMContentLoaded", () => {
    const carousel = document.querySelector('.carousel');
    const slides = document.querySelectorAll('.slide');
    const container = document.querySelector('.container-carousel');
    let currentIndex = 0;
    const totalSlides = slides.length;
  
    // Cambia de slide cada 3 segundos
   const nextSlide=()=>{
    currentIndex=(currentIndex+1) %totalSlides;
    carousel.style.transform=`translateX(-${currentIndex * 100}%)`;
   }

   let interval=setInterval(nextSlide,3000);


container.addEventListener('mouseenter',() => clearInterval(interval));


container.addEventListener('mouseleave',()=>{
    interval=setInterval(nextSlide,3000)
});
})
    