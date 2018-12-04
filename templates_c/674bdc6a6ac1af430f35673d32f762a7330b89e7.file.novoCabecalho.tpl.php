<?php /* Smarty version Smarty-3.1.8, created on 2018-12-04 16:39:59
         compiled from ".\Templates\novoCabecalho.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24073569fd65cbdaa97-55393489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '674bdc6a6ac1af430f35673d32f762a7330b89e7' => 
    array (
      0 => '.\\Templates\\novoCabecalho.tpl',
      1 => 1543948775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24073569fd65cbdaa97-55393489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_569fd65d04e187_79729198',
  'variables' => 
  array (
    'titulo' => 0,
    'notifica' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569fd65d04e187_79729198')) {function content_569fd65d04e187_79729198($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
    <HEAD>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <TITLE>..:: <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 ::..</TITLE>
        <link rel="icon" href="<?php echo $_SESSION['baseURL'];?>
/maxima80.png" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo $_SESSION['baseURL'];?>
/maxima80.png" type="image/x-icon">

        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo $_SESSION['baseURL'];?>
/Templates/includes/bootstrap/css/bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo $_SESSION['baseURL'];?>
/Templates/includes/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo $_SESSION['baseURL'];?>
/Templates/includes/plugins/iCheck/square/blue.css">

        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <!-- Theme style -->
        <link href="<?php echo $_SESSION['baseURL'];?>
/Templates/includes/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href="<?php echo $_SESSION['baseURL'];?>
/Templates/includes/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

        <!-- Folha de Estilos para o datatables -->
        <link rel="stylesheet" href="<?php echo $_SESSION['baseURL'];?>
/Templates/includes/plugins/datatables/dataTables.bootstrap.css">
        <!-- Folha de Estilos para o datepicker -->
        <link rel="stylesheet" href="<?php echo $_SESSION['baseURL'];?>
/Templates/includes/plugins/datepicker/datepicker3.css">
        <STYLE>
            .count {
                z-index: 1;
                position: absolute;
                left: 0;
                bottom: 0;
                background-color: #d9534f;
              }
        </style>
    </HEAD>

    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>M80</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Máxima <b>80</b></span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Tasks Menu 
                            <li class="dropdown tasks-menu">
                                <!-- Menu Toggle Button
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">?</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"><?php echo $_SESSION['queries'];?>
</li>
                                </ul>
                            </li> Tasks Menu -->
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <span>
                                    <img src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/User-blue.png" class="user-image" alt="User Image" />
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <?php if ($_SESSION['notificacoes']->countNotificacoes()>0){?>
                                        <span class="badge count"><?php echo $_SESSION['notificacoes']->countNotificacoes();?>
</span>
                                    <?php }?>
                                    </span>
                                    <span class="hidden-xs"><?php echo $_SESSION['m80Usuario_nome'];?>
</span>
                                </a>
                                <ul class="dropdown-menu" style="border-color: lightgray">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/User-blue.png" class="img-circle" alt="User Image" />
                                        <p>
                                            <?php echo $_SESSION['m80Usuario_nome'];?>

                                            <small><?php echo $_SESSION['m80Usuario_mail'];?>
</small>
                                            <small><?php echo $_SESSION['m80Usuario'];?>
</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <?php if ($_SESSION['notificacoes']->countNotificacoes()==0){?>
                                            Nenhuma Notificação
                                        <?php }else{ ?>
                                            <?php  $_smarty_tpl->tpl_vars['notifica'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notifica']->_loop = false;
 $_from = $_SESSION['notificacoes']->getNotificacoes(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notifica']->key => $_smarty_tpl->tpl_vars['notifica']->value){
$_smarty_tpl->tpl_vars['notifica']->_loop = true;
?>
                                                <CENTER><img src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/<?php echo $_smarty_tpl->tpl_vars['notifica']->value->getIcone();?>
" class="img-circle" alt="User Image" width="35" height="35"/></CENTER>
                                                <A href="<?php echo $_SESSION['baseURL'];?>
/<?php echo $_smarty_tpl->tpl_vars['notifica']->value->getAtalho();?>
"><?php echo $_smarty_tpl->tpl_vars['notifica']->value->getTexto();?>
</A>
                                            <?php } ?>
                                        <?php }?>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?php echo $_SESSION['baseURL'];?>
/login/logoff" class="btn btn-default btn-flat">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>                    
                            <!-- Control Sidebar Toggle Button -->
                        </ul>
                    </div>                    
                </nav>
            </header>

            <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>