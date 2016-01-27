<?php /* Smarty version Smarty-3.1.8, created on 2015-10-20 16:31:46
         compiled from ".\templates\login\conf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28971562681f8799a42-14468815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8017f9ef2f7425db88155d2c921654d4a75315a' => 
    array (
      0 => '.\\templates\\login\\conf.tpl',
      1 => 1445365900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28971562681f8799a42-14468815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_562681f8d4caa9_34583183',
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562681f8d4caa9_34583183')) {function content_562681f8d4caa9_34583183($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
    <HEAD>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <TITLE>..:: <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 ::..</TITLE>
        <link rel="icon" href="<?php echo $_SESSION['baseURL'];?>
/g4.ico" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo $_SESSION['baseURL'];?>
/g4.ico" type="image/x-icon">

        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo $_SESSION['baseURL'];?>
/templates/includes/bootstrap/css/bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo $_SESSION['baseURL'];?>
/templates/includes/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo $_SESSION['baseURL'];?>
/templates/includes/plugins/iCheck/square/blue.css">
        
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <!-- Theme style -->
        <link href="<?php echo $_SESSION['baseURL'];?>
/templates/includes/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href="<?php echo $_SESSION['baseURL'];?>
/templates/includes/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

            
        <!-- Folha de Estilos para o datatables 
        <link href="<?php echo $_SESSION['baseURL'];?>
/templates/css/tabelas.css" rel="stylesheet" type="text/css">
        <!--<link href="<?php echo $_SESSION['baseURL'];?>
/templates/css/tabelaDetalhe.css" rel="stylesheet" type="text/css">-->

    </HEAD>

  <body class="skin-blue sidebar-mini">
     <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Gtec</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>GTEC</b> - Versão 2.0</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                <!-- Tasks Menu -->
                 <li class="dropdown tasks-menu">
                   <!-- Menu Toggle Button -->
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <i class="fa fa-flag-o"></i>
                     <span class="label label-danger">9</span>
                   </a>
                   <ul class="dropdown-menu">
                     <li class="header">You have 9 tasks</li>
                     <li>
                       <!-- Inner menu: contains the tasks -->
                       <ul class="menu">
                         <li><!-- Task item -->
                           <a href="#">
                             <!-- Task title and progress text -->
                             <h3>
                               Design some buttons
                               <small class="pull-right">20%</small>
                             </h3>
                             <!-- The progress bar -->
                             <div class="progress xs">
                               <!-- Change the css width attribute to simulate progress -->
                               <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                 <span class="sr-only">20% Complete</span>
                               </div>
                             </div>
                           </a>
                         </li><!-- end task item -->                    
                            </ul>
                          </li>
                          <li class="footer">
                            <a href="#">View all tasks</a>
                          </li>
                        </ul>
                      </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                      <!-- Menu Toggle Button -->
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="<?php echo $_SESSION['baseURL'];?>
/templates/includes/dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo $_SESSION['usuario_nome'];?>
</span>
                      </a>
                      <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                          <img src="<?php echo $_SESSION['baseURL'];?>
/templates/includes/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                          <p>
                            <?php echo $_SESSION['usuario_nome'];?>

                            <small><?php echo $_SESSION['usuario'];?>
</small>
                          </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                          <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">Perfis</a>
                          </div>
                          <div class="pull-right">
                            <a href="logoff" class="btn btn-default btn-flat">Sair</a>
                          </div>
                        </li>
                      </ul>
                    </li>                    
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                      <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>                    
        </nav>
      </header>
                          
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Localizar..." />
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="<?php echo $_SESSION['baseURL'];?>
/dashboard/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-plug"></i>  <span>Equipamentos</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $_SESSION['baseURL'];?>
/equipamentos/desktop"><i class="fa fa-desktop"></i> Desktops</a></li>
                <li><a href="#"><i class="fa fa-laptop"></i> Notebooks</a></li>
                <li><a href="#"><i class="fa fa-server"></i> Servidores</a></li>
                <li><a href="#"><i class="fa fa-bars"></i> Switches</a></li>
                <li><a href="#"><i class="fa fa-print"></i> Impressoras</a></li>
                <li><a href="#">Todos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-print"></i>  <span>Relatórios</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Equipamentos por Local</a></li>
                <li><a href="#">Utilização de IP</a></li>
                <li><a href="#">Equipamentos Sem Senha</a></li>
                <li><a href="#">Grupos no AD</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-table"></i>  <span>Cadastros</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Contratos</a></li>
                <li><a href="#">Controles</a></li>
                <li><a href="#">Locais</a></li>
                <li><a href="#">Redes</a></li>
                <li><a href="#">Circuitos</a></li>
                <li><a href="#">Edificações</a></li>
                <li><a href="#">Agentes Intervenientes</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-wrench"></i>  <span>Ferramentas</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Nomes de Equipamentos</a></li>
                <li><a href="#">Atalhos</a></li>
                <li><a href="#">Importação de Arquivos</a></li>
              </ul>
            </li>

          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Informações rápidas do sistema</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          
          minha página
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->      

                
                
    </div><!-- /.wrapper -->
    
    
      
         <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo $_SESSION['baseURL'];?>
/templates/includes/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo $_SESSION['baseURL'];?>
/templates/includes/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $_SESSION['baseURL'];?>
/templates/includes/dist/js/app.min.js" type="text/javascript"></script>

    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo $_SESSION['baseURL'];?>
/templates/includes/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo $_SESSION['baseURL'];?>
/templates/includes/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo $_SESSION['baseURL'];?>
/templates/includes/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="<?php echo $_SESSION['baseURL'];?>
/templates/includes/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>

    
      </body>
</html>
<?php }} ?>