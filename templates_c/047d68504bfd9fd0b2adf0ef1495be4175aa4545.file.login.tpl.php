<?php /* Smarty version Smarty-3.1.8, created on 2019-07-18 20:23:22
         compiled from ".\Templates\login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:346569faaf3549f37-37335008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '047d68504bfd9fd0b2adf0ef1495be4175aa4545' => 
    array (
      0 => '.\\Templates\\login\\login.tpl',
      1 => 1563474137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '346569faaf3549f37-37335008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_569faaf3766211_80958367',
  'variables' => 
  array (
    'titulo' => 0,
    'email' => 0,
    'mensagem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569faaf3766211_80958367')) {function content_569faaf3766211_80958367($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">

        <INPUT ID="baseURL" TYPE="HIDDEN" VALUE="<?php echo $_SESSION['baseURL'];?>
">

        <div class="login-box">
            <div class="login-logo">
                <b>Maxima80</b>Login</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Inicie sua sessão</p>
                <form action="<?php echo $_SESSION['baseURL'];?>
/login/efetivalogin" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" id="Email" name="Email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <DIV id="action" class="ui-widget-content" style="text-align: center;">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </form>
                <?php if ($_smarty_tpl->tpl_vars['mensagem']->value!=''){?>
                    <BR><p class="login-box-msg label-danger"><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</p>
                <?php }?>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo $_SESSION['baseURL'];?>
/Templates/includes/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo $_SESSION['baseURL'];?>
/Templates/includes/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo $_SESSION['baseURL'];?>
/Templates/includes/plugins/iCheck/icheck.min.js"></script>

    </body>
</html>

<?php }} ?>