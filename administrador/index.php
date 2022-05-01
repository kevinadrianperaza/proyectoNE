<?php 
 date_default_timezone_set("America/Mexico_City");
 $date = new DateTime();

 $fecha_inicio = $date->format('Y');

 
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>CESC Administrador</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <link rel="shortcut icon" href="../imagenes/Logo-fis.png">

    <script type="text/javascript" language="javascript">   
      history.pushState(null, null, location.href);
      window.onpopstate = function () {
        history.go(1);
      };
    </script>

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">CESC</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>-->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <form class="form-inline my-2 my-lg-0" style="color: #fff">
                        
                        <?php   
                        session_start();
                            if (isset($_SESSION['IdUser'])) {
                            echo "Bienvenido " . $_SESSION['nameUser'] . "\t";
                            

                            echo "<a href='../cerrar_sesion.php' class='btn btn-danger' style='margin-left: 10px'>Cerrar Sesión</a>";
                            } else {
                            header("Location: ../index.php");
                            }
                        ?>
                </form>
    
            </ul>
        </nav>

        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menú</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class=""></i></div>
                                Encuestas
                            </a>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class=""></i></div>
                                Preguntas
                            </a>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class=""></i></div>
                                Respuestas
                            </a> 
                </nav>
                
            </div>
            <div id="layoutSidenav_content">
                <main>  
                    <div class="container" style="margin-top: 30px;">
                                    <div class="row">
                                        <div class="col-md-12 row">
                                            <div class="col-md-10 col-xs-12">
                                                <h3>SISTEMA CESC ENCUESTAS</h3>
                                            </div>
                                        </div>
                                    </div>                  
                        <!-- Modal Agregar Nueva Encuesta -->    
                            
                                <div class="modal-content">
                                    <div class="modal-body">
                                    

                                        <div class="form-group row">
                                                <label for="titulo" class="col-sm-3 col-form-label">Título</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="titulo" placeholder="Título" autocomplete="off" autofocus>
                                                </div>
                                            </div>
                                    <div class="form-group row">
                                        <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
                                        <div class="col-sm-9">
                                        <textarea class="form-control" id="descripcion" placeholder="Descripción"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fecha_final" class="col-sm-3 col-form-label">Fecha Final</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fecha_final" value="<?php echo $fecha_inicio ?>"  autocomplete="off">
                                        <p>Fomato: día-mes-año</p>
                                        </div>
                                    </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" onclick="agregarEncuesta()">Agregar Encuesta</button>
                                        <input type="hidden" id="hidden_id_usuario" value="<?php echo $_SESSION['IdUser'] ?>">
                                    </div>

                                    </div>
                                                    
                                <hr/>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Encuestas:</h4>
                                        <div class="table-responsive">
                                            <div id="tabla_encuestas"></div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CESC 2022</div>
                            <div>
                                <a href="#"></a>
                                &middot;
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="js/encuestas.js"></script>
    </body>
</html>
