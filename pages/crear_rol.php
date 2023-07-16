<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Asignar rol</title>
    
    <?php include("partes/enlaces.php");?>
</head>
<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        <?php include("../pages/partes/menu.php");?>
        <div id="content">
            <div class="top-navbar">
                <div class="xd-topbar">
                    <div class="row">
                        <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                            <div class="xp-menubar">
                                <span class="material-icons text-white">signal_cellular_alt</span>

                            </div>
                        </div>

                        <div class="col-md-5 col-lg-3 order-3 order-md-2">
                            <div class="xp-searchar">        
                            </div>
                        </div>

                        <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                            <div class="xp-profilebar text-right">
                                <nav class="navbar p-0">
                                    <ul class="nav navbar-nav flex-row ml-auto">
                                        <li class="dropdown nav-item">
                                            <a href="#" class="nav-link" data-toggle="dropdown">
                                                <img src="../images/usuario.png" style="width:40px; border-radius:50%;">
                                                <span class="xp-user-live"></span>
                                            </a>

                                            <ul class="dropdown-menu small-menu">
                                                <li>
                                                    <a href="#"><span class="material-icons">person_outline</span>
                                                    Perfíl
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="../pages/cerrar_sesion.php"><span class="material-icons">logout</span>
                                                    Cerrar sesión
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>

                    </div>

                  
                    <div class="xp-breadcrumbbar text-center">
                        <h4 class="page-title">Bienvenido</h4>
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="../pages/index.php"> <?php echo $_SESSION['DBnombre']." ". $_SESSION['DBapellido'];?> </a></li>
                          <li class="breadcrumb-item active" aria-curent="page"> <?php echo $_SESSION['rol'];?> </li>
                        </ol>
                     </div>
                </div>
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

    </div>
    
</body>
</html>