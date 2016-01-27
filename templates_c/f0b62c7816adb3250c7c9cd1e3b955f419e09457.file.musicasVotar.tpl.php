<?php /* Smarty version Smarty-3.1.8, created on 2016-01-19 14:58:25
         compiled from ".\templates\musicas\musicasVotar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10049569d03086f60b6-04952042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0b62c7816adb3250c7c9cd1e3b955f419e09457' => 
    array (
      0 => '.\\templates\\musicas\\musicasVotar.tpl',
      1 => 1453222694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10049569d03086f60b6-04952042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_569d030890e5f7_10250751',
  'variables' => 
  array (
    'musicas' => 0,
    'musica' => 0,
    'voto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569d030890e5f7_10250751')) {function content_569d030890e5f7_10250751($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Músicas",'musicasActive'=>"active"), 0);?>


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

        <!-- Your Page Content Here -->
        <div class="box">
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> Nome </TH>
                        <TH> Banda </TH>
                        <TH> Status </TH>
                        <TH> Rafael </TH>
                        <TH> Rodrigo </TH>
                        <TH> Vanio </TH>
                        <TH> Marcio </TH>
                        <TH> Emerson </TH>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['musica'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['musica']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['musicas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['musica']->key => $_smarty_tpl->tpl_vars['musica']->value){
$_smarty_tpl->tpl_vars['musica']->_loop = true;
?>
                        <TR>
                            <TD><a href="<?php echo $_SESSION['baseURL'];?>
/musicas/detalha/<?php echo $_smarty_tpl->tpl_vars['musica']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['musica']->value->getNome();?>
</a></TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['musica']->value->getBanda();?>
 </TD>
                            <TD musica="<?php echo $_smarty_tpl->tpl_vars['musica']->value->getId();?>
" class="<?php echo $_smarty_tpl->tpl_vars['musica']->value->getStatus()->getCor();?>
"><?php echo $_smarty_tpl->tpl_vars['musica']->value->getStatus()->getNome();?>
</TD>

                            <?php  $_smarty_tpl->tpl_vars['voto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['musica']->value->getVotos()->getVotos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voto']->key => $_smarty_tpl->tpl_vars['voto']->value){
$_smarty_tpl->tpl_vars['voto']->_loop = true;
?>
                                <TD class=""><?php echo $_smarty_tpl->tpl_vars['voto']->value;?>
 </TD>
                                <?php } ?>
                        </TR>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Nome </TH>
                        <TH> Banda </TH>
                        <TH> Status </TH>
                        <TH> Rafael </TH>
                        <TH> Rodrigo </TH>
                        <TH> Vanio </TH>
                        <TH> Marcio </TH>
                        <TH> Emerson </TH>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script type="text/javascript">
    $(document).ready(function() {
        //$('#tabela1').dataTable($configuraDataTable);
    });
    $("[name^='inputVoto']").change(function() {
        var voto = $(this).find("option:selected").val();
        var res = $(this).attr("name").split("_");
        var musica = preencheZeros(res[1]);
        var integrante = preencheZeros(res[2]);
        $.ajax({
            url: "<?php echo $_SESSION['baseURL'];?>
/musicas/procVoto/1" + musica + integrante + voto,
        }).success(function(data) {
            //$("[musica='" + res[1] + "']").text(data);
        });
    });

    function preencheZeros(param) {
        if (param > 100) {
            return param;
        }
        if (param > 10) {
            return "0" + param;
        }
        return "00" + param;
    }
</script>

<?php }} ?>