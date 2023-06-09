<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="./assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="./assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <link href="./assets/plugins/datepicker/datepicker3.css?" rel="stylesheet" type="text/css" />
    <!-- jQuery 2.1.4 -->
    <script src="./assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "./";
    </script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="./" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SIS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SISTEMA HOTEL</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="./addNewBooking" class="bg-primary">
                  <span><i class="fa fa-plus"></i><b> Nova reserva</b></span>
                </a>
              <li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="./assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="./assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="./loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Mudar senha</a>
                    </div>
                    <div class="pull-right">
                      <a href="./logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sair</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Navegação principal</li>
            <li class="treeview">
              <a href="./dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            <li class="treeview">
              <a href="./customer">
                <i class="fa fa-users"></i>
                <span>Clientes</span>
              </a>
            </li>
            <li class="treeview">
              <a href="./bookings">
                <i class="fa fa-book"></i>
                <span>Reservas</span>
              </a>
            </li>
            <?php
            if($role == ROLE_ADMIN || $role == ROLE_MANAGER)
            {
            ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-plane"></i>
                <span>Gerenciar</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>              
              <ul class="treeview-menu menu-open">
                <li>
                  <a href="./floorsListing" >
                    <i class="fa fa-circle-o"></i> Andares
                  </a>
                </li>
                <li>
                  <a href="./roomSizesListing" >
                    <i class="fa fa-circle-o"></i> Tamanhos de quarto
                  </a>
                </li>
                
                <li>
                  <a href="./roomListing" >
                    <i class="fa fa-circle-o"></i> Quartos 
                  </a>
                </li>
                <li>
                  <a href="./baseFareListing" >
                    <i class="fa fa-circle-o"></i> Valores
                  </a>
                </li>
                
              </ul>
            </li>
            <?php
            }
            ?>
            <?php
            if($role == ROLE_ADMIN)
            {
            ?>
            <li class="treeview">
              <a href="./userListing">
                <i class="fa fa-users"></i>
                <span>Usuários</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#" >
                <i class="fa fa-files-o"></i>
                <span>Reclamações</span>
              </a>
            </li>
            <?php
            }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>