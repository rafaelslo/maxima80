<?php /* Smarty version Smarty-3.1.8, created on 2016-01-21 10:07:16
         compiled from ".\Templates\shows\formIncluirShow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:755956a0c864abd290-83217617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53f1e6d0877a2ac0539e861300f87803fc914afa' => 
    array (
      0 => '.\\Templates\\shows\\formIncluirShow.tpl',
      1 => 1453377979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '755956a0c864abd290-83217617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56a0c864bee275_58990728',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a0c864bee275_58990728')) {function content_56a0c864bee275_58990728($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Incluir Show",'showsActive'=>"active"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Show
            <small>Incluir Show</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> Shows</a></li>
            <li class="active">Incluir</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo $_SESSION['baseURL'];?>
/shows/incluirShow">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputLocal" class="col-sm-2 control-label">Local</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputLocal" name="inputLocal" placeholder="Local do Show">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputData" class="col-sm-2 control-label">Data</label>
                    <div class="col-sm-10">
                        <div class="input-group input-append date" id="datePicker">
                            <input type="text" required class="form-control" name="date" />
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="Adicionar">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datePicker')
                .datepicker({
            format: 'dd/mm/yyyy'
        });
    });
</script>        <?php }} ?>