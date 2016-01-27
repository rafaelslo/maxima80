<?php /* Smarty version Smarty-3.1.8, created on 2015-10-29 10:49:09
         compiled from ".\templates\cadastros\contratos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1396256321047419ce3-47315497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48dc53e829b4a7216ceda52cd08be01000d66388' => 
    array (
      0 => '.\\templates\\cadastros\\contratos.tpl',
      1 => 1446122944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1396256321047419ce3-47315497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5632104770f298_01715605',
  'variables' => 
  array (
    'contratos' => 0,
    'contrato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5632104770f298_01715605')) {function content_5632104770f298_01715605($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Equipamentos"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Circuitos
            <small>Lista de Contratos de Garantia</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li class="active">Contratos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <div class="box">
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> ID </TH>
                        <TH> Descrição </TH>
                        <TH> Local </TH>
                        <TH> Contrato </TH>
                        <TH> Início </TH>
                        <TH> Términio </TH>
                        <TH> Fiscais </TH>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['contrato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contrato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contratos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contrato']->key => $_smarty_tpl->tpl_vars['contrato']->value){
$_smarty_tpl->tpl_vars['contrato']->_loop = true;
?>
                        <TR>
                            <TD><a href="<?php echo $_SESSION['baseURL'];?>
/cadastros/formIncluirContrato/<?php echo $_smarty_tpl->tpl_vars['contrato']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['contrato']->value->getId();?>
</a></TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['contrato']->value->getDescricao();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['contrato']->value->getLocal()->getNome();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['contrato']->value->getContrato();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['contrato']->value->getDataInicio();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['contrato']->value->getDataFim();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['contrato']->value->getFiscais();?>
 </TD>
                        </TR>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <TH> ID </TH>
                        <TH> Descrição </TH>
                        <TH> Local </TH>
                        <TH> Contrato </TH>
                        <TH> Início </TH>
                        <TH> Términio </TH>
                        <TH> Fiscais </TH>
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
/cadastros/formIncluirContrato">Adicionar Contrato</a>
        </li>
    </DIV>
</div>    
<?php }} ?>