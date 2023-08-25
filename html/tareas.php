<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>APP Tareas</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estas seguro?, los datos seran eliminados');
        }
    </script>
    
    
</head>
<!-- body -->

<body class="main-layouts">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="header_to d_none">
            <div class="container">
               <div class="row">
               </div>
            </div>
         </div>

         <div class="header_bo">
            <div class="container">
               <div class="row">
                  <div class="col-md-9 col-sm-7">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li>
                                 <a class="nav-link" href="agregar.php"> Nueva Tarea</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-3 col-sm-5 d_none">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- end banner -->
    <!-- about section -->
    <!-- about section -->
    <!-- service section -->

    <!-- service section -->
    <!-- portfolio -->
    <!-- end portfolio section -->
    <!-- business  section -->
    <!-- end business  section -->
    <!-- team  section -->

    <?php
        $hotel="";
        
        ob_start();
        include('conexion.php');
        
        $conexion = conecta();

        
        $sql="select * from tareas";
        $resultado=mysqli_query($conexion,$sql);

    ?>

    <div>
        <div id="contact" class="contact ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2><strong class="yellow"></strong><br>Tareas Actuales</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <style>
                    #miTabla {
            border-collapse: collapse;
            width: 100%;
        }

        #miTabla th, #miTabla td {
            text-align: center;
            padding: 8px;
        }

        #miTabla th {
            background-color: #009688;
            color: white;
        }

        #miTabla tr:hover {
            background-color: #ddd;
            font-weight: bold;
        }
        
        p{
            font-size: 1.5vw;
            padding: 5px;
            font-weight: bold;
        }
        
        a:hover{
            color:blue;
            font-size: 2vw;
        }
        
        </style>

       <table id="miTabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Completada</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
               
                <?php
                    while($filas=mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                    <td><?php echo $filas['ID']?></td>
                    <td><?php echo $filas['Nombre']?></td>
                    <td><?php echo $filas['Descripcion']?></td>
                    <td><?php echo $filas['Completada']?></td>
                    <td>
                        <p><?php echo "<a href='realizar-tareas.php?id=".$filas['ID']."'>Realizar tarea</a>";?></p>
                        <p><?php echo "<a href='eliminar-tareas.php?id=".$filas['ID']."'>Eliminar tarea</a>";?></p>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
       </table>
            
       
    </div>

   

    <!-- end team  section -->
    <!-- testimonial -->
    <!-- end testimonial -->
    <!-- contact  section -->
    <!-- end contact  section -->
    <!--  footer -->
    <footer>
        <div class="footer">

        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>