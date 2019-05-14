<?php /* Smarty version Smarty-3.1.8, created on 2019-05-14 15:36:19
         compiled from ".\Templates\shows\shows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1853656a0c803ed51f2-63702949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '930e14fedb9a3f81e5c7e504fb5e7e78864fcd9f' => 
    array (
      0 => '.\\Templates\\shows\\shows.tpl',
      1 => 1557858968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1853656a0c803ed51f2-63702949',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56a0c804124983_81022906',
  'variables' => 
  array (
    'erro' => 0,
    'shows' => 0,
    'show' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a0c804124983_81022906')) {function content_56a0c804124983_81022906($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Shows",'showsActive'=>"active"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Shows
            <small>Lista de Shows</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> Shows</a></li>
            <li class="active">Lista</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <div class="box">
            <?php if ($_smarty_tpl->tpl_vars['erro']->value!=''){?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['erro']->value;?>

                </div>
            <?php }?>
            
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> Código </TH>
                        <TH> Local </TH>
                        <TH> Data </TH>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['show'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['show']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['show']->key => $_smarty_tpl->tpl_vars['show']->value){
$_smarty_tpl->tpl_vars['show']->_loop = true;
?>
                        <TR>
                            <TD><?php echo $_smarty_tpl->tpl_vars['show']->value->getId();?>
 </TD>
                            <TD><a href="<?php echo $_SESSION['baseURL'];?>
/shows/detalha/<?php echo $_smarty_tpl->tpl_vars['show']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['show']->value->getLocal();?>
</a></TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['show']->value->getData();?>
 </TD>
                        </TR>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Código </TH>
                        <TH> Local </TH>
                        <TH> Data </TH>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script type="text/javascript">
    $(document).ready(function() {    
        $.fn.dataTable.moment( 'DD/MM/YYYY' );
        $('#tabela1').dataTable($configuraDataTable);
        var table = $('#tabela1').DataTable();
        table.order( [2, 'desc'] ).draw();
    });
</script>
   
<?php }} ?>