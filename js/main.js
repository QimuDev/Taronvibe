document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll('.slide');
  let currentIndex = 0;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      if (i === index) {
        slide.classList.add('active');
      } else {
        slide.classList.remove('active');
      }
    });
  }

  function changeSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
    setTimeout(changeSlide, 4000);
  }

  showSlide(currentIndex);
  changeSlide();

  // Toggle button functionality
  document.querySelectorAll('.option').forEach((button, index) => {
    button.addEventListener('click', (event) => {
      document.querySelectorAll('.option').forEach(btn => btn.classList.remove('active'));
      event.target.classList.add('active');
      if (index === 0) {
        document.querySelector('.slider').style.transform = "translateX(0)";
      } else {
        document.querySelector('.slider').style.transform = "translateX(100%)";
      }
    });
  });
});
