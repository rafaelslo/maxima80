<?php /* Smarty version Smarty-3.1.8, created on 2016-01-22 14:36:33
         compiled from ".\Templates\musicas\formIncluirRecurso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:618356a2594348dcf0-68029607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f06e4453eab8808c0617b2bfd0769a05fc204fec' => 
    array (
      0 => '.\\Templates\\musicas\\formIncluirRecurso.tpl',
      1 => 1453480591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '618356a2594348dcf0-68029607',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56a259435722b7_87309145',
  'variables' => 
  array (
    'musica' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a259435722b7_87309145')) {function content_56a259435722b7_87309145($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Incluir Recurso",'musicasActive'=>"active"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Música
            <small>Incluir Recurso</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-music"></i> Músicas</a></li>
            <li class="active">Incluir Recurso</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo $_SESSION['baseURL'];?>
/musicas/incluirRecurso">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputTipo" class="col-sm-2 control-label">Tipo</label>
                    <input type="hidden" id="inputId" name="inputId" value="<?php echo $_smarty_tpl->tpl_vars['musica']->value;?>
">
                    <div class="col-sm-10">
                        <select class="form-control" id="inputTipo" name="inputTipo">
                            <option value="1">Video Youtube (apenas as letras que identificam o video)</option>
                            <option value="2">Texto (letras, Tablaturas, etc..)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputRecurso" class="col-sm-2 control-label">Recurso</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="inputRecurso" name="inputRecurso" rows="10" required></textarea>
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