const exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', event => {
  // Button that triggered the modal
  const button = event.relatedTarget
  // Extract info from data-bs-* attributes
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


  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //asdsda
  // Update the modal's content.
  const modalTitle = exampleModal.querySelector('.modal-title')
  const usuario = document.getElementById('usuario')
  const foto = document.getElementById('foto')
  const nombre = document.getElementById('nombre')
  const documento = document.getElementById('documento')
  const fecha = document.getElementById('fecha')
  const pais = document.getElementById('pais')
  const telefono = document.getElementById('telefono')
  const referido = document.getElementById('referido')
  const nivel = document.getElementById('nivel')
  const verificaion = document.getElementById('verificaion')
  const actividad = document.getElementById('actividad')
  const correo = document.getElementById('correo')

  modalTitle.textContent = `Usuario ${per}`
  usuario.value = per
  foto.value= fot
  nombre.value= nom
  documento.value= doc
  fecha.value= fec
  pais.value= pai
  telefono.value= tel
  referido.value= ref
  nivel.value= niv
  verificaion.value= ver
  actividad.value= act
  correo.value= cor
})
