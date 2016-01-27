<?php /* Smarty version Smarty-3.1.8, created on 2015-10-28 16:56:20
         compiled from ".\templates\cadastros\formIncluirEdificacao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:669156311775b87a90-97448557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136105768f6e89baa42c673281b9579c582e4c79' => 
    array (
      0 => '.\\templates\\cadastros\\formIncluirEdificacao.tpl',
      1 => 1446058578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '669156311775b87a90-97448557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5631177612b354_16686366',
  'variables' => 
  array (
    'edificacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5631177612b354_16686366')) {function content_5631177612b354_16686366($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Equipamentos"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Circuitos
            <small><?php if ($_smarty_tpl->tpl_vars['edificacao']->value->getSigla()==''){?>Adicionar<?php }else{ ?>Alterar<?php }?> Edificação</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li><a href="<?php echo $_SESSION['baseURL'];?>
/cadastros/edificacoes">Edificação</a></li>
            <li class="active"><?php if ($_smarty_tpl->tpl_vars['edificacao']->value->getSigla()==''){?>Adicionar<?php }else{ ?>Alterar<?php }?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo $_SESSION['baseURL'];?>
/cadastros/incluirEdificacao">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputCodigo" class="col-sm-2 control-label">Sigla</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCodigo" name="inputSigla" value="<?php echo $_smarty_tpl->tpl_vars['edificacao']->value->getSigla();?>
" placeholder="Sigla da Edificação" <?php if ($_smarty_tpl->tpl_vars['edificacao']->value->getSigla()==''){?>required<?php }else{ ?>disabled<?php }?>>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputDescricao" name="inputDescricao" value="<?php echo $_smarty_tpl->tpl_vars['edificacao']->value->getDescricao();?>
" placeholder="Descreva a edificação">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEndereco" class="col-sm-2 control-label">Endereço</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEndereco" name="inputEndereco" value="<?php echo $_smarty_tpl->tpl_vars['edificacao']->value->getEndereco();?>
" placeholder="Endereço da edificação">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputCidade" class="col-sm-2 control-label">Cidade</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputCidade" name="inputCidade" value="<?php echo $_smarty_tpl->tpl_vars['edificacao']->value->getCidade();?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUF" class="col-sm-2 control-label">UF</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputUF" name="inputUF" value="<?php echo $_smarty_tpl->tpl_vars['edificacao']->value->getUf();?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputCEP" class="col-sm-2 control-label">CEP</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputCEP" name="inputCEP" value="<?php echo $_smarty_tpl->tpl_vars['edificacao']->value->getCep();?>
">
                    </div>
                </div>
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="<?php if ($_smarty_tpl->tpl_vars['edificacao']->value->getSigla()==''){?>Adicionar<?php }else{ ?>Alterar<?php }?>">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>