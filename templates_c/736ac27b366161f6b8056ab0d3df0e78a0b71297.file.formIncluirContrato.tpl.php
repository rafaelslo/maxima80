<?php /* Smarty version Smarty-3.1.8, created on 2015-10-29 10:50:25
         compiled from ".\templates\cadastros\formIncluirContrato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108345632139fb70397-23058495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '736ac27b366161f6b8056ab0d3df0e78a0b71297' => 
    array (
      0 => '.\\templates\\cadastros\\formIncluirContrato.tpl',
      1 => 1446123023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108345632139fb70397-23058495',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5632139ff40496_15082935',
  'variables' => 
  array (
    'contrato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5632139ff40496_15082935')) {function content_5632139ff40496_15082935($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Equipamentos"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contratos
            <small><?php if ($_smarty_tpl->tpl_vars['contrato']->value->getId()==''){?>Adicionar<?php }else{ ?>Alterar<?php }?> Contrato de Garantia</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li><a href="<?php echo $_SESSION['baseURL'];?>
/cadastros/contratos">Contratos</a></li>
            <li class="active"><?php if ($_smarty_tpl->tpl_vars['contrato']->value->getId()==''){?>Adicionar<?php }else{ ?>Alterar<?php }?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo $_SESSION['baseURL'];?>
/cadastros/incluirContrato">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="inputCodigo" name="inputCodigo" value="<?php echo $_smarty_tpl->tpl_vars['contrato']->value->getId();?>
">
                        <input type="text" class="form-control" id="inputDescricao" name="inputDescricao" value="<?php echo $_smarty_tpl->tpl_vars['contrato']->value->getDescricao();?>
" placeholder="Descrição da garantia">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputLocal" class="col-sm-2 control-label">Local</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputLocal" name="inputLocal" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputContrato" class="col-sm-2 control-label">Contrato</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputContrato" name="inputContrato" value="<?php echo $_smarty_tpl->tpl_vars['contrato']->value->getContrato();?>
" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputInicio" class="col-sm-2 control-label">Data Inicio</label>
                    <div class="col-sm-10">
                        <input type="date" required class="form-control" id="InputInicio" name="InputInicio" value="<?php echo $_smarty_tpl->tpl_vars['contrato']->value->getDataInicio();?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFim" class="col-sm-2 control-label">Data Término</label>
                    <div class="col-sm-10">
                        <input type="date" required class="form-control" id="inputFim" name="inputFim" value="<?php echo $_smarty_tpl->tpl_vars['contrato']->value->getDataFim();?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFiscais" class="col-sm-2 control-label">Fiscais do Contrato</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" required class="form-control" id="inputFiscais" name="inputFiscais" placeholder="Informe os nomes dos fiscais"><?php echo $_smarty_tpl->tpl_vars['contrato']->value->getFiscais();?>
</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputOBS" class="col-sm-2 control-label">Observações</label>
                    <div class="col-sm-10">
                        <input type="area" required class="form-control" id="inputOBS" name="inputOBS" value="<?php echo $_smarty_tpl->tpl_vars['contrato']->value->getObservacaoChamado();?>
" placeholder="Orientações para a abertura do s chamados">
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="<?php if ($_smarty_tpl->tpl_vars['contrato']->value->getId()==''){?>Adicionar<?php }else{ ?>Alterar<?php }?>">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>