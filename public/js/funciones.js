// JavaScript para manejar el loader
window.addEventListener('load', function() {
  var loader = document.getElementById('loader');
  var content = document.querySelector('.content');
  
  loader.style.display = 'none';
  content.style.display = 'block';
});


document.addEventListener("DOMContentLoaded", function() {
  const ofertasBtn = document.getElementById("ofertasBtn");

  ofertasBtn.addEventListener("click", function(event) {
      event.preventDefault(); // Evita la acción predeterminada del enlace
      window.location.href = "/ofertas"; // Redirige a la ruta '/ofertas'
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const accesoriosBtn = document.getElementById("accesoriosBtn");

  accesoriosBtn.addEventListener("click", function(event) {
      event.preventDefault(); // Evita la acción predeterminada del enlace
      window.location.href = "/accesorios"; // Redirige a la página de accesorios
  });
});

document.addEventListener("DOMContentLoaded", function() {
  // Obtén el botón con el ID "videojuegosBtn"
  const videojuegosBtn = document.getElementById("videojuegosBtn");

  // Añadir el evento de clic al botón
  videojuegosBtn.addEventListener("click", function(event) {
      event.preventDefault(); // Evita la acción predeterminada del enlace
      window.location.href = "/videojuegos"; // Redirige a la página de videojuegos
  });
});

document.addEventListener("DOMContentLoaded", function() {
  // Obtén el botón con el ID "verMasBtnTecnologia"
  const verMasBtnTecnologia = document.getElementById("verMasBtnTecnologia");

  // Añadir el evento de clic al botón
  verMasBtnTecnologia.addEventListener("click", function(event) {
      event.preventDefault(); // Evita la acción predeterminada del enlace
      window.location.href = "/tecnologia"; // Redirige a la página de productos tecnológicos
  });
});

document.addEventListener("DOMContentLoaded", function() {
  // Obtén el botón con el ID "verMasBtnMarcas"
  const verMasBtnMarcas = document.getElementById("verMasBtnMarcas");

  // Añadir el evento de clic al botón
  verMasBtnMarcas.addEventListener("click", function(event) {
      event.preventDefault(); // Evita la acción predeterminada del enlace
      window.location.href = "/marcas"; // Redirige a la página de marcas favoritas
  });
});

document.addEventListener("DOMContentLoaded", function() {
  // Obtén el botón con el ID "verMasBtnJuguetes"
  const verMasBtnJuguetes = document.getElementById("verMasBtnJuguetes");

  // Añadir el evento de clic al botón
  verMasBtnJuguetes.addEventListener("click", function(event) {
      event.preventDefault(); // Evita la acción predeterminada del enlace
      window.location.href = "/juguetes"; // Redirige a la página de juguetes
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const verMasBtnAuto = document.getElementById("verMasBtnAuto");

  verMasBtnAuto.addEventListener("click", function(event) {
      event.preventDefault(); // Evita la acción predeterminada del enlace
      window.location.href = "/ofertas-auto"; // Redirige a la página de ofertas de auto
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