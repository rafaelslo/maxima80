<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
    <HEAD>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <TITLE>..:: {$titulo} ::..</TITLE>
        <link rel="icon" href="{$smarty.session.baseURL}/maxima80.png" type="image/x-icon">
        <link rel="shortcut icon" href="{$smarty.session.baseURL}/maxima80.png" type="image/x-icon">

        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="{$smarty.session.baseURL}/Templates/includes/bootstrap/css/bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{$smarty.session.baseURL}/Templates/includes/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="{$smarty.session.baseURL}/Templates/includes/plugins/iCheck/square/blue.css">

        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <!-- Theme style -->
        <link href="{$smarty.session.baseURL}/Templates/includes/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href="{$smarty.session.baseURL}/Templates/includes/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

        <!-- Folha de Estilos para o datatables -->
        <link rel="stylesheet" href="{$smarty.session.baseURL}/Templates/includes/plugins/datatables/dataTables.bootstrap.css">
        <!-- Folha de Estilos para o datepicker -->
        <link rel="stylesheet" href="{$smarty.session.baseURL}/Templates/includes/plugins/datepicker/datepicker3.css">
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
                                    <li class="header">{$smarty.session.queries}</li>
                                </ul>
                            </li> Tasks Menu -->
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <span>
                                    <img src="{$smarty.session.baseURL}/Templates/img/User-blue.png" class="user-image" alt="User Image" />
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    {if $smarty.session.notificacoes->countNotificacoes() gt 0}
                                        <span class="badge count">{$smarty.session.notificacoes->countNotificacoes()}</span>
                                    {/if}
                                    </span>
                                    <span class="hidden-xs">{$smarty.session.m80Usuario_nome}</span>
                                </a>
                                <ul class="dropdown-menu" style="border-color: lightgray">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="{$smarty.session.baseURL}/Templates/img/User-blue.png" class="img-circle" alt="User Image" />
                                        <p>
                                            {$smarty.session.m80Usuario_nome}
                                            <small>{$smarty.session.m80Usuario_mail}</small>
                                            <small>{$smarty.session.m80Usuario}</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        {if $smarty.session.notificacoes->countNotificacoes() eq 0}
                                            Nenhuma Notificação
                                        {else}
                                            {foreach $smarty.session.notificacoes->getNotificacoes() as $notifica}
                                                <CENTER><img src="{$smarty.session.baseURL}/Templates/img/{$notifica->getIcone()}" class="img-circle" alt="User Image" width="35" height="35"/></CENTER>
                                                <A href="{$smarty.session.baseURL}/{$notifica->getAtalho()}">{$notifica->getTexto()}</A>
                                            {/foreach}
                                        {/if}
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="{$smarty.session.baseURL}/login/logoff" class="btn btn-default btn-flat">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>                    
                            <!-- Control Sidebar Toggle Button -->
                        </ul>
                    </div>                    
                </nav>
            </header>

            {include file='sidebar.tpl'}
