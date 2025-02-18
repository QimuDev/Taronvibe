document.addEventListener('DOMContentLoaded', function() {
    const iconContainer = document.getElementById('iconContainer');

    iconContainer.addEventListener('click', function() {
        this.classList.toggle('active');
    });
});