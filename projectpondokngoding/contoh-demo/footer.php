    <footer>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
      <script type="text/javascript">
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()

          $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
          })

          $('#list-wrapper').click(function(){
            $('#modal-trigger').click();
          })
        })
      </script>

    </footer>
  </body>
</html>
