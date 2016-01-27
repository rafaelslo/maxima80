<?php /* Smarty version Smarty-3.1.8, created on 2015-10-19 16:46:29
         compiled from ".\templates\dashboard\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2503556253a42c2d260-24501768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f531a0fb441bf37a3aa863091998b5124bca5c' => 
    array (
      0 => '.\\templates\\dashboard\\dashboard.tpl',
      1 => 1445280387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2503556253a42c2d260-24501768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56253a42c685e6_60090542',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56253a42c685e6_60090542')) {function content_56253a42c685e6_60090542($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Equipamentos"), 0);?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Informações rápidas do sistema</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          
          minha página
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->                       

<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>