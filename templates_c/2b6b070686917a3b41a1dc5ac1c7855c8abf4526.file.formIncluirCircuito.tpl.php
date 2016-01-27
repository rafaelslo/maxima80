<?php /* Smarty version Smarty-3.1.8, created on 2015-10-23 16:55:40
         compiled from ".\templates\cadastros\formIncluirCircuito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31115562a2968c0bd86-29514377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b6b070686917a3b41a1dc5ac1c7855c8abf4526' => 
    array (
      0 => '.\\templates\\cadastros\\formIncluirCircuito.tpl',
      1 => 1445626538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31115562a2968c0bd86-29514377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_562a2968caeff9_23096498',
  'variables' => 
  array (
    'circuito' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562a2968caeff9_23096498')) {function content_562a2968caeff9_23096498($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Equipamentos"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Circuitos
            <small><?php if ($_smarty_tpl->tpl_vars['circuito']->value->getCodigo()==''){?>Adicionar<?php }else{ ?>Alterar<?php }?> Circuito</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li><a href="<?php echo $_SESSION['baseURL'];?>
/cadastros/circuitos">Circuitos</a></li>
            <li class="active"><?php if ($_smarty_tpl->tpl_vars['circuito']->value->getCodigo()==''){?>Adicionar<?php }else{ ?>Alterar<?php }?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo $_SESSION['baseURL'];?>
/cadastros/incluirCircuito">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputCodigo" class="col-sm-2 control-label">Código</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCodigo" name="inputCodigo" value="<?php echo $_smarty_tpl->tpl_vars['circuito']->value->getCodigo();?>
" placeholder="Código do Circuito" <?php if ($_smarty_tpl->tpl_vars['circuito']->value->getCodigo()==''){?>required<?php }else{ ?>disabled<?php }?>>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputDescricao" name="inputDescricao" value="<?php echo $_smarty_tpl->tpl_vars['circuito']->value->getDesignacao();?>
" placeholder="Descreva o circuito">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputVelocidade" class="col-sm-2 control-label">Velocidade</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputVelocidade" name="inputVelocidade" value="<?php echo $_smarty_tpl->tpl_vars['circuito']->value->getVelocidade();?>
" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputOperadora" class="col-sm-2 control-label">Operadora</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputOperadora" name="inputOperadora" value="<?php echo $_smarty_tpl->tpl_vars['circuito']->value->getOperadora();?>
" placeholder="Oi, Vivo, GVT, etc...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTecnologia" class="col-sm-2 control-label">Tecnologia</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputTecnologia" name="inputTecnologia" value="<?php echo $_smarty_tpl->tpl_vars['circuito']->value->getTecnologia();?>
" placeholder="ATM, FrameRelay">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputIP" class="col-sm-2 control-label">IP Wan</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputWan" name="inputWan" value="<?php echo $_smarty_tpl->tpl_vars['circuito']->value->getIpWAN();?>
" placeholder="Endereço IP do Roteador">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="inputUrbano" <?php if ($_smarty_tpl->tpl_vars['circuito']->value->getUrbano()==1){?>checked<?php }?>> Urbano?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="inputProprio" <?php if ($_smarty_tpl->tpl_vars['circuito']->value->getProprio()==1){?>checked<?php }?>> Próprio?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="inputLatencia" <?php if ($_smarty_tpl->tpl_vars['circuito']->value->getAltaLatencia()==1){?>checked<?php }?>> Alta Latência?
                            </label>
                        </div>
                    </div>
                </div>
             <div class="form-group">
                    <label for="inputCusto" class="col-sm-2 control-label">Custo Mensal (R$)</label>
                    <div class="col-sm-10">
                        <input type="number" required class="form-control" id="inputCusto" name="inputCusto" value="<?php echo $_smarty_tpl->tpl_vars['circuito']->value->getCustoMensal();?>
" >
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="<?php if ($_smarty_tpl->tpl_vars['circuito']->value->getCodigo()==''){?>Adicionar<?php }else{ ?>Alterar<?php }?>">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>