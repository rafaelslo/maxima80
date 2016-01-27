<?php /* Smarty version Smarty-3.1.8, created on 2015-10-20 16:37:52
         compiled from ".\templates\falhaTemplate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11807562154fe9f3d07-71201146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '952b0b1001f38132e90b2d8fff8ad3d85c03cbf5' => 
    array (
      0 => '.\\templates\\falhaTemplate.tpl',
      1 => 1445366266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11807562154fe9f3d07-71201146',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_562154fea4fb22_73764747',
  'variables' => 
  array (
    'erro' => 0,
    'excecao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562154fea4fb22_73764747')) {function content_562154fea4fb22_73764747($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Erro"), 0);?>



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