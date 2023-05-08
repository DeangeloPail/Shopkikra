//formulario declaracion
const formulario = document.getElementById('formulario');
//constantes 
const nombres = document.getElementById('nombres');
const apellidos = document.getElementById('apellidos');
const documentoNumero = document.getElementById('documentoNumero');
const fechaNacimiento = document.getElementById('fechaNacimiento');
const nombresDiv = document.getElementById('nombresDiv');
const apellidosDiv = document.getElementById('apellidosDiv');
const documentoNumeroDiv = document.getElementById('documentoNumeroDiv');
const fechaNacimientoDiv = document.getElementById('fechaNacimientoDiv');
const lavelPerfil = document.getElementById('lavelPerfil');
const validarUrl = window.location.origin+"/shopkikra/images/profiles/sin_usurio.jpg";
//alerta
const alertaNombre = document.getElementById('alertaNombre');
const alertaApellido = document.getElementById('alertaApellido');
const alertaDocumento = document.getElementById('alertaDocumento');
const alertaFecha = document.getElementById('alertaFecha');
const alertaImagenDocumento = document.getElementById('alertaImagenDocumento');
const alertaFotoPerfil = document.getElementById('alertaFotoPerfil');
//expresiones regulares
const regNombre = /^[a-zA-ZÀ-ÿ\s]{3,40}$/;
const regDocumento = /^[0-9]{6,11}$/;

// Agrega un controlador de eventos para la selección de la imagen
const idUsuario = document.getElementById('idUsuario');
const fotoPerfil = document.getElementById('imagen');
const documento=document.getElementById('documento');
const mensajeDocumento = document.getElementById('mensajeDocumento');
//iconos
const check = document.getElementById('check');
const camara = document.getElementById('camara');
//variables de fechas
var fecha= new Date();
    const anoActual=fecha.getFullYear()-64;
    const anoMenor=fecha.getFullYear()-18;
    const mesActual=fecha.getMonth()+1;
    const diaActual=fecha.getDate();
    function PadLeft(value, length) {
      return (value.toString().length < length) ? PadLeft("0" + value, length) : 
      value;
    };
const fechaMayor=(anoActual+'-'+PadLeft(mesActual,2)+'-'+PadLeft(diaActual,2));
const fechaMenor=(anoMenor+'-'+PadLeft(mesActual,2)+'-'+PadLeft(diaActual,2));
//menasjes
const pintarMensajeError = () => {
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Algo salio mal verifica los datos',
  })
};

const pintarMensajeNo = (errores) => {
  errores.forEach((item) => {
    item.tipo.classList.remove('d-none');
    item.tipo.textContent = item.msg;
  });
};

documento.addEventListener('change', function(event){
  let  nombreFoto = documento.files[0];
  let  documentoFoto = nombreFoto.name;
  // Cambiar el texto del elemento
  mensajeDocumento.innerHTML  = "el archivo "+documentoFoto+" se cargo de foma correcta" ;
  camara.style.display = "none";
  check.classList.remove("input-invisible");
});

fotoPerfil.addEventListener('change', function(event) {
  // Obtiene el archivo de imagen seleccionado por el usuario
  var archivo = event.target.files[0];
  var id_usuario = document.getElementsByName('idUsuario')[0].value;
  var nombres = document.getElementsByName('nombres')[0].value;
  var apellidos = document.getElementsByName('apellidos')[0].value;
  var documentoNumero = document.getElementsByName('documentoNumero')[0].value;
  var fechaNacimiento = document.getElementsByName('fechaNacimiento')[0].value;


  // Crea un objeto FormData para enviar la imagen al servidor
  var formData = new FormData();
  formData.append('idUsuario', id_usuario);
  formData.append('imagen', archivo);
  formData.append('nombre', nombres);
  formData.append('apellido', apellidos);
  formData.append('dni', documentoNumero);
  formData.append('fecha', fechaNacimiento);
  

  const mostrarAlerta = () => {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      timer: 5000,
      text: 'La imagen debe ser un archivo JPG o PNG y no debe superar los 5 MB de tamaño.'
    });
  };
  const mostrarError = () => {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      timer: 5000,
      text: 'Lo siento, ha ocurrido un problema con el servidor. Por favor, inténtalo de nuevo más tarde.'
    })
  };
  // Envía la imagen al servidor utilizando una solicitud AJAX y JSON
  fetch('../../sql/modificar/foto_perfil.php', {
    method: 'POST',
    body: formData,
    headers: {
      'Accept': 'application/json'
    }
  })
  .then(response => response.json())
  .then(data => {
    if(data == 'true'){
      location.reload();
    }else if(data == 'error'){
      try {
        mostrarAlerta();
      } finally {
        setTimeout(function() {
          location.reload();
        }, 5000); // retraso de 5 segundos en milisegundos
      } 
    }else{
      try {
        mostrarError();
      } finally {
        setTimeout(function() {
          location.reload();
        }, 5000); // retraso de 5 segundos en milisegundos
      } 
    }
  })
  .catch(error => console.error(error));
});

