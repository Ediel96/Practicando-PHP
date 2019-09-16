<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php  


?>

<style>

h2{
  text-align:center;
  margin-left:4px;
}

p{
    margin:5px;
}

.titletree{
    width: 20px;
    height: 20px;
}

.check{
    margin-left: 20px;
}

</style>
    
    <div class="container">

        <h2 class="titulo">Creacion del proyecto</h2>

        <form action="">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modulos: </label>
            <div class="col-sm-10">
                <select class="custom-select" id="Modulos" aria-label="Example select with button addon">
                    <option selected>Tipo de modulo</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Titulo proyecto: </label>
            <div class="col-sm-4">
                <input type="text" class=" form-control" id="inputProyecto"  placeholder="Titulo del proyecto">
            </div>
            

            <label class="col-sm-2 col-form-label  ">QW o Proyecto: </label>
            <div class="col-sm-4">
                <select class=" custom-select col-form-label" id="qwProyecto" aria-label="Example select with button addon">
                    <option selected>Tipo de proyecto</option>
                    <option value="1">QW</option>
                    <option value="2">Proyecto</option>
                </select>
            </div>
            
        </div>

        <div class="form-group">
            <label class=" col-form-label">Observaciones </label>
            <textarea class="form-control col-sm-12" id="Observaciones" name="comemtarioGerente[]"rows="3"></textarea>
        </div>

        <button type="button" class="btn btn-primary" id="crear">Crear</button>

        </form>


        <br> 
        <h2 class="titulo">Lista de proyectos</h2>
        <br>

        <form action="">

        <div class="form-group row">
            <label class="col-sm-4 col-form-label" id="moduloNombre">Modulo: nombre de modulo </label>
            <label class="col-sm-4 col-form-label" id="proyectoNombre">Proyecto: Nombre del proyecto </label>
            <label class="col-sm-4 col-form-label" id="tipoProyecto">Tipo de proyecto </label>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label  ">Creacion accion:  </label>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter" id="butonDeMas"> + </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Creacion accion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class=" modal-body" style="margin:20px;">
                <div class="form-group row">
                    <label for="" class="col-md-4 col-form-label">Accion:</label>
                    <input type="text" class="col-md-8 form-control" id="accionModal" name="cargoA[]">
                </div>
                <div class="form-group row">
                    <label for="" class="col-md-4 col-form-label">Responsable:</label>
                    <input type="text" class="col-md-8 form-control" id="responsableModal" name="cargoA[]">
                </div>
                <div class=" form-group row">
                    
                    <label for="" class="col-sm-4 col-form-label">Conogramas:</label>
                    
                        <div class="col-sm-4 ">
                            <select class=" custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                <option selected>S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="S4">S4</option>
                                <option value="S5">S5</option>
                                <option value="S6">S6</option>
                                <option value="S7">S7</option>
                                <option value="S8">S8</option>
                            </select>
                        </div>
                    <div class="col-ms-4">
                        <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option selected>Critico</option>
                            <option value="Retraso">Retraso</option>
                            <option value="Acorde">Acorde al plan</option>
                            <option value="No ha iniciado">No ha iniciado</option>
                        </select>
                    </div>
                </div>  

                <div class="form-group row">
                    <label class="col-md-4 col-form-label">Observaciones </label>
                    <textarea class="form-control col-sm-12 col-form-label" id="comemtarioGerente" name="comemtarioGerente[]"rows="3"></textarea>
                </div>

            </div>

            <div class="form-group row">

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerra</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
            </div>
        </div>
        </div>
                

        </form>



    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>