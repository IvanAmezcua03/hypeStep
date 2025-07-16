document.addEventListener('DOMContentLoaded', function() {
  var carrusel = document.querySelector(".carousel");
  if (!carrusel) return; // Si no existe el carrusel, salir
  
  var imgs = carrusel.querySelectorAll('img');
  var btnprev = carrusel.querySelector(".prev");
  var btnnext = carrusel.querySelector(".next");

  var index = 0;
  var intervalo;

  function mostrarImagen(i) {
      imgs.forEach((img, idx) => {
          img.classList.toggle("active", idx === i);
      });
  }

  function siguiente() {
      index = (index + 1) % imgs.length;
      mostrarImagen(index);
  }

  function anterior() {
      index = (index - 1 + imgs.length) % imgs.length;
      mostrarImagen(index);
  }

  btnprev.addEventListener("click", () => {
      anterior();
      reiniciarIntervalo();
  });

  btnnext.addEventListener("click", () => {
      siguiente();
      reiniciarIntervalo();
  });

  function reiniciarIntervalo() {
      clearInterval(intervalo);
      intervalo = setInterval(siguiente, 3000);
  }

  // Inicializar
  intervalo = setInterval(siguiente, 3000);
  mostrarImagen(index);
});