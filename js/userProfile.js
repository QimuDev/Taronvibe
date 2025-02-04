document.addEventListener("DOMContentLoaded", function () {
    const btnSave = document.querySelector(".btn-save");
    const btnImage = btnSave ? btnSave.querySelector("img") : null;
    
    if (btnSave && btnImage) {
        const originalSrc = btnImage.getAttribute("src");
        const hoverSrc = btnImage.getAttribute("alt");
        
        btnImage.style.transition = "opacity 0.3s ease-in-out";
        
        btnSave.addEventListener("mouseenter", function () {
            btnImage.style.opacity = "0";
            setTimeout(() => {
                btnImage.setAttribute("src", hoverSrc);
                btnImage.style.opacity = "1";
            }, 150);
        });
        
        btnSave.addEventListener("mouseleave", function () {
            btnImage.style.opacity = "0";
            setTimeout(() => {
                btnImage.setAttribute("src", originalSrc);
                btnImage.style.opacity = "1";
            }, 150);
        });
    }
});