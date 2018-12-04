<?php /* Smarty version Smarty-3.1.8, created on 2018-11-27 13:41:25
         compiled from ".\Templates\integrantes\formIncluirIntegrante.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62815bfd5d3bd831d2-52140162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51e9d7f0d85ed2356e3e1b82b22d69dd6c827737' => 
    array (
      0 => '.\\Templates\\integrantes\\formIncluirIntegrante.tpl',
      1 => 1543333256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62815bfd5d3bd831d2-52140162',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5bfd5d3be74588_80188965',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfd5d3be74588_80188965')) {function content_5bfd5d3be74588_80188965($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Incluir Integrante",'integrantesActive'=>"active"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Integrante
            <small>Incluir Integrante</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Integrantes</a></li>
            <li class="active">Incluir</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo $_SESSION['baseURL'];?>
/integrantes/incluirIntegrante">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputNome" name="inputNome" placeholder="Nome do Integrante">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMail" class="col-sm-2 control-label">e-Mail</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputMail" name="inputMail" placeholder="eMail do Integrante">
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