
<?php
    require "estados.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=" width=device-width, 
                                    initial-scale=1.0">
    <title>Paso1</title>
    <link rel="stylesheet" href="../login/dist/main.css">

</head>

<body class="d-flex flex-column h-100 bg-ligth">
    <!-- -------------------------NAV CON LOGO PNA----------------------------- -->
    <header>
        <div class="container ">
            <nav class="navbar navbar-expand-md fixed-top bg-white shadow">
                <div class="container">
                    <a href="/index.html" class="navbar-brand"><img src="../login/img/descarga.png" width="80px" class=""></a>
                    <a href="#" class="my-2 my-sm-0"></a>
                    <button href="#" onclick="confirmLogout('/home/cerrarSesion')" class="btn btn-primary my-2 my-sm-0"
                        data-bs-toggle="modal" data-bs-target="#miModal">Salir</button>
                </div>
            </nav>
        </div>
        <!-- --------------------------Modal nav ----------------------------------- -->
        <div class="modal fade" id="miModal" tabindex="-1" aria-hidden="true" aria-label="modalTitle"
            data-bs-backdrop="statick">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalTitle">Atención!</h4>
                        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        "Estas por cerrar la sesión."
                        <br>
                        <br>
                        "¿Estas seguro que quieres continuar"
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Continuar</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <div class="container mt-5">

    </div>
    <!-- ------------------ Datos del postulante -------------------------- -->
    <div class="container mt-5 ">
        <div class="container-fluid py-0 mt-5 ">
            <div class="container px-0 mt-5">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-9 tab" style="display: block ;">
                            <div class="contains">
                                <div class="row justify-content-center">
                                    <h5 class="contains1">Datos del postulante</h5>
                                    <h3 class="contains2">Datos personales 1</h3>
                                    <hr class="linea1 mt-3">
                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="clear:none; display:inline-block" for="">
                                                    Fecha de nacimiento(*)</label>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <select name="" id="" class="required form-control error">
                                                                <option value="">Día</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group ">
                                                            <select id="" class="required form-control error">
                                                                <option value="">Mes</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <select id="año_nacimiento"
                                                            class="required form-control error">
                                                            <option value="">Año</option>
                
                                                        </select>

                                                    </div>
                                                    <div class="mt-5">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Nombre (*)</label>
                                                                    <input type="text" class="required form-control"
                                                                        id="nombre" name="nombre" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Apellido (*) </label>
                                                                    <input type="text" id="apellido" name="apellido"
                                                                        class="required form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Sexo (*)</label>
                                                                    <select id="sexo" name="sexo"
                                                                        class="required form-control valid">
                                                                        <option value="">Seleccionar</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tipo de documento (*)</label>
                                                        <select id="tipo_documento" name="tipo_documento"
                                                            class="form-control">
                                                            <option value="">Seleccionar</option>
                                                            <option value="1">Documento Nacional de Identidad</option>
                                                            <option value="3">Partida de nacimiento</option>
                                                            <option value="6">Credencial residencia precaria</option>
                                                            <option value="7">Pasaporte extranjero</option>
                                                            <option value="8">Cédula extranjera</option>
                                                            <option value="9">Otro documento extranjero</option>
                                                            <option value="10">Documento en trámite</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Número (*)</label>
                                                        <input type="text" id="numero_documento" name="numero_documento"
                                                            value="" class="form-control error">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>CUIL (*)</label>
                                                        <input type="text" id="numero_documento" name="numero_documento"
                                                            value="" class="form-control error">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>País de nacimiento (*)</label> <select id="nacionalidad"
                                                            name="nacionalidad" class="required form-control">
                                                            <option value="1">Argentina</option>
                                                        
                                                        </select>
                                                        <br>
                                                        <!-- SELECION DE PROVINCIA Y NACIMIENTO -->
                                                        <div class="form-group">
                                                            <div class="row">
                                                        <div class="col-md-4">
                                                            <!-- SELEC PROVINCIA -->
                                                            <div class="form-group">
                                                                <label>Provincia de nacimiento (*)</label> 
                                                                <select id="id_estado" class="form-control">
                                                                 <option value="">Seleccionar estado</option>
                                                                   <?php
                                                                          foreach ($estados as $estado) {
                                                                        echo '<option value="'.$estado['id'].'">'.$estado['nombre'].'</option>';
                                                                                        }//end foreach
                                                                     ?>
                                                                      </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!-- SELECT LOCALIDAD -->
                                                            <div class="form-group">
                                                                <label>Localidad(*)</label>
                                                               <select id="municipios" class="form-control">
                                                                 <option value="">Seleccionar municipio</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>

                                                    
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6 col-6">
                                    <a onclick="" class="btn btn-lg btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#miModal"><i class="fa fa-times d-block d-sm-none"></i><span
                                            class="d-none d-sm-block ml-2">Volver</span></a>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <a class="btn btn-lg btn-primary nextBtn"><i
                                            class="fa fa-chevron-right d-block d-sm-none"></i><span
                                            class="d-none d-sm-block ml-2"> Siguiente</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="mt-">
        <footer class="footer mt-auto py-2 bg-dark">
            <div class="mx-5">
            </div>
        </footer>
    </div>


    
    <script>
            document.querySelector('#id_estado').addEventListener('change', event => {
                fetch('municipios.php?id_estado='+event.target.value)
                .then(res => {
                    if(!res.ok) {
                        throw new Error('Hubo un error en la respuesta');
                    }//en if
                    return res.json();
                })
                .then(datos => {
                    let html = '<option value="">Seleccionar municipio</option>';
                    if(datos.data.length > 0) {
                        for (let i = 0; i < datos.data.length; i++) {
                            html += `<option value="${datos.data[i].id}">${datos.data[i].nombre}</option>`;
                        }//end for
                    }//end if
                    document.querySelector('#municipios').innerHTML = html;
                })
                .catch(error => {
                    console.error('Ocurrió un error '+error);
                });
            });
        </script>
</body>
</html>