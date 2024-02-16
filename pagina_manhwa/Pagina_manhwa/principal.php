<?php 
require'usuario.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--booststrap carrucel-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--booststrap modal-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!--css de la pagina principal-->
    <link rel="stylesheet" href="P_Principal.css">
   <!--css de las luces-->
   <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!--luces del fondo-->
    <div name="luces">
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
    </div>

    <!--menu desplegable-->
    <nav role="navigation" >
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <a href="#"><li>Home</li></a>
                <a type="button" name="perfil" value="action"data-bs-toggle="modal" data-bs-target="#MyModal"><li>Perfil</li></a>
                <a href="#"><li>Info</li></a>
                <a href="index.php"><li>Cerrar sesion</li></a>
            </ul>
        </div>
    </nav>

 <br><br>

 <!--modal-->
 
<div class="modal fade" id="MyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog align-center">
    <div class="modal-content mx-auto">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body min-width-4">
      <form action="" method="post" enctype="multipart/form-data">
            <div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-3">
                 <div class="col">
                    <p>correo: </p><input class="form-control" type="text" name="correo" id="correo" value="<?php echo $email?>" readonly  required/>
                </div>
                <div class="col">
                    <p>usuario: </p><input class="form-control" type="text" name="n_usuario" id="usuario"  value="<?php echo $name?>" placeholder="Nombre de usuario" required/>
                </div>
                <div class="col">
                    <p>contraseña: </p><input class="form-control" type="text" name="contraseña" id="contraseña"  value="<?php echo $clave ?>" placeholder="contraseña" required  />
                </div>

            </div>
            <br>
            <div class="btn-group mt" role="group" aria-label="Basic example">
                </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<!--div de el carrucel-->
<div class="padre">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/bre.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/solo.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/oni.webp" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!--lo de las card-->
    <br><br><br><br><br>
    <ul class="card-list">
	
        <li class="card">
            <a class="card-image" href="" target="_blank" style="background-image: url(img/dd.webp);">
                
            </a>
            <a class="card-description" href="">
                <h2>Psychopomp</h2>
                <p>Japanese Breakfast</p>
            </a>
        </li>
        
        <li class="card">
            <a class="card-image" href="" target="_blank" style="background-image: url(img/reencarna.jpg);">
               
            </a>
            <a class="card-description" href="">
                <h2>Maldita reencarnacio</h2>
                <p>In Love With A Ghost</p>
            </a>
        </li>
        
        <li class="card">
            <a class="card-image" href="" target="_blank" style="background-image: url(img/caos.webp);" >

            </a>
            <a class="card-description" href="" target="_blank">
                <h2>The Beautiful Game</h2>
                <p>Vulfpeck</p>
            </a>
        </li>
        
        <li class="card">
            <a class="card-image" href="" target="_blank" style="background-image: url(img/leveling.jpg)">
            </a>
            <a class="card-description" href="" target="_blank">
                <h2>Jane Doe</h2>
                <p>Converge</p>
            </a>
        </li>

        <li class="card">
            <a class="card-image" href="" target="_blank" style="background-image: url(img/celestial.jpg)">
            
            </a>
            <a class="card-description" href="" target="_blank">
                <h2>Jane Doe</h2>
                <p>Converge</p>
            </a>
        </li>

        <li class="card">
            <a class="card-image" href="" target="_blank" style="background-image: url(img/wnid.jpg)">
            </a>
            <a class="card-description" href="" target="_blank">
                <h2>Jane Doe</h2>
                <p>Converge</p>
            </a>
        </li>

        <li class="card">
            <a class="card-image" href="" target="_blank" style="background-image: url(img/nigro.webp)">
            </a>
            <a class="card-description" href="" target="_blank">
                <h2>Jane Doe</h2>
                <p>Converge</p>
            </a>
        </li>

        <li class="card">
            <a class="card-image" href="" target="_blank" style="background-image: url(img/lector.jpg)">
            </a>
            <a class="card-description" href="" target="_blank">
                <h2>Jane Doe</h2>
                <p>Converge</p>
            </a>
        </li>

        <li class="card">
            <a class="card-image" href="" target="_blank" style="background-image: url(img/caida.webp)">
            </a>
            <a class="card-description" href="" target="_blank">
                <h2>Jane Doe</h2>
                <p>Converge</p>
            </a>
        </li>
        
    </ul>



</body>
</html>
<!--js de las card-->
<Script src="P_Principal.js"></Script>