//validacion de formulario
formulario.addEventListener("submit", function(evento) {
  // Si hay algún error en la validación, el formulario no se enviará
  if (!validarFormulario()) {
    evento.preventDefault(); // Evita que se envíe el formulario automáticamente
  }
});

function validarFormulario() {
  const errores = [];

  // validar nombres
  if (!regNombre.test(nombres.value) || !nombres.value.trim()) {
    nombresDiv.classList.add('is-invalid');
    alertaNombre.style.color = 'red';
    errores.push(alertaNombre.textContent = "Los escriba un nombre");
  } else {
    nombresDiv.classList.remove('is-invalid');
    nombresDiv.classList.add('is-valid');
    alertaNombre.style.color = 'green';
    alertaNombre.textContent = "Todo bien";
  }

  // validar apellidos
  if (!regNombre.test(apellidos.value) || !apellidos.value.trim()) {
    apellidosDiv.classList.add('is-invalid');
    alertaApellido.style.color = 'red';
    errores.push(alertaApellido.textContent = "Los escriba un apellido");

  } else {
    apellidosDiv.classList.remove('is-invalid');
    apellidosDiv.classList.add('is-valid');
    alertaApellido.style.color = 'green';
    alertaApellido.textContent = "Todo bien";
  }

  // validar documento
  if (!regDocumento.test(documentoNumero.value) || !documentoNumero.value.trim()) {
    documentoNumeroDiv.classList.add('is-invalid');
    alertaDocumento.style.color = 'red';    
    errores.push(alertaDocumento.textContent = "escriba un documento valido");

  } else {
    documentoNumeroDiv.classList.remove('is-invalid');
    documentoNumeroDiv.classList.add('is-valid');
    alertaDocumento.style.color = 'green';
    alertaDocumento.textContent = "Todo bien";
  }

  // validar Fecha
  if ((fechaNacimiento.value>fechaMenor || fechaNacimiento.value<fechaMayor)) {
    fechaNacimientoDiv.classList.add('is-invalid');
    alertaFecha.style.color = 'red';    
    errores.push(alertaFecha.textContent = "Pon tu fecha de nacimiento solo +18 años");

  } else {
    fechaNacimientoDiv.classList.remove('is-invalid');
    fechaNacimientoDiv.classList.add('is-valid');
    alertaFecha.style.color = 'green';
    alertaFecha.textContent = "Todo bien";
  }
  //validar foto de perfil
  if (lavelPerfil.src == validarUrl) {
    alertaFotoPerfil.style.color = 'red';    
    errores.push(alertaFotoPerfil.textContent = "No olvides agregar una foto tuya para completar el registro.");
  }else{
    alertaFotoPerfil.style.color = 'green';    
    alertaFotoPerfil.textContent = "Todo bien";
  }
  //validar foto de documento
  if (!documento.value.trim()) {
    alertaImagenDocumento.style.textAlign = "center";    
    alertaImagenDocumento.style.color = 'red';    
    errores.push(alertaImagenDocumento.textContent = "No olvides agregar una foto de tu documento de identidad completar el registro.");
  }else{
    alertaImagenDocumento.style.textAlign = "center";    
    alertaImagenDocumento.style.color = 'green';    
    alertaImagenDocumento.textContent = "Todo bien";
  }
  
//Reviso el formulario si tiene errores o tine campos vacios
  if (errores.length !== 0) {
    pintarMensajeError(errores);
    return;
  }
  return true;
};