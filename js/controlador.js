window.addEventListener('unload', function(event) {
    // Enviar una solicitud al servidor para eliminar la cookie de sesión del usuario
    fetch('../controllers/cerrar_sesion.php', { method: 'POST' });
});


// Establecer el tiempo máximo de inactividad en segundos
const MAX_INACTIVITY_TIME = 30;

let inactivityTimer;
let warningTimer;

// Función para reiniciar el temporizador de inactividad
function resetInactivityTimer() {
  clearTimeout(inactivityTimer);
  clearTimeout(warningTimer);

  inactivityTimer = setTimeout(function() {
    // Mostrar un mensaje de advertencia al usuario
    alert('Se cerrará la sesión en 30 segundos debido a la inactividad. Presione "Continuar" para seguir conectado.');

    // Empezar un temporizador para la advertencia de cierre de sesión
    warningTimer = setTimeout(function() {
      // Enviar una solicitud al servidor para eliminar la cookie de sesión del usuario
      fetch('../controllers/cerrar_sesion.php', { method: 'POST' });
    }, MAX_INACTIVITY_TIME * 1000);
  }, MAX_INACTIVITY_TIME * 1000);
}

// Reiniciar el temporizador de inactividad cuando se detecta actividad del usuario
document.addEventListener('mousemove', resetInactivityTimer);
document.addEventListener('keypress', resetInactivityTimer);

