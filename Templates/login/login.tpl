<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">

        <INPUT ID="baseURL" TYPE="HIDDEN" VALUE="{$smarty.session.baseURL}">

        <div class="login-box">
            <div class="login-logo">
                <b>Maxima80</b>Login</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Inicie sua sessão</p>
                <form action="{$smarty.session.baseURL}/login/efetivalogin" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" id="Email" name="Email">
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
                {if $mensagem != ''}
                    <BR><p class="login-box-msg label-danger">{$mensagem}</p>
                {/if}

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="{$smarty.session.baseURL}/Templates/includes/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="{$smarty.session.baseURL}/Templates/includes/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="{$smarty.session.baseURL}/Templates/includes/plugins/iCheck/icheck.min.js"></script>

    </body>
</html>

