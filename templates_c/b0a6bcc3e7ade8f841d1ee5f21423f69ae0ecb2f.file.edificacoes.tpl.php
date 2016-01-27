<?php /* Smarty version Smarty-3.1.8, created on 2015-10-28 16:58:43
         compiled from ".\templates\cadastros\edificacoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21276563116b082ebc6-20434836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0a6bcc3e7ade8f841d1ee5f21423f69ae0ecb2f' => 
    array (
      0 => '.\\templates\\cadastros\\edificacoes.tpl',
      1 => 1446058717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21276563116b082ebc6-20434836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_563116b0a62fb6_83758720',
  'variables' => 
  array (
    'edificacoes' => 0,
    'edif' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563116b0a62fb6_83758720')) {function content_563116b0a62fb6_83758720($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Equipamentos"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edificações
            <small>Lista de Edificações</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li class="active">Edificações</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <div class="box">
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> Sigla </TH>
                        <TH> Descrição </TH>
                        <TH> Cidade </TH>
                        <TH> UF </TH>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['edif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['edif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['edificacoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['edif']->key => $_smarty_tpl->tpl_vars['edif']->value){
$_smarty_tpl->tpl_vars['edif']->_loop = true;
?>
                        <TR>
                            <TD><a href="<?php echo $_SESSION['baseURL'];?>
/cadastros/formIncluirEdificacao/<?php echo $_smarty_tpl->tpl_vars['edif']->value->getSigla();?>
"><?php echo $_smarty_tpl->tpl_vars['edif']->value->getSigla();?>
</a></TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['edif']->value->getDescricao();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['edif']->value->getCidade();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['edif']->value->getUf();?>
 </TD>
                        </TR>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Sigla </TH>
                        <TH> Descrição </TH>
                        <TH> Cidade </TH>
                        <TH> UF </TH>
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
/cadastros/formIncluirEdificacao">Adicionar Edificação</a>
        </li>
    </DIV>
</div>


<?php }} ?>