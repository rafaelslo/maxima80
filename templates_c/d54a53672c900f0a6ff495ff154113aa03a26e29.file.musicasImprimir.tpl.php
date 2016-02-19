<?php /* Smarty version Smarty-3.1.8, created on 2016-02-19 14:28:51
         compiled from ".\Templates\musicas\musicasImprimir.tpl" */ ?>
<?php /*%%SmartyHeaderCode:343956c7416b8a7078-38169351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd54a53672c900f0a6ff495ff154113aa03a26e29' => 
    array (
      0 => '.\\Templates\\musicas\\musicasImprimir.tpl',
      1 => 1455899327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '343956c7416b8a7078-38169351',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56c7416bbc90d4_56234209',
  'variables' => 
  array (
    'titulo' => 0,
    'musicas' => 0,
    'musica' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c7416bbc90d4_56234209')) {function content_56c7416bbc90d4_56234209($_smarty_tpl) {?><html>
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
        <!-- Folha de Estilos para o datatables -->
        <link rel="stylesheet" href="<?php echo $_SESSION['baseURL'];?>
/Templates/includes/plugins/datatables/dataTables.bootstrap.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!-- Main content -->
        <section class="content">

            <!-- Your Page Content Here -->
            <div class="box">
                <table id="tabela1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <TH> Nome </TH>
                            <TH> Banda </TH>
                            <TH> Duração </TH>
                            <TH> Status </TH>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['musica'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['musica']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['musicas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['musica']->key => $_smarty_tpl->tpl_vars['musica']->value){
$_smarty_tpl->tpl_vars['musica']->_loop = true;
?>
                            <TR>
                                <TD><?php echo $_smarty_tpl->tpl_vars['musica']->value->getNome();?>
</TD>
                                <TD><?php echo $_smarty_tpl->tpl_vars['musica']->value->getBanda();?>
 </TD>
                                <TD><?php echo $_smarty_tpl->tpl_vars['musica']->value->getDuracao();?>
 </TD>
                                <TD class="<?php echo $_smarty_tpl->tpl_vars['musica']->value->getStatus()->getCor();?>
"><?php echo $_smarty_tpl->tpl_vars['musica']->value->getStatus()->getNome();?>
 </TD>
                            </TR>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <TH> Nome </TH>
                            <TH> Banda </TH>
                            <TH> Duração </TH>
                            <TH> Status </TH>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section><!-- /.content -->

        <?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



        <script type="text/javascript">
            $(document).ready(function() {
                $('#tabela1').dataTable($configuraDataTablePrint);
            });
        </script>

<?php }} ?>