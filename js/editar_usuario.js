const exampleModal = document.getElementById('exampleModal');

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
  const cor = button.getAttribute('data-bs-cor')

  const url="../../images/profiles/"
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  // Update the modal's content.
  const modalTitle = exampleModal.querySelector('.modal-title')
  const idUsuario = document.getElementById('idUsuario')
  const usuario = document.getElementById('usuario')
  const foto = document.querySelector('.foto')
  const nombre = document.getElementById('nombre')
  const documento = document.getElementById('documento')
  const fecha = document.getElementById('fecha')
  const pais = document.getElementById('pais')
  const correo = document.getElementById('correo')

  modalTitle.textContent = `Usuario ${per}`
  idUsuario.value = idu
  usuario.value= per
  foto.src = url + fot
  nombre.value= nom
  documento.value= doc
  fecha.value= fec
  pais.value= pai
  correo.value= cor

})
