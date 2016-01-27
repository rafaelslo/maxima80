<?php /* Smarty version Smarty-3.1.8, created on 2015-11-04 13:45:41
         compiled from ".\templates\cadastros\locais.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1257956325b6aeb6746-66866815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d31760934736d8cf24f1151d9056cafd759241d' => 
    array (
      0 => '.\\templates\\cadastros\\locais.tpl',
      1 => 1446651906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1257956325b6aeb6746-66866815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56325b6b06b468_11275667',
  'variables' => 
  array (
    'locais' => 0,
    'local' => 0,
    'tree' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56325b6b06b468_11275667')) {function content_56325b6b06b468_11275667($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Equipamentos"), 0);?>


<style>
.tree {
    min-height:20px;
    padding:19px;
    margin-bottom:20px;
    background-color:#fbfbfb;
    border:1px solid #999;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;


    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05)
}
.tree li {
    list-style-type:none;
    margin:0;
    padding:10px 5px 0 5px;
    position:relative
}
.tree li::before, .tree li::after {
    content:'';
    left:-20px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #999;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #999;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #999;
    border-radius:5px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none
}
.tree li.parent_li>span {
    cursor:pointer
}
.tree>ul>li::before, .tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:30px
}
.tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
    background:#eee;
    border:1px solid #94a0b4;
    color:#000
}
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Locais
            <small>Lista de Locais</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li class="active">Locais</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> ID </TH>
                        <TH> Sigla </TH>
                        <TH> Tom </TH>
                        <TH> Nome </TH>
                        <TH> Complemento </TH>
                        <TH> CNPJ </TH>
                        <TH> Responsável </TH>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['local'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['local']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['local']->key => $_smarty_tpl->tpl_vars['local']->value){
$_smarty_tpl->tpl_vars['local']->_loop = true;
?>
                        <TR>
                            <TD><a href="<?php echo $_SESSION['baseURL'];?>
/cadastros/formIncluirLocal/<?php echo $_smarty_tpl->tpl_vars['local']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['local']->value->getId();?>
</a></TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['local']->value->getSigla();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['local']->value->getCodTom();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['local']->value->getNome();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['local']->value->getComplemento();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['local']->value->getCnpj();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['local']->value->getResponsavel();?>
 </TD>
                        </TR>
                    <?php } ?>        
                </tbody>
                <tfoot>
                    <tr>
                        <TH> ID </TH>
                        <TH> Sigla </TH>
                        <TH> Tom </TH>
                        <TH> Nome </TH>
                        <TH> Complemento </TH>
                        <TH> CNPJ </TH>
                        <TH> Responsável </TH>
                    </tr>
                </tfoot>
            </table>
                
                <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

       
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script type="text/javascript">
    $(document).ready(function() {
        $("#_menuAcoes").html($("#menuAcoes").html());
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
        }
        e.stopPropagation();
    });        
    });
</script>

<div class="hidden">
    <DIV ID="menuAcoes">
        <li>
            <a class="btn btn-block btn-primary" href="<?php echo $_SESSION['baseURL'];?>
/cadastros/formIncluirLocal">Adicionar Local</a>
        </li>
    </DIV>
</div>    
<?php }} ?>