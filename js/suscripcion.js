//variables de formulario
var formulario = document.getElementById('formulario');
var selectMetodo = document.getElementById('metodoPago');
var Suscripcion = document.getElementById('suscripcion');
var fileInput = document.getElementById('capture');
var fechaEmision = document.getElementById('fechaEmision');
var referencia = document.getElementById('referencia');
//alertas
var alertaMetodo = document.getElementById('alertaMetodo');
var alertaSuscripcion = document.getElementById('alertaSuscripcion');
var alertaFecha = document.getElementById('alertaFecha');
var alertaReferencia = document.getElementById('alertaReferencia');
var alertaCapture = document.getElementById('alertaCapture');
//fecha
var fecha= new Date();
    var anoActual=fecha.getFullYear();
    var mesActual=fecha.getMonth()+1;
    var diaActual=fecha.getDate();
    var diaMenor=fecha.getDate()-7;
    function PadLeft(value, length) {
      return (value.toString().length < length) ? PadLeft("0" + value, length) : 
      value;
    };
var fechaActual=(anoActual+'-'+PadLeft(mesActual,2)+'-'+PadLeft(diaActual,2));
var fechaLimite=(anoActual+'-'+PadLeft(mesActual,2)+'-'+PadLeft(diaMenor,2));
//mostrar cuentas
let cuentaMonto=document.getElementById('cuentaMonto');

let nomPropietario=document.getElementById('nomPropietario');
let numCuenta=document.getElementById('numCuenta');
let telefono=document.getElementById('telefono');
let documento=document.getElementById('documento');
let tpCuenta=document.getElementById('tpCuenta');
let correo=document.getElementById('correo');
let monto=document.getElementById('monto');
let bancoReceptor=document.getElementById('banco');

let nCuenta = [];
let banco = [];
let nTelefono = [];
let docIdetidad = [];
let correoElectro = [];
let nombre = []; 
let tipoCuenta = []; 
let montoPago = []; 


//mensajes

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

//mostrar cuenta
selectMetodo.addEventListener('change', (event) => {
  var selectedOption = event.target.value;
  var Metodo_Pago = (selectedOption);
  var formData = new FormData();

  formData.append('metodoPago', Metodo_Pago);

  fetch('../../sql/vistas/validacion_suscripcion.php', {
      method: 'POST',
      body: formData,
      headers: {
        'Accept': 'application/json'
      }
    })
    .then(response => response.json())
    .then(data => {
      // Limpiar el contenido de los párrafos
      nomPropietario.innerHTML = '';
      numCuenta.innerHTML = '';
      bancoReceptor.innerHTML = '';
      telefono.innerHTML = '';
      documento.innerHTML = '';
      tpCuenta.innerHTML = '';
      correo.innerHTML = '';

      data.forEach(metodo => {
        let nCuenta =`${metodo.numero_cuenta}`;
        let banco =`${metodo.banco}`;
        let nTelefono =`${metodo.num_telefono}`;
        let docIdetidad =`${metodo.doc_identidad}`;
        let correoElectro =`${metodo.correo_electro}`;
        let nombre =`${metodo.nom_propietario}`;
        let tipoCuenta =`${metodo.tip_cuenta}`;


        nomPropietario.innerHTML += (nombre);
        numCuenta.innerHTML += (nCuenta);
        telefono.innerHTML += (nTelefono);
        documento.innerHTML += (docIdetidad);
        correo.innerHTML += (correoElectro);
        tpCuenta.innerHTML += (tipoCuenta);
        bancoReceptor.innerHTML += (banco);

      });

      cuentaMonto.classList.remove('input-invisible');
    })
    .catch(error => console.error(error));
});
//mostrar monto
Suscripcion.addEventListener('change', (event) => {
  var selectedOption = event.target.value;
  var Suscripcion_monto = (selectedOption);

  var formData = new FormData();

  formData.append('suscripcion', Suscripcion_monto);

  fetch('../../sql/vistas/validacion_suscripcion.php', {
      method: 'POST',
      body: formData,
      headers: {
        'Accept': 'application/json'
      }
    })
    .then(response => response.json())
    .then(data => {
      // Limpiar el contenido de los párrafos
      monto.innerHTML = '';

      data.forEach(metodo => {
        let sMonto =`${metodo.valor_nivel}`;
        monto.innerHTML += (sMonto);
      });

    })
    .catch(error => console.error(error));
}); 
// validacion de imagen
fileInput.addEventListener('change', (event) => {
  var file = event.target.files[0];
  let  nombreFoto = file.name;
  var allowedExtensions = /(\.jpg|\.png)$/i;
  let check = document.getElementById('check');
  let cancel = document.getElementById('cancel');
  let camara = document.getElementById('camara');
  let mensajeDocumento = document.getElementById('mensajeDocumento');

    if (!allowedExtensions.exec(file.name)) {
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Solo se permite archivos JPG o PNG',
      })
      camara.style.display = "none";
      check.classList.add("input-invisible");
      cancel.classList.remove("input-invisible");
      mensajeDocumento.innerHTML  = "el archivo "+ nombreFoto + " no esta permitido" ;
    } else {
    camara.style.display = "none";
    cancel.classList.add("input-invisible");
    check.classList.remove("input-invisible");
    mensajeDocumento.innerHTML  = "el archivo "+ nombreFoto + " se cargo de foma correcta" ;
    }
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
  
    // validar Select Metodo
    var optForm = document.forms["formulario"]["metodoPago"].selectedIndex;
    if( optForm == null || optForm == 0 ) {
        alertaMetodo.style.color = 'red';    
        errores.push(alertaMetodo.textContent = "Escoja algun metodo de pago");
    } else {
        alertaMetodo.style.color = 'green';
        alertaMetodo.textContent = "Todo bien";
    }
  
    // validar Select Suscripcion
    var optForm = document.forms["formulario"]["suscripcion"].selectedIndex;
    if( optForm == null || optForm == 0 ) {
        alertaSuscripcion.style.color = 'red';    
        errores.push(alertaSuscripcion.textContent = "Escoja algun nivel usuario");
    } else {
        alertaSuscripcion.style.color = 'green';
        alertaSuscripcion.textContent = "Todo bien";
    }
  
    // validar Fecha
    if ((fechaEmision.value>fechaActual || fechaEmision.value<fechaLimite)) {
      alertaFecha.style.color = 'red';    
      errores.push(alertaFecha.textContent = "solo se permite pago procesados mas tardar a 7 dias a dia actual");
  
    } else {
      alertaFecha.style.color = 'green';
      alertaFecha.textContent = "Todo bien";
    }
    //validar referencia
    if (!referencia.value.trim()) {
      alertaReferencia.style.color = 'red';    
      errores.push(alertaReferencia.textContent = "No olvides agregar una foto tuya para completar el registro.");
    }else{
      alertaReferencia.style.color = 'green';    
      alertaReferencia.textContent = "Todo bien";
    }
    //validar foto de Capture
    if (!fileInput.value.trim()) {
      alertaCapture.style.textAlign = "center";    
      alertaCapture.style.color = 'red';    
      errores.push(alertaCapture.textContent = "No olvides agregar una foto de tu comprovante de pago.");
    }else{
      alertaCapture.style.textAlign = "center";    
      alertaCapture.style.color = 'green';    
      alertaCapture.textContent = "Todo bien";
    }
    
  //Reviso el formulario si tiene errores o tine campos vacios
    if (errores.length !== 0) {
      pintarMensajeError(errores);
      return;
    }
    return true;
  };
