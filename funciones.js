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