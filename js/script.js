let currentIndex = 0;
document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0;
    const images = document.querySelectorAll('.slider-image');
    const texts = ['R E S I D E N C I A L'];
    const textElement = document.getElementById('slider-text');

    if (images.length === 0) {
        console.error('No images found with the class .slider-image');
        return;
    }

    function showNextImage() {
        images[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.add('active');
        textElement.textContent = texts[currentIndex];
    }

    setInterval(showNextImage, 5000);

    // Initialize first image and text
    images[currentIndex].classList.add('active');
    textElement.textContent = texts[currentIndex];
});


function changeImage(src) {
    const sky = document.getElementById('vr-image');
    sky.setAttribute('src', src);
}

