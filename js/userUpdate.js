document.querySelectorAll('.gusto-item img').forEach(img => {
    // Guardamos la imagen original y la alternativa
    const originalSrc = img.getAttribute('src');
    const altSrc = img.getAttribute('data-alt-src');

    // Añadir la clase para la transición
    img.style.transition = "opacity 0.3s ease";

    // Variable para controlar el estado de clic
    let isClicked = false;
    
    // Cambiar la imagen cuando se pasa el ratón (hover)
    img.addEventListener('mouseover', () => {
        // Solo cambia la imagen si no está clickeada
        if (!isClicked) {
            img.style.opacity = 0;  // Hacer la imagen invisible para luego cambiarla
            setTimeout(() => {
                img.setAttribute('src', altSrc);  // Cambiar a la imagen alternativa
                img.style.opacity = 1;  // Volver a hacer visible la imagen con la transición
            }, 100);
        }
    });

    // Volver a la imagen original cuando el ratón sale (mouseout)
    img.addEventListener('mouseout', () => {
        // Solo vuelve a la imagen original si no está clickeada
        if (!isClicked) {
            img.style.opacity = 0;  // Hacer la imagen invisible antes de cambiarla
            setTimeout(() => {
                img.setAttribute('src', originalSrc);  // Volver a la imagen original
                img.style.opacity = 1;  // Volver a hacer visible la imagen con la transición
            }, 100);
        }
    });

    // Cambiar la imagen al hacer clic (permanente)
    img.addEventListener('click', () => {
        if (isClicked) {
            // Si ya está clickeada, vuelve a la imagen original y reactiva el hover
            img.setAttribute('src', originalSrc);
            isClicked = false;  // El estado de clic se desactiva, permitiendo hover de nuevo
        } else {
            // Si no está clickeada, cambia a la imagen alternativa y desactiva el hover
            img.setAttribute('src', altSrc);
            isClicked = true;  // El estado de clic se activa
        }
    });
});
