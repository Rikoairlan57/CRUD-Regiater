<!-- Optional JavaScript; choose one of the two! -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap-show-password.min.js"></script>


    <?php if (isset($_GET['m'])) : ?>
      <div class="flash-data data-flashdata="<?= $_GET['m'] ?>></div>
      <?php endif; ?>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- serach -->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>



    <script>
      $(document).ready(function() {
        $('#datatableid').DataTable();
      } );
    </script>

    <?php
      if(isset($_SESSION['status']) && $_SESSION['status'] !='')
      {
        ?>
          <script>           
              swal({
                title: "<?php echo $_SESSION['status']; ?>",
                // text: "You clicked the button!",
                icon: "<?php echo $_SESSION['status_code'];  ?>",
                button: "OK, done",
              });            
          </script>
        <?php
        unset($_SESSION['status']); 
            }   
      ?>

      <!-- <script>
        $('.delete_btn_ajax').'click', function(e) {
          e.preventDefault();
          const href = $(this).attr('href')

          swal.fire({
            title: 'are you sure delete',
            text: 'delete',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'delete record',
          }).then((result) => {
            if (result.value){
              document.location.href =href;
            }
          })
        })




      </script> -->

      <!-- <script>
        $(document).ready(function () {

          $('.delete_btn_ajax').click(function (e) {
            e.preventDefault();
            // console.log('hello');

              var deleted = $(this).closest("tr").find("delete_id_value").val();
              console.log(deleted);

            swal({
              title: "Are you sure?",
              text: "Once deleted, you will not be able to recover this imaginary file!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                
                $.ajax({
                  type: "POST",
                  url: "code.php",
                  data: {
                    "delete_btn_set": 1,
                    "delete_id": deleted,
                  },
                  success: function (response) {
                    swal("Data deleted",{
                      icon: "success",
                    }).then((result) => {
                      location.reload();
                    });
                  };
                  
                });
              } 
            });
          });
        });

      </script> -->

  </body>
</html>