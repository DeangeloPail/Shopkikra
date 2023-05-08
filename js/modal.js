var exampleModal = document.getElementById('exampleModal');

exampleModal.addEventListener('show.bs.modal', event => {
  // Button that triggered the modal
  const button = event.relatedTarget
  // Extract info from data-bs-* attributes
  const idu = button.getAttribute('data-bs-idu')
  const per = button.getAttribute('data-bs-per')
  const fot = button.getAttribute('data-bs-fot')
  const nom = button.getAttribute('data-bs-nom')
  const doc = button.getAttribute('data-bs-doc')
  const fec = button.getAttribute('data-bs-fec')
  const pai = button.getAttribute('data-bs-pai')
  const tel = button.getAttribute('data-bs-tel')
  const ref = button.getAttribute('data-bs-ref')
  const niv = button.getAttribute('data-bs-niv')
  const ver = button.getAttribute('data-bs-ver')
  const act = button.getAttribute('data-bs-act')
  const cor = button.getAttribute('data-bs-cor')

  const url="../../images/profiles/"
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  // Update the modal's content.
  const modalTitle = exampleModal.querySelector('.modal-title')
  const idUsuario = document.getElementById('idUsuario')
  const usuario = document.querySelector('.usuario')
  const foto = document.querySelector('.foto')
  const nombre = document.querySelector('.nombre')
  const documento = document.querySelector('.documento')
  const fecha = document.querySelector('.fecha')
  const pais = document.querySelector('.pais')
  const telefono = document.querySelector('.telefono')
  const referido = document.querySelector('.referido')
  const nivel = document.querySelector('.nivel')
  const verificaion = document.querySelector('.verificaion')
  const actividad = document.querySelector('.actividad')
  const correo = document.querySelector('.correo')

  modalTitle.textContent = `Usuario ${per}`
  idUsuario.value = idu
  usuario.textContent= per
  foto.src = url + fot
  nombre.textContent= nom
  documento.textContent= doc
  fecha.textContent= fec
  pais.textContent= pai
  telefono.textContent= tel
  referido.textContent= ref
  nivel.textContent= niv
  verificaion.textContent= ver
  actividad.textContent= act
  correo.textContent= cor

})
