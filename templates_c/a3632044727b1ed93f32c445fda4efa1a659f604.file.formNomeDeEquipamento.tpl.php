<?php /* Smarty version Smarty-3.1.8, created on 2015-11-06 15:40:56
         compiled from ".\templates\ferramentas\formNomeDeEquipamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13016563b7ad5472245-78595806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3632044727b1ed93f32c445fda4efa1a659f604' => 
    array (
      0 => '.\\templates\\ferramentas\\formNomeDeEquipamento.tpl',
      1 => 1446831655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13016563b7ad5472245-78595806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_563b7ad583b097_56231530',
  'variables' => 
  array (
    'selRede' => 0,
    'selTpEquip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b7ad583b097_56231530')) {function content_563b7ad583b097_56231530($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Cálculo de Nome"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ferramentas
            <small>Cálculo de Nome de Equipamentos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Ferramentas</a></li>
            <li class="active">Nome de Equipamentos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form id="form1" class="form-horizontal" role="form" data-toggle="validator">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputRede" class="col-sm-2 control-label">Rede</label>
                    <div class="col-sm-10">
                        <?php echo $_smarty_tpl->tpl_vars['selRede']->value;?>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputIpRede" class="col-sm-2 control-label">IP da Rede</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="inputIpRede" name="inputIpRede">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMascara" class="col-sm-2 control-label">Máscara da Rede</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="inputMascara" name="inputMascara">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTpEquip" class="col-sm-2 control-label">Tipo de Equipamento</label>
                    <div class="col-sm-10">
                        <?php echo $_smarty_tpl->tpl_vars['selTpEquip']->value;?>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputIp" class="col-sm-2 control-label">IP do Equipamento</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputIp" name="inputIp" pattern="\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputNome" class="col-sm-2 control-label">Nome Calculado</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="inputNome" name="inputNome">
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="Calcular">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
    $("#inputRede").change(function() {
        $.ajax({
            url: "<?php echo $_SESSION['baseURL'];?>
/ajax/getRedes/" + $(this).find(":selected").text()}).success(function(data) {
            var obj = JSON.parse(data);
            $("#inputIpRede").val(obj.ip);
            $("#inputMascara").val(obj.mascara);
        })
    });
    $("#form1").submit(function(event) {
        CalculaNome();
        event.preventDefault();
    });
    function CalculaNome()
    {
            var rede = $("#inputRede").find(":selected").text();
            var ip00 = $("#inputIpRede").text();
            var tipo = $("#inputTpEquip").find(":selected").val();
            var ipv4 = $("#inputIp").text();

            var base = ParseIPv4(ip00);
            var abs4 = ParseIPv4(ipv4);
            if (abs4 < base) {
                $("#inputNome").text("IP inválido");

            } else {
                var zzzz = 2304 + abs4 - base;
                $("#inputNome").val(rede + tipo + zzzz);
            }
        }

        function ParseIPv4(text)
        {
                if (text == undefined)
                    return 0;
                var txts = (text + ".0.0.0").split(".");
                var oct1 = parseInt(txts[0], 10);
                if (isNaN(oct1))
                    oct1 = 0;
                var oct2 = parseInt(txts[1], 10);
                if (isNaN(oct2))
                    oct2 = 0;
                var oct3 = parseInt(txts[2], 10);
                if (isNaN(oct3))
                    oct3 = 0;
                var oct4 = parseInt(txts[3], 10);
                if (isNaN(oct4))
                    oct4 = 0;
                return oct1 * 0x1000000 + oct2 * 0x10000 + oct3 * 0x100 + oct4;
            }
</script>
<?php }} ?>