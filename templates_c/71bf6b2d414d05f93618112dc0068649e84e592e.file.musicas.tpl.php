<?php /* Smarty version Smarty-3.1.8, created on 2019-07-18 21:43:35
         compiled from ".\Templates\musicas\musicas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2818856a0bf36a61a29-22370553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71bf6b2d414d05f93618112dc0068649e84e592e' => 
    array (
      0 => '.\\Templates\\musicas\\musicas.tpl',
      1 => 1563474137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2818856a0bf36a61a29-22370553',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56a0bf36ce6f44_33615398',
  'variables' => 
  array (
    'mensagem' => 0,
    'musicas' => 0,
    'musica' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a0bf36ce6f44_33615398')) {function content_56a0bf36ce6f44_33615398($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Músicas",'musicasActive'=>"active"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Musicas
            <small>Lista de Músicas</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-music"></i> Musicas</a></li>
            <li class="active">Lista</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php if ($_smarty_tpl->tpl_vars['mensagem']->value!=''){?>
            <BR><p class="login-box-msg label-danger"><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</p>
        <?php }?>
        <!-- Your Page Content Here -->
        <div class="box">
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> Código </TH>
                        <TH> Nome </TH>
                        <TH> Banda </TH>
                        <TH> Duração </TH>
                        <TH> Recursos </TH>
                        <TH> Shows </TH>
                        <TH> Status </TH>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['musica'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['musica']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['musicas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['musica']->key => $_smarty_tpl->tpl_vars['musica']->value){
$_smarty_tpl->tpl_vars['musica']->_loop = true;
?>
                        <TR>
                            <TD><?php echo $_smarty_tpl->tpl_vars['musica']->value->getId();?>
 </TD>
                            <TD><a href="<?php echo $_SESSION['baseURL'];?>
/musicas/detalha/<?php echo $_smarty_tpl->tpl_vars['musica']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['musica']->value->getNome();?>
</a></TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['musica']->value->getBanda();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['musica']->value->getDuracao();?>
 </TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['musica']->value->getRecursos()->countRecursos();?>
 </TD>
                            <TD><?php echo count($_smarty_tpl->tpl_vars['musica']->value->getShows());?>
 </TD>
                            <TD class="<?php echo $_smarty_tpl->tpl_vars['musica']->value->getStatus()->getCor();?>
"><?php echo $_smarty_tpl->tpl_vars['musica']->value->getStatus()->getNome();?>
 </TD>
                        </TR>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Código </TH>
                        <TH> Nome </TH>
                        <TH> Banda </TH>
                        <TH> Duração </TH>
                        <TH> Recursos </TH>
                        <TH> Status </TH>
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
    });
</script>
   
<?php }} ?>