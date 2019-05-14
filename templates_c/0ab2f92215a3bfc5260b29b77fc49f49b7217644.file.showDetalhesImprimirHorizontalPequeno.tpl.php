<?php /* Smarty version Smarty-3.1.8, created on 2019-05-14 17:01:10
         compiled from ".\Templates\shows\showDetalhesImprimirHorizontalPequeno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233275cdb0bb3e36824-03762040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ab2f92215a3bfc5260b29b77fc49f49b7217644' => 
    array (
      0 => '.\\Templates\\shows\\showDetalhesImprimirHorizontalPequeno.tpl',
      1 => 1557864066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233275cdb0bb3e36824-03762040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cdb0bb4338b98_81755876',
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
<?php if ($_valid && !is_callable('content_5cdb0bb4338b98_81755876')) {function content_5cdb0bb4338b98_81755876($_smarty_tpl) {?><html>
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
        <style type="text/css">
            @page { 
                size: A4 landscape;
            }
            .coluna {    
                column-count: 2;
                -webkit-column-count: 2;
                -webkit-column-gap: 0.25in;
                -webkit-column-rule-width : 1px;
                -webkit-column-rule-style : solid;
                -webkit-column-rule-color : #eee;
            }
            h2 {
                column-span: all;
                text-align: center;
            }
            .padrao3 {
                border: none;
                font-family: "Arial Black";
                font-style: bold;
                font-size: 12;                
                padding-top: 5px !important;
                padding-bottom: 5px !important;
                
            }
            .direita {
                text-align: right;
            }
        </style>
    </head>
    <body>

        <!-- Content Wrapper. Contains page content -->
        <div class="coluna page" id="coluna">
            <h2>
                <?php echo $_smarty_tpl->tpl_vars['show']->value->getLocal();?>
<BR>
                <small><?php echo $_smarty_tpl->tpl_vars['show']->value->getData();?>
</small>
            </h2>
                <ul id="sortable1">
                    <?php  $_smarty_tpl->tpl_vars['bloco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bloco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bloco']->key => $_smarty_tpl->tpl_vars['bloco']->value){
$_smarty_tpl->tpl_vars['bloco']->_loop = true;
?>
                        <li class="list-group-item padrao3" id="<?php echo $_smarty_tpl->tpl_vars['bloco']->value->getId();?>
">
                            <!-- <span class="badge"><?php echo $_smarty_tpl->tpl_vars['bloco']->value->getDuracao();?>
</span> -->
                            <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco']->value->getInstrumental()->getInstrumental(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value){
$_smarty_tpl->tpl_vars['inst']->_loop = true;
?>
                                <img height="30" width="30" src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/<?php echo $_smarty_tpl->tpl_vars['inst']->value->getInstrumento()->getIcone();?>
" title="<?php echo $_smarty_tpl->tpl_vars['inst']->value->getIntegrante()->getNome();?>
">&nbsp;
                            <?php } ?>
                            <?php echo $_smarty_tpl->tpl_vars['bloco']->value->getNome();?>

                        </li>
                    <?php } ?>                        
                    <li class="list-group-item padrao3"><hr style="border-top: 1px solid #8c8b8b"></hr></li>                            
                    <?php  $_smarty_tpl->tpl_vars['bloco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bloco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bloco']->key => $_smarty_tpl->tpl_vars['bloco']->value){
$_smarty_tpl->tpl_vars['bloco']->_loop = true;
?>
                        <li class="list-group-item padrao3" id="<?php echo $_smarty_tpl->tpl_vars['bloco']->value->getId();?>
">
                            <!-- <span class="badge"><?php echo $_smarty_tpl->tpl_vars['bloco']->value->getDuracao();?>
</span> -->
                            <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco']->value->getInstrumental()->getInstrumental(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value){
$_smarty_tpl->tpl_vars['inst']->_loop = true;
?>
                                <img height="30" width="30" src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/<?php echo $_smarty_tpl->tpl_vars['inst']->value->getInstrumento()->getIcone();?>
" title="<?php echo $_smarty_tpl->tpl_vars['inst']->value->getIntegrante()->getNome();?>
">&nbsp;
                            <?php } ?>
                            <?php echo $_smarty_tpl->tpl_vars['bloco']->value->getNome();?>

                        </li>
                    <?php } ?>                        
                    <li class="list-group-item padrao3"><hr style="border-top: 1px solid #8c8b8b"></hr></li>                            
                    <?php  $_smarty_tpl->tpl_vars['bloco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bloco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bloco']->key => $_smarty_tpl->tpl_vars['bloco']->value){
$_smarty_tpl->tpl_vars['bloco']->_loop = true;
?>
                        <li class="list-group-item padrao3" id="<?php echo $_smarty_tpl->tpl_vars['bloco']->value->getId();?>
">
                            <!-- <span class="badge"><?php echo $_smarty_tpl->tpl_vars['bloco']->value->getDuracao();?>
</span> -->
                            <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco']->value->getInstrumental()->getInstrumental(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value){
$_smarty_tpl->tpl_vars['inst']->_loop = true;
?>
                                <img height="30" width="30" src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/<?php echo $_smarty_tpl->tpl_vars['inst']->value->getInstrumento()->getIcone();?>
" title="<?php echo $_smarty_tpl->tpl_vars['inst']->value->getIntegrante()->getNome();?>
">&nbsp;
                            <?php } ?>
                            <?php echo $_smarty_tpl->tpl_vars['bloco']->value->getNome();?>

                        </li>
                    <?php } ?>                        


                </ul>
        </div><!-- /.content-wrapper -->                       

    <?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <script type="text/javascript">
        $(document).ready(function() {        
            $(".padrao3").each(function(index) {
                if($(this).prop("offsetLeft")>100) {
                    $(this).addClass("direita");
                }
            });
        window.print();            
        });
    </script>



<?php }} ?>