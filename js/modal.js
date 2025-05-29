window.onload = function () {
  const overlay = document.getElementById("modalOverlay");
  const modalContent = document.getElementById("modalContent");
  const btnAceptar = document.getElementById("btnAceptar");

  // Abrir modal: añadimos la clase 'active' para manejar visibilidad y centrado vía CSS
  function abrirModal() {
    overlay.classList.add('active');
    modalContent.scrollTop = 0;
    btnAceptar.disabled = true;
  }

  // Cerrar modal: removemos la clase 'active'
  function cerrarModal() {
    overlay.classList.remove('active');
  }

  // Habilitar botón Aceptar al llegar al final del scroll
  modalContent.addEventListener("scroll", () => {
    const scrollTop = modalContent.scrollTop;
    const scrollHeight = modalContent.scrollHeight;
    const clientHeight = modalContent.clientHeight;

    if (scrollTop + clientHeight >= scrollHeight - 10) {
      btnAceptar.disabled = false;
    }
  });

  // Acción al hacer clic en Aceptar
  btnAceptar.addEventListener("click", () => {
    alert("¡Términos aceptados!");
    cerrarModal();
  });

  // Exponer funciones para el HTML
  window.abrirModal = abrirModal;
  window.cerrarModal = cerrarModal;
};
