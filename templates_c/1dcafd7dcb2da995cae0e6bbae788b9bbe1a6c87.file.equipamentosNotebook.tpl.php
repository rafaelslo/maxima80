<?php /* Smarty version Smarty-3.1.8, created on 2015-11-06 11:10:48
         compiled from ".\templates\equipamentos\equipamentosNotebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2465562fb60d6928b2-54466037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dcafd7dcb2da995cae0e6bbae788b9bbe1a6c87' => 
    array (
      0 => '.\\templates\\equipamentos\\equipamentosNotebook.tpl',
      1 => 1446815446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2465562fb60d6928b2-54466037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_562fb60df3db17_28142555',
  'variables' => 
  array (
    'resultado4' => 0,
    'resultado3' => 0,
    'resultado2' => 0,
    'resultado1' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562fb60df3db17_28142555')) {function content_562fb60df3db17_28142555($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Equipamentos"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Equipamentos
            <small>Listas de Equipamentos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Equipamentos</a></li>
            <li class="active">Desktop</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
                <li class=""><a href="#tab_4-2" data-toggle="tab" aria-expanded="true">Em Trânsito<span class="badge"><?php echo count($_smarty_tpl->tpl_vars['resultado4']->value);?>
</span></a></li>
                <li class=""><a href="#tab_3-2" data-toggle="tab" aria-expanded="true">Em manutenção <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['resultado3']->value);?>
</span></a></li>
                <li class=""><a href="#tab_2-2" data-toggle="tab" aria-expanded="false">Em Estoque <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['resultado2']->value);?>
</span></a></li>
                <li class="active"><a href="#tab_1-1" data-toggle="tab" aria-expanded="false">Ativos <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['resultado1']->value);?>
</span></a></li>
                <li class="pull-left header"><i class="fa fa-laptop"></i> Notebooks</li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1-1">
                    <table id="tabela1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Local</th>
                                <th>Fabricante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultado1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <TR><TD><A HREF='<?php echo $_SESSION['baseURL'];?>
/detalhes/geral/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
'> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNome();?>
 </A></TD><TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNome();?>
 </TD><TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNome();?>
 </TD><TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getFabricante();?>
</TD></TR>
                                        <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Local</th>
                                <th>Fabricante</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2-2">
                    <table id="tabela2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Local</th>
                                <th>Fabricante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultado2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <TR><TD><A HREF='<?php echo $_SESSION['baseURL'];?>
/detalhes/geral/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
'> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNome();?>
 </A></TD><TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNome();?>
 </TD><TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNome();?>
 </TD><TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getFabricante();?>
</TD></TR>
                                        <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Local</th>
                                <th>Fabricante</th>
                            </tr>
                        </tfoot>
                    </table>                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3-2">
                    <table id="tabela3" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Local</th>
                                <th>Fabricante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultado3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <TR><TD><A HREF='<?php echo $_SESSION['baseURL'];?>
/detalhes/geral/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
'> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNome();?>
 </A></TD><TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNome();?>
 </TD><TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNome();?>
 </TD><TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getFabricante();?>
</TD></TR>
                                        <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Local</th>
                                <th>Fabricante</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4-2">
                    <table id="tabela4" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Local</th>
                                <th>Fabricante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultado4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <TR><TD><A HREF='<?php echo $_SESSION['baseURL'];?>
/detalhes/geral/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
'> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNome();?>
 </A></TD><TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNome();?>
 </TD><TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNome();?>
 </TD><TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getFabricante();?>
</TD></TR>
                                        <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Local</th>
                                <th>Fabricante</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div>

        <!-- Your Page Content Here -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script type="text/javascript">
    $(document).ready(function() {
        $("#_menuAcoes").html($("#menuAcoes").html());
        $('#tabela1').dataTable($configuraDataTable);
        $('#tabela2').dataTable($configuraDataTable);
        $('#tabela3').dataTable($configuraDataTable);
        $('#tabela4').dataTable($configuraDataTable);
    });
</script>

<div class="hidden">
    <DIV ID="menuAcoes">
        <li>
            <a class="btn btn-block btn-primary" href="<?php echo $_SESSION['baseURL'];?>
/equipamentos/formIncluirEquip/notebook">Adicionar Equipamento</a>
        </li>
    </DIV>
</div>    
<?php }} ?>