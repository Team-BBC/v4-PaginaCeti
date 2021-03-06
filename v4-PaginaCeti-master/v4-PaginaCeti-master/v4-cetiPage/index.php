<?php
    if (isset($_POST['search'])) {
        require "3-search.php";
    }
?>
<!DOCTYPE html>
<html>
    <head> 

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!--Importacion de CSS de la carpeta (stylesheet.css)-->
        <link rel= "stylesheet"  type="text/css"  href="stylesheet.css"/>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Inventario almacen quimico</title>

    </head>

    <body style="background-image: url(bg.png);">
        <div id="content">
            <?php
            include 'navbar.php';
            ?>
        
            <div class = "text-center text-light mt-5" style="width: 100%;"> 
                <h2>
                    <label >Division de Tecnologias Quimicas</label>
                </h2>
                <h3 > 
                    <label>hojas de Seguridad</label>
                </h3>
            </div>
            <!--Busqueda-->
            <form method="post">
                <div class="form-group text-center">
                    <input class="form-control m-auto mt-1" style="width: 60%;" type="text" name="search" placeholder="Escribe una Sustancia" required/>
                    <input type="submit" value="Buscar">
                </div>
            </form>     
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card text-left">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <p>Resultados</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 m-auto">
                                        <?php require_once "search.php";
                                            
                                        ?>
                                    </div>
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