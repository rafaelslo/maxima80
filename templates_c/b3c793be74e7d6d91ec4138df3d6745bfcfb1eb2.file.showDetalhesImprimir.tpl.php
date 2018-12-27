<?php /* Smarty version Smarty-3.1.8, created on 2018-12-11 11:26:31
         compiled from ".\Templates\shows\showDetalhesImprimir.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1803956c73813096d16-55963944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3c793be74e7d6d91ec4138df3d6745bfcfb1eb2' => 
    array (
      0 => '.\\Templates\\shows\\showDetalhesImprimir.tpl',
      1 => 1544534789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1803956c73813096d16-55963944',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56c738135959b6_41786714',
  'variables' => 
  array (
    'titulo' => 0,
    'show' => 0,
    'bloco1' => 0,
    'bloco' => 0,
    'inst' => 0,
    'bloco2' => 0,
    'bis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c738135959b6_41786714')) {function content_56c738135959b6_41786714($_smarty_tpl) {?><html>
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
    <body>

        <!-- Content Wrapper. Contains page content -->
        <div>
            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                <div class="row">
                    <div class="col-md-6">

                        <h1>
                            <?php echo $_smarty_tpl->tpl_vars['show']->value->getLocal();?>

                            <small><?php echo $_smarty_tpl->tpl_vars['show']->value->getData();?>
</small>
                        </h1>

                        <div class="box box-solid box-primary">
                            <div class="box-header with-border" id="bloco1">Bloco 1 <span class="badge pull-right bg-light-blue">00:00</span></div>
                            <ul id="sortable1">
                                <?php  $_smarty_tpl->tpl_vars['bloco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bloco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bloco']->key => $_smarty_tpl->tpl_vars['bloco']->value){
$_smarty_tpl->tpl_vars['bloco']->_loop = true;
?>
                                    <li class="list-group-item" id="<?php echo $_smarty_tpl->tpl_vars['bloco']->value->getId();?>
"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['bloco']->value->getDuracao();?>
</span> 
                                        <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco']->value->getInstrumental()->getInstrumental(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value){
$_smarty_tpl->tpl_vars['inst']->_loop = true;
?>
                                            <img height="42" width="42" src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/<?php echo $_smarty_tpl->tpl_vars['inst']->value->getInstrumento()->getIcone();?>
" title="<?php echo $_smarty_tpl->tpl_vars['inst']->value->getIntegrante()->getNome();?>
">&nbsp;
                                        <?php } ?>
                                        <?php echo $_smarty_tpl->tpl_vars['bloco']->value->getNome();?>

                                    </li>
                                <?php } ?>                        
                            </ul>
                        </div>

                        <div class="box box-solid box-primary">
                            <div class="box-header with-border" id="bloco2">Bloco 2 <span class="badge pull-right bg-light-blue">00:00</span></div>
                            <ul id="sortable2">
                                <?php  $_smarty_tpl->tpl_vars['bloco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bloco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bloco']->key => $_smarty_tpl->tpl_vars['bloco']->value){
$_smarty_tpl->tpl_vars['bloco']->_loop = true;
?>
                                    <li class="list-group-item" id="<?php echo $_smarty_tpl->tpl_vars['bloco']->value->getId();?>
"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['bloco']->value->getDuracao();?>
</span> 
                                        <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco']->value->getInstrumental()->getInstrumental(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value){
$_smarty_tpl->tpl_vars['inst']->_loop = true;
?>
                                            <img height="42" width="42" src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/<?php echo $_smarty_tpl->tpl_vars['inst']->value->getInstrumento()->getIcone();?>
" title="<?php echo $_smarty_tpl->tpl_vars['inst']->value->getIntegrante()->getNome();?>
">&nbsp;
                                        <?php } ?>
                                        <?php echo $_smarty_tpl->tpl_vars['bloco']->value->getNome();?>

                                    </li>
                                <?php } ?>                        
                            </ul>
                        </div>

                        <div class="box box-solid box-primary">
                            <div class="box-header with-border" id="bis">Bis <span class="badge pull-right bg-light-blue">00:00</span></div>
                            <ul id="sortable3">
                                <?php  $_smarty_tpl->tpl_vars['bloco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bloco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bloco']->key => $_smarty_tpl->tpl_vars['bloco']->value){
$_smarty_tpl->tpl_vars['bloco']->_loop = true;
?>
                                    <li class="list-group-item" id="<?php echo $_smarty_tpl->tpl_vars['bloco']->value->getId();?>
"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['bloco']->value->getDuracao();?>
</span> 
                                        <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco']->value->getInstrumental()->getInstrumental(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value){
$_smarty_tpl->tpl_vars['inst']->_loop = true;
?>
                                            <img height="42" width="42" src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/<?php echo $_smarty_tpl->tpl_vars['inst']->value->getInstrumento()->getIcone();?>
" title="<?php echo $_smarty_tpl->tpl_vars['inst']->value->getIntegrante()->getNome();?>
">&nbsp;
                                        <?php } ?>
                                        <?php echo $_smarty_tpl->tpl_vars['bloco']->value->getNome();?>

                                    </li>
                                <?php } ?>                        
                            </ul>
                        </div>

                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->                       

    <?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <script type="text/javascript">
        $("#bloco1 span").text(calculaTempos("#sortable1"));
        $("#bloco2 span").text(calculaTempos("#sortable2"));
        $("#bis span").text(calculaTempos("#sortable3"));

        window.print();
        function calculaTempos(elemento) {
            var total = "00:00";
            $(elemento + " li span").each(function(index) {
                horaIni = total.split(':');
                horaSom = $(this).text().split(':');

                horasTotal = parseInt(horaIni[0], 10) + parseInt(horaSom[0], 10);
                minutosTotal = parseInt(horaIni[1], 10) + parseInt(horaSom[1], 10);

                if (minutosTotal >= 60) {
                    minutosTotal -= 60;
                    horasTotal += 1;
                }
                total = pad(horasTotal,2) + ":" + pad(minutosTotal,2);

            });
            return total;
        }
        function pad(num, size) {
            var s = "000000000" + num;
            return s.substr(s.length-size);
        }
        
    </script>



<?php }} ?>