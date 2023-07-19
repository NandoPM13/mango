<?php
session_start();
include('../conexion.php');
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
   
    
    <title>Inicioprograma1</title>
    
    <?php include("partes/enlaces.php");?>
    <link rel="stylesheet" href="../css/misestilos.css">

</head>
<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
            <?php include("../pages/partes/menu.php");?>
        <div id="content">
            <?php include("../pages/partes/nav.php");?>
           
            <br>

            <!--***************************************************************-->
            <div class="main-content">
                <div class="row">
                    <!---PRIMERA COLUMNA-->
                    <div class="col">
                        <div class="card">
                            <div class="card-header">Historia del mango</div>

                            <div class="card-body">
                                   <!-- Contenido de la primera tarjeta -->
                                El mangodfsdf
                            </div>
                        </div>
                    </div>
                    <!---SEGUNDA COLUMNA-->
                    <div class="col">
                        <div class="card">
                            <div class="card-header">Historia del mango</div>

                            <div class="card-body">
                                <!-- Contenido de la primera tarjeta -->
                                El mangodfsdf
                            </div>
                        </div>
                    </div>
                </div><!--FIN PRIMERA FILA-->
                <br>
                    
                 
                <!--TABLA-->

                <div class="row"><!--SEGUNDA FILA-->
                    <div class="col-md-12">
                        <div class="table-wrapper">
                        <div class="table-title" id="mi_titulo">
                            <div class="row">
                                <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                    <h2 class="ml-lg-2"><b>Producción mundial</b></h2>
                                </div>
                                            
                            </div>
                        </div>
                                    



                            <table class="table table-striped table-bordered table-hover" style="border-radius: 5px;" id="dataTables-example">
                                <thead style="background-color: #a66813;border-radius: 5px;color:white;">
                                    <tr>
                                        <th><b>Pais</b></th>
                                        <th><b>Tipo mango</b></th>
                                        <th><b>Descripción</b></th>
                                        <th><b>Detalles</b></th>
                                        <th><b>Precio</b></th>
                                    


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ecuador</td>
                                        <td>Kanela</td>
                                        <td>Mango de color rojo</td>
                                        <td>Venta al por mayor</td>
                                        <td>123$</td>

                                    </tr>
                                </tbody>
                            </table>



                                
                        </div>
                    </div>
                </div>

                <br>
            <div class="row">
                
                <div class="col">
                    <div class="card">
                        <div class="card-header">Tipos de mango</div>

                        <div class="card-body">
                            <!-- Contenido de la primera tarjeta -->
                            El mangodfsdf
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--***************************************************************-->

           

        </div>
            
    </div>
    
 

    <script type="text/javascript">
        $(document).ready(function(){
           $(".xp-menubar").on('click',function(){
             $("#sidebar").toggleClass('active');
             $("#content").toggleClass('active');
           });
           
           $('.xp-menubar,.body-overlay').on('click',function(){
              $("#sidebar,.body-overlay").toggleClass('show-nav');
           });
           
        });
   </script>

    
</body>
</html>



