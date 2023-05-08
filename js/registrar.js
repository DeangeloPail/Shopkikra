const formulario = document.getElementById('formulario');
//constates de inputs para valdiar
const nombres = document.getElementById('nombres');
const apellidos = document.getElementById('apellidos');
const documento = document.getElementById('documento');
const fechaDeNacimiento = document.getElementById('fechaDeNacimiento');
const codPais = document.getElementById('codPais');
const telefono = document.getElementById('telefono');
const correo = document.getElementById('correo');
const terCorreo = document.getElementById('terCorreo');
const usuario = document.getElementById('usuario');
const contrasena = document.getElementById('contrasena');
const repContrasea = document.getElementById('repContrasea');
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
//alertas de errores de los campos
const alertaNombre = document.getElementById('alertaNombre');
const alertaApellido = document.getElementById('alertaApellido');
const alertaDocumento = document.getElementById('alertaDocumento');
const alertaFechNac = document.getElementById('alertaFechNac');
const alertaTelefono = document.getElementById('alertaTelefono');
const alertaCorreo = document.getElementById('alertaCorreo');
const alertaUsuario = document.getElementById('alertaUsuario');
const alertaContrasena = document.getElementById('alertaContrasena');
const alertaRepcontrasena = document.getElementById('alertaRepcontrasena');
const alertaReferido = document.getElementById('alertaReferido');

console.log(telefono);
//rangos de campos
const regNombre = /^[a-zA-ZÀ-ÿ\s]{3,40}$/;
const regDocumento = /^[0-9]{6,11}$/;
const regTelefono = /^[0-9]{5,14}$/;
const regCorreo = /^[a-zA-Z0-9_.+-]{1,40}$/;
const regUsuario =/^[a-zA-Z0-9_.+-]{1,20}$/;
const regContrasena =/^.{4,12}$/;


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
    nombres.classList.add('is-invalid');    
    errores.push(alertaNombre.textContent = "Los escriba un nombre");

  } else {
    nombres.classList.remove('is-invalid');
    nombres.classList.add('is-valid');
  }

  // validar apellidos
  if (!regNombre.test(apellidos.value) || !apellidos.value.trim()) {
    apellidos.classList.add('is-invalid');    
    errores.push(alertaApellido.textContent = "Los escriba un apellido");

  } else {
    apellidos.classList.remove('is-invalid');
    apellidos.classList.add('is-valid');
  }

  // validar documento
  if (!regDocumento.test(documento.value) || !documento.value.trim()) {
    documento.classList.add('is-invalid');    
    errores.push(alertaDocumento.textContent = "escriba un documento valido");

  } else {
    documento.classList.remove('is-invalid');
    documento.classList.add('is-valid');
  }

  // validar Fecha
  if ((fechaDeNacimiento.value>fechaMenor || fechaDeNacimiento.value<fechaMayor)) {
    fechaDeNacimiento.classList.add('is-invalid');
    errores.push(alertaFechNac.textContent = "Pon tu fecha de nacimiento solo +18 años");

  } else {
    fechaDeNacimiento.classList.remove('is-invalid');
    fechaDeNacimiento.classList.add('is-valid');
  }
  
  // validar Select codigo de telefono
    var optForm = document.forms["formulario"]["codPais"].selectedIndex;
    if( optForm == null || optForm == 0 ) {
    codPais.classList.add('is-invalid');

    errores.push(alertaTelefono.textContent = "Selecciona un codigo de telefono");
  } else {
    codPais.classList.remove('is-invalid');
    codPais.classList.add('is-valid');
  }

  // validar telefono
  if (!regTelefono.test(telefono.value) || !telefono.value.trim()) {
    telefono.classList.add('is-invalid');    
    errores.push(alertaTelefono.textContent = "escriba un numero de telefono valido");
  } else {
    telefono.classList.remove('is-invalid');
    telefono.classList.add('is-valid');
  }

  // validar Select correo
  var optForm = document.forms["formulario"]["terCorreo"].selectedIndex;
  if( optForm == null || optForm == 0 ) {
  terCorreo.classList.add('is-invalid');

  errores.push(alertaCorreo.textContent = "Selecciona un dominio");
} else {
  terCorreo.classList.remove('is-invalid');
  terCorreo.classList.add('is-valid');
}

  // validar correo
if (!regCorreo.test(correo.value) || !correo.value.trim()) {
  correo.classList.add('is-invalid');    
  errores.push(alertaCorreo.textContent = "escriba un correo sin contar el @.....");
} else {
  correo.classList.remove('is-invalid');
  correo.classList.add('is-valid');
}

// validar usuario
if (!regUsuario.test(usuario.value) || !usuario.value.trim()) {
  usuario.classList.add('is-invalid');    
  errores.push(alertaUsuario.textContent = "escriba un usuario valido");
} else {
  usuario.classList.remove('is-invalid');
  usuario.classList.add('is-valid');
}

// validar contraseña
if (!regContrasena.test(contrasena.value) || !contrasena.value.trim()) {
  contrasena.classList.add('is-invalid');    
  errores.push(alertaContrasena.textContent = "escriba un contraseña solo se permite de 4 a 12 caracteres");
} else {
  contrasena.classList.remove('is-invalid');
  contrasena.classList.add('is-valid');
}

// validar repita contraseña
if (contrasena.value!== repContrasea.value || !repContrasea.value.trim()) {
  repContrasea.classList.add('is-invalid');    
  errores.push(alertaRepcontrasena.textContent = "La contraseña no es igual por favor verifique");
} else {
  repContrasea.classList.remove('is-invalid');
  repContrasea.classList.add('is-valid');
}




  
  
//Reviso el formulario si tiene errores o tine campos vacios
  if (errores.length !== 0) {
    pintarMensajeError(errores);
    return;
  }
  return true;
};