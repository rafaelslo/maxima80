<?php /* Smarty version Smarty-3.1.8, created on 2015-10-28 16:59:17
         compiled from ".\templates\cadastros\circuitos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11245628d946946f22-51868755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '981ff3b95d1602daae8cee520dc7df865cac8810' => 
    array (
      0 => '.\\templates\\cadastros\\circuitos.tpl',
      1 => 1446058754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11245628d946946f22-51868755',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5628d946d3e0d0_46243863',
  'variables' => 
  array (
    'circuitos' => 0,
    'circuito' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5628d946d3e0d0_46243863')) {function content_5628d946d3e0d0_46243863($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Equipamentos"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Circuitos
            <small>Lista de circuitos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li class="active">Circuitos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <div class="box">
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> Código </TH>
                        <TH> Designação </TH>
                        <TH> Velocidade (kbps) </TH>
                        <TH> Tecnologia </TH>
                        <TH> IP WAN </TH>
                        <TH> Urbano? </TH>
                        <TH> Próprio? </TH>
                        <TH> Alta Latência? </TH>
                        <TH> Custo Mensal (R$) </TH>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['circuito'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['circuito']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['circuitos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['circuito']->key => $_smarty_tpl->tpl_vars['circuito']->value){
$_smarty_tpl->tpl_vars['circuito']->_loop = true;
?>
                        <TR>
                            <TD><a href="<?php echo $_SESSION['baseURL'];?>
/cadastros/formIncluirCircuito/<?php echo $_smarty_tpl->tpl_vars['circuito']->value->getCodigo();?>
"><?php echo $_smarty_tpl->tpl_vars['circuito']->value->getCodigo();?>
</a></TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['circuito']->value->getDesignacao();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['circuito']->value->getVelocidade();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['circuito']->value->getTecnologia();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['circuito']->value->getIpWan();?>
 </TD>
                            <TD><?php if ($_smarty_tpl->tpl_vars['circuito']->value->getUrbano()=='1'){?>Sim<?php }else{ ?>Não<?php }?> </TD>
                            <TD><?php if ($_smarty_tpl->tpl_vars['circuito']->value->getProprio()=='1'){?>Sim<?php }else{ ?>Não<?php }?> </TD>
                            <TD><?php if ($_smarty_tpl->tpl_vars['circuito']->value->getAltaLatencia()=='1'){?>Sim<?php }else{ ?>Não<?php }?> </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['circuito']->value->getCustoMensal();?>
 </TD>
                        </TR>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Código </TH>
                        <TH> Designação </TH>
                        <TH> Velocidade (kbps) </TH>
                        <TH> Tecnologia </TH>
                        <TH> IP WAN </TH>
                        <TH> Urbano? </TH>
                        <TH> Próprio? </TH>
                        <TH> Alta Latência? </TH>
                        <TH> Custo Mensal (R$) </TH>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script type="text/javascript">
    $(document).ready(function() {
        $('#tabela1').dataTable($configuraDataTable);
        $("#_menuAcoes").html($("#menuAcoes").html());
    });
</script>

<div class="hidden">
    <DIV ID="menuAcoes">
        <li>
            <a class="btn btn-block btn-primary" href="<?php echo $_SESSION['baseURL'];?>
/cadastros/formIncluirCircuito">Adicionar Circuito</a>
        </li>
    </DIV>
</div>    
<!-- TODO: remover. Era apenas teste 
<button type="button" class="btn btn-block btn-primary " data-toggle="modal" data-target="#myModal">Adicionar Circuito</button>
-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Adicional Circuito</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" required class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Sign in</button>
                    </div><!-- /.box-footer -->
                </form>        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Adicionar</button>
            </div>
        </div>
    </div>
</div>    
<?php }} ?>