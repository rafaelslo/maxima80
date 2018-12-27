<?php /* Smarty version Smarty-3.1.8, created on 2018-12-11 10:12:48
         compiled from ".\Templates\shows\showDetalhesImprimirHorizontal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102625c06c0938e4cd7-50600916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82cec9aaaab4e273e4cd44405b882eb2afee386d' => 
    array (
      0 => '.\\Templates\\shows\\showDetalhesImprimirHorizontal.tpl',
      1 => 1544036745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102625c06c0938e4cd7-50600916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5c06c0941e6687_34855755',
  'variables' => 
  array (
    'titulo' => 0,
    'show' => 0,
    'musicas' => 0,
    'musica' => 0,
    'inst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c06c0941e6687_34855755')) {function content_5c06c0941e6687_34855755($_smarty_tpl) {?><html>
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
            .padrao2 {
                border: none;
                font-family: "Arial Black";
                font-style: bold;
                font-size: 25;
                
                padding-top: 5px;
                padding-botton: 5px;
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
                    <?php  $_smarty_tpl->tpl_vars['musica'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['musica']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['musicas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['musica']->key => $_smarty_tpl->tpl_vars['musica']->value){
$_smarty_tpl->tpl_vars['musica']->_loop = true;
?>
                        <li class="list-group-item padrao2" id="<?php echo $_smarty_tpl->tpl_vars['musica']->value->getId();?>
">
                            <!-- <span class="badge"><?php echo $_smarty_tpl->tpl_vars['musica']->value->getDuracao();?>
</span> -->
                            <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['musica']->value->getInstrumental()->getInstrumental(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value){
$_smarty_tpl->tpl_vars['inst']->_loop = true;
?>
                                <img height="42" width="42" src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/<?php echo $_smarty_tpl->tpl_vars['inst']->value->getInstrumento()->getIcone();?>
" title="<?php echo $_smarty_tpl->tpl_vars['inst']->value->getIntegrante()->getNome();?>
">&nbsp;
                            <?php } ?>
                            <?php echo $_smarty_tpl->tpl_vars['musica']->value->getNome();?>

                        </li>
                    <?php } ?>                        
                </ul>
        </div><!-- /.content-wrapper -->                       

    <?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <script type="text/javascript">
        $(document).ready(function() {        
            $(".padrao2").each(function(index) {
                if($(this).prop("offsetLeft")>100) {
                    $(this).addClass("direita");
                }
            });
        window.print();            
        });
    </script>



<?php }} ?>