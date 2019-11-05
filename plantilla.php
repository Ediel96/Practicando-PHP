<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sweet Alert con jQuery</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.all.min.js"></script>

  </head>
  <body>

    <!-- NAV BAR -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="navbar-inner">
        <div class="container">
          <p class="navbar-text navbar-left nombre-plugin">Sweet Alert con jQuery</p>
          <p class="navbar-text navbar-left link-post"><a href="http://blog.endeos.com/notificaciones-al-usuario-con-jquery-sweet-alert/" class="navbar-link">Volver al artículo</a></p>
        </div>
      </div>
    </nav>
    <!-- /NAV BAR -->




    <!-- MAIN CONTENT -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- the content -->

          <div class="row demo">
            <div class="codigo col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <span>Declara la variable GET <i>condicion</i> con valor <i>php</i> poniendo al final de la URL "?condicion=php"</span>
            </div>
          </div>

          <?php 
            if ( isset($_GET["condicion"]) && $_GET["condicion"] == "php" ) {
              echo "<script>jQuery(function(){swal.fire(\"¡Bien!\", \"Condición cumplida\", \"success\");});</script>";
            }else{
              echo "
              <script>
                jQuery(function(){
                  swal.fire({
                    icon:'error',
                    title: 'Custom animation with Animate.css',
                    showClass: {
                      popup: 'animated fadeInDown faster'
                    },
                    hideClass: {
                      popup: 'animated fadeOutUp faster'
                    }
                  })
                });
                
              </script>";
            }
          ?>


            <input type="button" class="btn btn-primary boton" value="Boton"></input>

          <script>
            $('.boton').click(function(){
              Swal.fire({
                title: 'Seguro?',
                text: "vas a eliminar el tranner ",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, quiero eliminarlo!',
                cancelButtonText : 'Cancelar'
              }).then((result) => {
                if (result.value) {
                  Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                  )
                  console.log('Se eliminar el archivo');
                }
              })
            });
          </script>


        </div>
      </div>
    </div>
    <!-- /MAIN CONTENT -->

  </body>
</html>