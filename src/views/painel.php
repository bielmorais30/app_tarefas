<?php
include(__DIR__."\../helpers/protect.php");
    // if(!isset($_SESSION)){
    //     session_start();
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <style>
        
    </style>
</head>
<body>

   
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container-fluid">
  <a class="navbar-brand fs-1 px-3 fw-bolder" style="font-family: 'EB Garamond', serif;">task.me</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
      
       
    
            <ul class="navbar-nav me-2 mb-2 mb-lg-0">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="Perfil" class="rounded-circle mr-2" style="width: 40px">
                <li class="nav-item">
                    <a class="nav-link active ms-2" data-bs-toggle="dropdown" aria-current="page" href="#" ><?php echo ucfirst($_SESSION['nome']);?></a>

                </li>
                <li class="nav-item me-2">
                    <div class="sair_div">
                    <a class="nav-link active ms-2 link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" aria-current="page" href="logout.php"  id="sair" >Sair</a>
                    </div>
                    

                </li>
                            
            
            </ul>
        
        
  </div>
</nav>


        <hr>


    Bem vindo ao Painel, <?php echo $_SESSION['nome']?>
    <p>
        <a href="logout.php">Sair</a>
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>