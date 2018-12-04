<?php /* Smarty version Smarty-3.1.8, created on 2018-11-28 13:10:27
         compiled from ".\Templates\musicas\formIncluirInstrumental.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129235bfeac29a366a3-61933048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85d9302f74769be515ea926947e2476c27edaf5a' => 
    array (
      0 => '.\\Templates\\musicas\\formIncluirInstrumental.tpl',
      1 => 1543417797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129235bfeac29a366a3-61933048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5bfeac29b3ebe9_19299475',
  'variables' => 
  array (
    'musica' => 0,
    'integrantes' => 0,
    'integ' => 0,
    'instrumentos' => 0,
    'inst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfeac29b3ebe9_19299475')) {function content_5bfeac29b3ebe9_19299475($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Incluir Instrumental",'musicasActive'=>"active"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Música
            <small>Incluir Instrumental</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-music"></i> Músicas</a></li>
            <li class="active">Incluir Instrumental</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo $_SESSION['baseURL'];?>
/musicas/incluirInstrumental">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputIntegrante" class="col-sm-2 control-label">Integrante</label>
                    <input type="hidden" id="inputId" name="inputId" value="<?php echo $_smarty_tpl->tpl_vars['musica']->value;?>
">
                    <div class="col-sm-10">
                        <select class="form-control" id="inputIntegrante" name="inputIntegrante">
                            <?php  $_smarty_tpl->tpl_vars['integ'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['integ']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['integrantes']->value->getIntegrantes(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['integ']->key => $_smarty_tpl->tpl_vars['integ']->value){
$_smarty_tpl->tpl_vars['integ']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['integ']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['integ']->value->getNome();?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputInstrumento" class="col-sm-2 control-label">Instrumento</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="inputInstrumento" name="inputInstrumento">
                            <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['instrumentos']->value->getInstrumentos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value){
$_smarty_tpl->tpl_vars['inst']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['inst']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['inst']->value->getNome();?>
</option>
                            <?php } ?>
                        </select>
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