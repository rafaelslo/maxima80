<?php /* Smarty version Smarty-3.1.8, created on 2016-01-21 11:21:16
         compiled from ".\Templates\falhaTemplate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1793556a0db4cb762d8-84654040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '069eb27f64bf59220fed20fd199499b121beae2b' => 
    array (
      0 => '.\\Templates\\falhaTemplate.tpl',
      1 => 1445366266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1793556a0db4cb762d8-84654040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
    'excecao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56a0db4cc47852_30327048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a0db4cc47852_30327048')) {function content_56a0db4cc47852_30327048($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Erro"), 0);?>



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
            <center>
                <BR>
                <H3>Não foi possivel carregar o template</H3>
                <BR>
                <?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
<BR>
                <H3>Exceção</H3>
                <?php echo $_smarty_tpl->tpl_vars['excecao']->value;?>
<BR>
            </center>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->  
      

<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>