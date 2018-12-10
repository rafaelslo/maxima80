<?php /* Smarty version Smarty-3.1.8, created on 2018-12-07 17:04:59
         compiled from ".\Templates\log\logs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:292955c096c42205427-65482914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe00833c1ad7672e707629d8476fe39af0ee26cd' => 
    array (
      0 => '.\\Templates\\log\\logs.tpl',
      1 => 1544209497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292955c096c42205427-65482914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5c096c422c2b39_94343895',
  'variables' => 
  array (
    'selIntegrantes' => 0,
    'request' => 0,
    'logs' => 0,
    'log' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c096c422c2b39_94343895')) {function content_5c096c422c2b39_94343895($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Log de Operações",'logsActive'=>"active"), 0);?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Logs de Operações
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-search"></i> Logs</a></li>
            <li><a href="#">Pesquisar</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box box-primary">
            <div class="box-header with-border">Filtros</div>
            <FORM class="form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo $_SESSION['baseURL'];?>
/log/main">
                <input type="hidden" name="form" value="Sim">
                <TABLE Class="table">
                    <THEAD>
                    </THEAD>
                    <TFOOT>
                    </TFOOT>
                    <TBODY>
                        <TR>
                            <TD class="label-primary" style="width: 30%">Integrante</TD><TD><?php echo $_smarty_tpl->tpl_vars['selIntegrantes']->value;?>
</TD>
                        </TR>
                        <TR>
                            <TD class="label-primary">Bandas</TD><TD><input type="text" class="form-control" name="Bandas" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['Bandas'];?>
" /></TD>
                        </TR>
                        <TR>
                            <TD class="label-primary">Músicas</TD><TD><input type="text" class="form-control" name="Musicas" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['Musicas'];?>
" /></TD>
                        </TR>
                        <TR>
                            <TD class="label-primary">Data Inicial</TD><TD>                        
                                <div class="input-group input-append date" id="datePicker">
                                    <input type="text" class="form-control" name="dataInicial" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['dataInicial'];?>
"/>
                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>                            
                            </TD>
                        </TR>
                        <TR>
                            <TD class="label-primary">Data Final</TD><TD>                        
                                <div class="input-group input-append date" id="datePicker1">
                                    <input type="text" class="form-control" name="dataFinal" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['dataFinal'];?>
"/>
                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>                            
                            </TD>
                        </TR>
                        <TR>
                            <TD colspan="2">
                                <input type="submit" class="btn btn-info center-block" value="Pesquisar">
                            </TD>
                        </TR>

                    </TBODY>
                </TABLE>
            </FORM>                    
        </div>
        <?php if ($_smarty_tpl->tpl_vars['request']->value['form']=="Sim"){?>                                
            <div class="box box-primary">
                <div class="box-header with-border">Resultado</div>
                    <?php if (count($_smarty_tpl->tpl_vars['logs']->value)>0){?>
                            <TABLE id="tabela1" class="table table-bordered table-striped">
                                <THEAD>
                                    <TR>
                                        <TH>Data</TH>
                                        <TH>Integrante</TH>
                                        <TH>Operação</TH>
                                        <TH>Objeto</TH>
                                        <TH>Música</TH>
                                        <TH>Descrição</TH>
                                    </TR>
                                </THEAD>
                                <TBODY>
                                    <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value){
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
                                        <tr>
                                            <TD><?php echo $_smarty_tpl->tpl_vars['log']->value->getDatahora();?>
</TD>
                                            <TD><?php echo $_smarty_tpl->tpl_vars['log']->value->getIntegrante();?>
</TD>
                                            <TD><?php echo $_smarty_tpl->tpl_vars['log']->value->getOperacao();?>
</TD>
                                            <TD><?php echo $_smarty_tpl->tpl_vars['log']->value->getObjeto();?>
</TD>
                                            <TD><A HREF="<?php echo $_SESSION['baseURL'];?>
/musicas/detalha/<?php echo $_smarty_tpl->tpl_vars['log']->value->getIdMusica();?>
"><?php echo $_smarty_tpl->tpl_vars['log']->value->getMusica();?>
</A></TD>
                                            <TD><?php echo $_smarty_tpl->tpl_vars['log']->value->getTexto();?>
</TD>
                                        </tr>
                                    <?php } ?>
                                </TBODY>
                                <TFOOT>
                                    <TR>
                                        <TH>Data</TH>
                                        <TH>Integrante</TH>
                                        <TH>Operação</TH>
                                        <TH>Objeto</TH>
                                        <TH>Música</TH>
                                        <TH>Descrição</TH>
                                    </TR>
                                </TFOOT>

                            </TABLE>
                    <?php }else{ ?>
                        Nenhum resultado encontrado
                    <?php }?>            
            </div>
        <?php }?>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->                       

<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script type="text/javascript">
    $(document).ready(function() {
        $('#datePicker')
                .datepicker({
            format: 'dd/mm/yyyy'
        });
        $('#datePicker1')
                .datepicker({
            format: 'dd/mm/yyyy'
        });
        $.fn.dataTable.moment( 'DD/MM/YYYY' );
        $('#tabela1').dataTable($configuraDataTable);
        var table = $('#tabela1').DataTable();
        table.order( [0 , 'desc'] ).draw();
    });
</script>  <?php }} ?>