<?php /* Smarty version Smarty-3.1.8, created on 2018-12-04 16:42:30
         compiled from ".\Templates\integrantes\integrantes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241695c06ca96d07fe9-47611321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6de66dfed8f01fa5314960cf8c06522e43ca9b82' => 
    array (
      0 => '.\\Templates\\integrantes\\integrantes.tpl',
      1 => 1543333252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241695c06ca96d07fe9-47611321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'integrantes' => 0,
    'integrante' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5c06ca97055587_02156690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c06ca97055587_02156690')) {function content_5c06ca97055587_02156690($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Bandas",'integrantesActive'=>"active"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Bandas
            <small>Lista de Integrantes</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Integrantes</a></li>
            <li class="active">Lista</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <div class="box">
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> Nome </TH>
                        <TH> e-mail </TH>
                        <TH> Status </TH>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['integrante'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['integrante']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['integrantes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['integrante']->key => $_smarty_tpl->tpl_vars['integrante']->value){
$_smarty_tpl->tpl_vars['integrante']->_loop = true;
?>
                        <TR>
                            <TD><a href="<?php echo $_SESSION['baseURL'];?>
/integrantes/detalha/<?php echo $_smarty_tpl->tpl_vars['integrante']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['integrante']->value->getNome();?>
</a></TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['integrante']->value->getMail();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['integrante']->value->getStatus();?>
 </TD>
                        </TR>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Nome </TH>
                        <TH> e-mail </TH>
                        <TH> Status </TH>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script type="text/javascript">
    $(document).ready(function() {
        $('#tabela1').dataTable($configuraDataTable);
    });
</script>
   
<?php }} ?>