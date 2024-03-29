import 'flowbite';
import Alpine from 'alpinejs';
window.Alpine = Alpine;

Alpine.start();


//boton para ir al inicio de la pagina
// Selecciona el botón por su ID
const scrollToTopBtn = document.getElementById('scrollToTopBtn');

// Agrega un evento de desplazamiento a la ventana
window.addEventListener('scroll', () => {
  // Verifica la posición vertical de la página
  if (window.scrollY > 180) { // Cambia 100 por la cantidad de desplazamiento en píxeles que desees
    // Muestra el botón cuando el desplazamiento sea mayor que 100 píxeles
    scrollToTopBtn.style.display = 'block';
  } else {
    // Oculta el botón cuando el desplazamiento sea menor o igual a 100 píxeles
    scrollToTopBtn.style.display = 'none';
  }
});

// Agrega un evento de clic al botón
scrollToTopBtn.addEventListener('click', () => {
  // Hace que la página vuelva al inicio con un desplazamiento suave
  window.scrollTo({
    top: 0,
    behavior: 'smooth' // Esto hace que el desplazamiento sea suave
  });
});








