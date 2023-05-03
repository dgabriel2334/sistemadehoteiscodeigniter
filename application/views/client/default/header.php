<!DOCTYPE html> 
<html>
    <?php if (!isset($ativa)): $ativa = ''; endif;?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= isset($titulo) ? $titulo : 'Hotel do seu sonho' ?></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css"/>
    </head> 
    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top animate__animated animate__fadeInUp">
            <div class="container">
                <a class="navbar-brand" href="/">Hotel do Seu Sonho</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?= $ativa == 'home' ? 'active' : ''?>">
                            <a class="nav-link" href="/">Home</b>
                        </a>
                        </li>
                        <li class="nav-item <?= $ativa == 'about' ? 'active' : ''?>">
                            <a class="nav-link" href="about">Sobre</a>
                        </li>
                        <li class="nav-item <?= $ativa == 'accommodation' ? 'active' : ''?>">
                            <a class="nav-link" href="accommodation">Hospedagem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  <?= $ativa == 'location' ? 'active' : ''?>" href="location">Localização</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  <?= $ativa == 'contact' ? 'active' : ''?>" href="contact">Contatos</a>
                        </li>
                        <li class="nav-item  <?= $ativa == 'admin' ? 'active' : ''?>">
                            <a class="nav-link" href="/login">Administrativo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>