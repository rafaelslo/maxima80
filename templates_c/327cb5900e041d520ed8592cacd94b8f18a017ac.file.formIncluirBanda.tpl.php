<?php /* Smarty version Smarty-3.1.8, created on 2016-01-21 09:34:26
         compiled from ".\Templates\bandas\formIncluirBanda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:613856a0c242777da3-25331321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '327cb5900e041d520ed8592cacd94b8f18a017ac' => 
    array (
      0 => '.\\Templates\\bandas\\formIncluirBanda.tpl',
      1 => 1453222830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '613856a0c242777da3-25331321',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56a0c242856240_56588433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a0c242856240_56588433')) {function content_56a0c242856240_56588433($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Incluir Musica",'bandasActive'=>"active"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Banda
            <small>Incluir Banda</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-headphones"></i> Bandas</a></li>
            <li class="active">Incluir</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo $_SESSION['baseURL'];?>
/bandas/incluirBanda">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Título</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputDescricao" name="inputDescricao" placeholder="Título da Banda">
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="Adicionar">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>