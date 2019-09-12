

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registro</title>
    <style type="text/css">
      .footer{
	padding: 15px;
	margin: 0;
	text-align: center;
	background: #3b83bd ;
	color: white;
}
    </style>
  </head>
  <body>

  <!-- inicia codigo  -->
<div class="col-12 col-md-12 col-lg">
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <a class="navbar-brand" >BioAves</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse col-3">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="inicio.php">Inicio </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Pedidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca de</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link " href="login.php">Ingresar<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
</div>



    <div class="row">
        <div class="col-12 col-md-4 col-lg"></div>
        <div class="col-12 col-md-4 col-lg">
          
        <form  method="POST" name="form-work" action="base.php ">

        <div class="col-12 col-md-4 col-lg">
          <h4>Completa los campos para registrarte</h4>
        </div>
              <div class="container">
                  <img src="img/registro.png" alt=""> 
              </div>

                    <fieldset>
                      <div class="form-group">
                            <label class="control-label" for="nome">Nombre</label>
                            <input name="usuario" class="form-control" placeholder="Tu usuario" type="text">
                      </div>
                      <div class="form-group">
                            <label class="control-label" for="surname">Contraseña</label>
                            <input name="contrasena" class="form-control" placeholder="Tu contraseña" type="password">
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-outline-primary btn-block">registrarme</button>
                          </div>
                        </div>  


                    </fieldset> 
                  </form>

        </div>
        <div class="col-12 col-md-4 col-lg"></div>
    </div>
    
<footer class="footer text-center">
  <div class="container">
      <p>© 2019 BioAves </p>
      <p>3186518852</p>
      <p>Calle 12 #23-03 </p>
      <p>bio_aves@gmail.com</p>
      <p>-Todos los derechos reseravados-</p>
  </div>
</footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


