<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <?php include("./connectiondb.php");
    session_start();
    ?>
</head>
<body class="bg-white">

<?php if(isset($_SESSION['uname'])) {?>
    <nav class="nav navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <h1>University of vavuniya medicalcenter</h1>
                    </div>

                   <p>you loged as <?php echo $_SESSION['uname'] ; ?></P>
                        <a class="nav nav-link fw-bold" href="./logout.php">logout</a>
                   
                </nav>

   

                <?php }else{ ?>
                    <nav class="nav navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <h1>University of vavuniya medicalcenter</h1>
                    </div>

                   
                        <a class="nav nav-link fw-bold" href="./login.php">login</a>
                   
                </nav>
                  

                <?php } ?>