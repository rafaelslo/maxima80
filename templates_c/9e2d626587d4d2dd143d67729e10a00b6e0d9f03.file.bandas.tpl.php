<?php /* Smarty version Smarty-3.1.8, created on 2016-01-19 15:00:37
         compiled from ".\templates\bandas\bandas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2669569e6642bd7e94-31382273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e2d626587d4d2dd143d67729e10a00b6e0d9f03' => 
    array (
      0 => '.\\templates\\bandas\\bandas.tpl',
      1 => 1453222831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2669569e6642bd7e94-31382273',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_569e6642d1ae55_35826875',
  'variables' => 
  array (
    'bandas' => 0,
    'banda' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569e6642d1ae55_35826875')) {function content_569e6642d1ae55_35826875($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Bandas",'bandasActive'=>"active"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Bandas
            <small>Lista de Bandas</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-headphones"></i> Bandas</a></li>
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
                        <TH> Código </TH>
                        <TH> Nome </TH>
                        <TH> Músicas </TH>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['banda'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banda']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bandas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banda']->key => $_smarty_tpl->tpl_vars['banda']->value){
$_smarty_tpl->tpl_vars['banda']->_loop = true;
?>
                        <TR>
                            <TD><?php echo $_smarty_tpl->tpl_vars['banda']->value->getId();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['banda']->value->getNome();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['banda']->value->getNumMusicas();?>
 </TD>
                        </TR>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Código </TH>
                        <TH> Nome </TH>
                        <TH> Músicas </TH>
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