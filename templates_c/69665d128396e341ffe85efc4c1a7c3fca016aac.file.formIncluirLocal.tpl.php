<?php /* Smarty version Smarty-3.1.8, created on 2015-11-05 10:41:25
         compiled from ".\templates\cadastros\formIncluirLocal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5791563a2af456cbd7-00774970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69665d128396e341ffe85efc4c1a7c3fca016aac' => 
    array (
      0 => '.\\templates\\cadastros\\formIncluirLocal.tpl',
      1 => 1446727271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5791563a2af456cbd7-00774970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_563a2af4a364d7_28299896',
  'variables' => 
  array (
    'local' => 0,
    'selTpLocais' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563a2af4a364d7_28299896')) {function content_563a2af4a364d7_28299896($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Equipamentos"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Locais
            <small><?php if ($_smarty_tpl->tpl_vars['local']->value->getId()==''){?>Adicionar<?php }else{ ?>Alterar<?php }?> Local</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li><a href="<?php echo $_SESSION['baseURL'];?>
/cadastros/locais">Locais</a></li>
            <li class="active"><?php if ($_smarty_tpl->tpl_vars['local']->value->getId()==''){?>Adicionar<?php }else{ ?>Alterar<?php }?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo $_SESSION['baseURL'];?>
/cadastros/incluirLocal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputCodigo" class="col-sm-2 control-label">Código</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCodigo" name="inputCodigo" value="<?php echo $_smarty_tpl->tpl_vars['local']->value->getId();?>
" placeholder="Código do Circuito" <?php if ($_smarty_tpl->tpl_vars['local']->value->getId()==''){?>required<?php }else{ ?>readonly<?php }?>>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputSigla" class="col-sm-2 control-label">Sigla</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputSigla" name="inputSigla" value="<?php echo $_smarty_tpl->tpl_vars['local']->value->getSigla();?>
" placeholder="Sigla do local">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTpLocal" class="col-sm-2 control-label">Tipo de Local</label>
                    <div class="col-sm-10">
                        <?php echo $_smarty_tpl->tpl_vars['selTpLocais']->value;?>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTom" class="col-sm-2 control-label">Código TOM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTom" name="inputTom" value="<?php echo $_smarty_tpl->tpl_vars['local']->value->getCodTom();?>
" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputDescricao" name="inputDescricao" value="<?php echo $_smarty_tpl->tpl_vars['local']->value->getNome();?>
" placeholder="Descreva o local">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputCNPJ" class="col-sm-2 control-label">CNPJ</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputCNPJ" name="inputCNPJ" value="<?php echo $_smarty_tpl->tpl_vars['local']->value->getCnpj();?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputResp" class="col-sm-2 control-label">Responsável</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputResp" name="inputResp" value="<?php echo $_smarty_tpl->tpl_vars['local']->value->getResponsavel();?>
">
                    </div>
                </div>                <div class="form-group">
                    <label for="inputPai" class="col-sm-2 control-label">Unidade Pai</label>
                    <div class="col-sm-10">
                        <input type="number" required readonly class="form-control" id="inputPai" name="inputPai" value="<?php echo $_smarty_tpl->tpl_vars['local']->value->getLocalAcimaId();?>
">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="inputEquipamentos" <?php if ($_smarty_tpl->tpl_vars['local']->value->getPermiteVincularEquipamento()==1){?>checked<?php }?>> Permite alocar equipamentos?
                            </label>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="<?php if ($_smarty_tpl->tpl_vars['local']->value->getId()==''){?>Adicionar<?php }else{ ?>Alterar<?php }?>">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>