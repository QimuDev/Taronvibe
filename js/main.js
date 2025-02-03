
document.addEventListener("DOMContentLoaded", () => {
    const carousel = document.querySelector('.carousel');
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;
    const totalSlides = slides.length;
  
    // Función para cambiar de slide
    const nextSlide = () => {
        currentIndex = (currentIndex + 1) % totalSlides;
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    };

    // Iniciar la animación automática
    let interval = setInterval(nextSlide, 5000);

    // Detener animación cuando el mouse entra
    carousel.addEventListener('mouseenter', () => clearInterval(interval));

    // Reanudar animación cuando el mouse sale
    carousel.addEventListener('mouseleave', () => {
        interval = setInterval(nextSlide, 5000);
    });
});

    


// BOTONES CON SLIDER
function toggleButton(event, index) {
    const options = document.querySelectorAll('.option');
    const slider = document.querySelector('.slider');
  
    options.forEach(option => option.classList.remove('active'));
    event.target.classList.add('active');
  
    slider.style.transform = index === 0 ? "translateX(0)" : "translateX(100%)";
  }






// function toggleButton(event) {
//     const buttons = document.querySelectorAll('.option');
//     const slider = document.querySelector('.slider');
 
//     buttons.forEach(btn => btn.classList.remove('active'));
//     event.target.classList.add('active');
 
//     if (event.target.innerText === "Favoritos") {
//         slider.style.transform = "translateX(0%)";
//     } else {
//         slider.style.transform = "translateX(100%)";
//     }
// }
  