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

const añosExperiencia = document.getElementById('años_experiencia');
const mContruido = document.getElementById('m_contruido');
const mCabledo = document.getElementById('m_cabledo');

let currentAñosExperiencia = 0;
let currentMContruido = 0;
let currentMCabledo = 0;

const fechaActual = new Date();
const targetAñosExperiencia = fechaActual.getFullYear()-2000; // Cambiar este valor al número deseado
const targetMContruido = 300000; // Cambiar este valor al número deseado
const targetMCabledo = 1000; // Cambiar este valor al número deseado

function animateAñosExperiencia() {
  if (currentAñosExperiencia < targetAñosExperiencia) {
    currentAñosExperiencia++;
    añosExperiencia.textContent = currentAñosExperiencia;
    setTimeout(animateAñosExperiencia, 10); // Velocidad de la animación (milisegundos)
  }
}

function animateMContruido() {
  const increment = Math.ceil(targetMContruido / 60); // Dividir el número total por el número de fotogramas (60 fotogramas en 1 segundo)
  currentMContruido += increment;
  mContruido.textContent = currentMContruido.toLocaleString(); // Formatear el número con comas
  if (currentMContruido < targetMContruido) {
    requestAnimationFrame(animateMContruido);
  }
}

function animateMCabledo() {
  const increment = Math.ceil(targetMCabledo / 60); // Dividir el número total por el número de fotogramas (60 fotogramas en 1 segundo)
  currentMCabledo += increment;
  mCabledo.textContent = currentMCabledo.toLocaleString(); // Formatear el número con comas
  if (currentMCabledo < targetMCabledo) {
    requestAnimationFrame(animateMCabledo);
  }
}

animateAñosExperiencia();
animateMContruido();
animateMCabledo();




