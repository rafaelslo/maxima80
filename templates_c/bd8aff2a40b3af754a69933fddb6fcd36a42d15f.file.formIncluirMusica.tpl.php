<?php /* Smarty version Smarty-3.1.8, created on 2016-01-18 10:58:05
         compiled from ".\templates\musicas\formIncluirMusica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19004569ce1110a8ee8-71259206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd8aff2a40b3af754a69933fddb6fcd36a42d15f' => 
    array (
      0 => '.\\templates\\musicas\\formIncluirMusica.tpl',
      1 => 1453121883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19004569ce1110a8ee8-71259206',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_569ce1111ae289_56992357',
  'variables' => 
  array (
    'selBandas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569ce1111ae289_56992357')) {function content_569ce1111ae289_56992357($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Incluir Musica"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Música
            <small>Incluir Música</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-music"></i> Músicas</a></li>
            <li class="active">Incluir</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo $_SESSION['baseURL'];?>
/musicas/incluirMusica">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Título</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputDescricao" name="inputDescricao" placeholder="Título da Música">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputBanda" class="col-sm-2 control-label">Banda</label>
                    <div class="col-sm-10">
                        <?php echo $_smarty_tpl->tpl_vars['selBandas']->value;?>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDuracao" class="col-sm-2 control-label">Duração</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputDuracao" name="inputDuracao"  placeholder="00:00">
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