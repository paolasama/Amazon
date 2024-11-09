// JavaScript para manejar el loader
window.addEventListener('load', function() {
  var loader = document.getElementById('loader');
  var content = document.querySelector('.content');
  
  loader.style.display = 'none';
  content.style.display = 'block';
});

document.addEventListener("DOMContentLoaded", function() {
    const verMasBtn = document.getElementById("verMasBtn");
  
    verMasBtn.addEventListener("click", function(event) {
      event.preventDefault();
      alert("¡Más promociones próximamente!");
    });
  });
  
    /* Función para abrir el menú lateral */
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
  
    /* Función para cerrar el menú lateral */
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  
    let currentIndex = 0;
  
      function showSlide(index) {
        const slides = document.getElementsByClassName('carousel-item');
        if (index >= slides.length) {
          currentIndex = 0;
        } else if (index < 0) {
          currentIndex = slides.length - 1;
        } else {
          currentIndex = index;
        }
        const offset = -currentIndex * 100;
        document.getElementById('carouselInner').style.transform = 'translateX(' + offset + '%)';
      }
  
      function nextSlide() {
        showSlide(currentIndex + 1);
      }
  
      function prevSlide() {
        showSlide(currentIndex - 1);
      }
  
      document.addEventListener('DOMContentLoaded', () => {
        showSlide(currentIndex);
      });