<?php

session_start();
    if(!isset($_SESSION['userlogin'])){
        header("Location: login.php");
    }
    if (isset($_POST['search'])) {
        require "3-search.php";
    }
    
?>
<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Importacion de CSS de la carpeta (stylesheet.css)-->
    <link rel= "stylesheet"  type="text/css"  href="stylesheet.css"/>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset = "utf-8"/>    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> admin page</title>
	<title></title>
</head>
<body style="background-image: url(bg.png);">

    
        <div id="content">
            <?php
            include 'navbar.php';
            ?>
            <div class="container-fluid " style="height: auto;width: 90%;margin-top: 40px;"> 
                <div class=" container-fluid " style="height: auto;width: 95%;margin-top: 20px">
                    <div class="row ">
                        <div class="col-sm">
                            <div class=" container-fluid border border-dark rounded" style="background: white;height:auto ;width: 146%;margin-top: 20px;margin-bottom: 5px">
                                <form method="post">
                                    <div class="form-group text-left">
                                        <input class="form-control m-auto mt-1" style="width: 60%; float: left;" type="text" name="search" placeholder="Escribe una Sustancia" required/>
                                        <input type="submit" value="Buscar">
                                    </div>
                                </form> 
                                
                                <div class="container">
                                    <!--Search Results-->
                                    <div class="row">
                                        <h2>Busquedas</h2>
                                        <div class="col-sm-12">
                                            <div class="card text-left">
                                                <div class="card-header">
                                                    <ul class="nav nav-tabs card-header-tabs">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="#">Resultados</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <?php require_once "adminSearch.php"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <div class="col-sm">
                            <div class=" container-fluid border border-dark rounded" style="background: white;height: auto;width: 55%;margin-top: 20px; margin-right: 8px">
                                <div class=" container-fluid border border-dark rounded" style="background: white;height: 171%;width: 55%;margin-top: 20px; margin-right: 8px">
                            <form action="subir.php"method="post" name="f_prof"id="f_prof" enctype="multipart/form-data" style="width: 75%">
              <div class="form-group" style="margin-top: 8px">
                <label>Nombre de la sustancia</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
              </div>
              
              <div class="form-group">
                <label for="formGroupExampleInput2">PDF</label>
                <div class="custom-file">
                    <input type="file"  class="custom-file-input" name="fichero" id="fichero"  required>
                    <label class="custom-file-label" for="archivopdf" data-browse="Seleccionar">Escojer archivo...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
              </div>
                <input type="submit" class="btn btn-primary" value="Enviar"  name="ok" id="ok">
                
            </form>
                        </div>
                            </div>
                        
                        </div>                  
                    </div>
                </div>
            </div>
            
        </div>   <!--Termina Contenido-->


        <?php require_once "modalInsert.php" ?>
        <?php require_once "modalUpdate.php" ?>
        
        <script src="js/crud.js"></script>
        

        <!--Pie de Pagina-->
        <?php
            include 'footerNav.php';
        ?>
</body>
</html>
