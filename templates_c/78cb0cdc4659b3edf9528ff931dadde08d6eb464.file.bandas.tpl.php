<?php /* Smarty version Smarty-3.1.8, created on 2019-07-18 21:49:23
         compiled from ".\Templates\bandas\bandas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:669356a0c23ea32fe4-07750270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78cb0cdc4659b3edf9528ff931dadde08d6eb464' => 
    array (
      0 => '.\\Templates\\bandas\\bandas.tpl',
      1 => 1563474137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '669356a0c23ea32fe4-07750270',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56a0c23ebb28b9_36933954',
  'variables' => 
  array (
    'mensagem' => 0,
    'bandas' => 0,
    'banda' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a0c23ebb28b9_36933954')) {function content_56a0c23ebb28b9_36933954($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Bandas",'bandasActive'=>"active"), 0);?>


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
        <?php if ($_smarty_tpl->tpl_vars['mensagem']->value!=''){?>
            <BR><p class="login-box-msg label-danger"><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</p>
        <?php }?>
        <!-- Your Page Content Here -->
        <div class="box">
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> Código </TH>
                        <TH> Nome </TH>
                        <TH> Músicas </TH>
                        <TH> Músicas Aprovadas</TH>
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
                            <TD><?php echo $_smarty_tpl->tpl_vars['banda']->value->getNumAprovadas();?>
 </TD>
                        </TR>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Código </TH>
                        <TH> Nome </TH>
                        <TH> Músicas </TH>
                        <TH> Músicas Aprovadas</TH>
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