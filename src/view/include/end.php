<script src="/src/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>

  if (exampleModal) {
    exampleModal.addEventListener('show.bs.modal', event => {
      const button = event.relatedTarget;
      const recipient = button.getAttribute('data-bs-whatever');
      const imgModal = document.getElementById('imgModal');
      imgModal.src = recipient;
    });
  }
  
</script>

</body>

</html>