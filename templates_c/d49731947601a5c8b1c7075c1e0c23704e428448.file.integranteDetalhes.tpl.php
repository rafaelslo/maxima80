<?php /* Smarty version Smarty-3.1.8, created on 2019-07-18 21:57:28
         compiled from ".\Templates\integrantes\integranteDetalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311195c06cad35954d0-12016666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd49731947601a5c8b1c7075c1e0c23704e428448' => 
    array (
      0 => '.\\Templates\\integrantes\\integranteDetalhes.tpl',
      1 => 1563474135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311195c06cad35954d0-12016666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5c06cad3998c69_42285769',
  'variables' => 
  array (
    'integrante' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c06cad3998c69_42285769')) {function content_5c06cad3998c69_42285769($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Detalhes de Integrante",'integrantesActive'=>"active"), 0);?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $_smarty_tpl->tpl_vars['integrante']->value->getNome();?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Integrantes</a></li>
            <li><a href="#">Detalhes</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box box-primary">
            <div class="box-header with-border">Dados Gerais</div>
            <TABLE Class="table">
                <THEAD>
                </THEAD>
                <TFOOT>
                </TFOOT>
                <TBODY>
                    <TR>
                        <TD class="label-primary">Nome</TD><TD> <?php echo $_smarty_tpl->tpl_vars['integrante']->value->getNome();?>
 </TD>
                    </TR>
                    <TR>
                        <TD class="label-primary">Email</TD><TD> <?php echo $_smarty_tpl->tpl_vars['integrante']->value->getMail();?>
 </TD>
                    </TR>
                    <TR>
                        <TD class="label-primary">Status</TD><TD> <?php echo $_smarty_tpl->tpl_vars['integrante']->value->getStatus();?>
 </TD>
                    </TR>
                    <TR>
                        <TD class="label-primary">Mudança de Status</TD><TD> 
                            <?php if ($_smarty_tpl->tpl_vars['integrante']->value->getStatus()=='Ativo'){?>
                                <a class="btn btn-danger" href= "<?php echo $_SESSION['baseURL'];?>
/integrantes/status/<?php echo $_smarty_tpl->tpl_vars['integrante']->value->getId();?>
1" role="button">Desativar</a>
                            <?php }else{ ?>
                                <a class="btn btn-info" href= "<?php echo $_SESSION['baseURL'];?>
/integrantes/status/<?php echo $_smarty_tpl->tpl_vars['integrante']->value->getId();?>
0" role="button">Reativar</a>
                            <?php }?>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->                       

<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>