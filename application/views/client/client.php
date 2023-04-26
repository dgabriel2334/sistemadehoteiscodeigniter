<!DOCTYPE html> 
<html>  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Hotel do Seu Sonho</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head> 
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="#">Hotel do Seu Sonho</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</b>
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hospedagem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Localização</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contatos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Administrativo</a>
                        </li>
                    </ul>
             </div>
            </div>
        </nav>
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Bem-Vindo ao Hotel do Seu Sonho!</h1>
        <p class="lead">Venha e encha-se de experiências!</p>
      </div>
    </div>
    <!-- Carrousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-flex mx-auto" height="600px" width="1200px" src="https://www.gannett-cdn.com/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg" alt="First slide">
            </div>
            <div class="carousel-item ">
            <img class="d-flex mx-auto" height="600px" width="1200px" src="https://www.rd.com/wp-content/uploads/2021/03/GettyImages-1207490255-e1615485559611.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-flex mx-auto" height="600px" width="1200px" src="https://www.travelandleisure.com/thmb/OiDnPGo3k9QLRT9__TPhFZcr7PU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/rosewood-carlyle-presidential-suite-LUXESUITE0122-0046808a88924e57922d78c7f1d9ca60.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-flex mx-auto" height="600px" width="1200px" src="https://www.gannett-cdn.com/-mm-/c6ce345dd3cc67c30388965835e2347ef87cfcc7/c=0-366-2700-1885/local/-/media/2020/03/03/USATODAY/usatsports/MotleyFool-TMOT-b9d6657b-hotel-room.jpg?width=2700&height=1519&fit=crop&format=pjpg&auto=webp" alt="Four slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <!-- cards -->
    <div class="container">
        <div class="text-center mb-4">
            <h2>Serviços Oferecidos</h2>
        </div>
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Hospedagem</h5>
                    <p class="card-text">Venha se hospedar aqui e aproveite.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Eventos</h5>
                    <p class="card-text">Organize os seus eventos aqui mesmo.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Restaurante</h5>
                    <p class="card-text">Aproveite nossas refeições aqui mesmo.</p>
                </div>
            </div>
        </div>
    </div>

    <br>

    <!-- footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Hotel do Seu Sonho 2020</p>
      </div>
    </footer>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>