<?php /* Smarty version Smarty-3.1.8, created on 2015-11-06 15:28:02
         compiled from ".\templates\equipamentos\formIncluirEquip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9113563ca7a672cd03-50963097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fce37f252a395691a19c2fa8572a34f3ef25741f' => 
    array (
      0 => '.\\templates\\equipamentos\\formIncluirEquip.tpl',
      1 => 1446830880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9113563ca7a672cd03-50963097',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_563ca7a6cb2b79_03066052',
  'variables' => 
  array (
    'tipo' => 0,
    'selStEquipamento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ca7a6cb2b79_03066052')) {function content_563ca7a6cb2b79_03066052($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Adicionar Equipamento"), 0);?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>

            <small>Adicionar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-plug"></i> Equipamentos</a></li>
            <li><a href="<?php echo $_SESSION['baseURL'];?>
/equipamentos/<?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</a></li>
            <li class="active">Adicionar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form id="form1" class="form-horizontal" role="form"  method="POST" action="<?php echo $_SESSION['baseURL'];?>
/equipamentos/incluirEquipamento">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputPatrimonio" class="col-sm-2 control-label">Patrimônio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPatrimonio" name="inputPatrimonio" placeholder="Patrimonio do Equipamento">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputNome" name="inputNome"  data-custom="checkCaptcha">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputDescricao" name="inputDescricao">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFabricante" class="col-sm-2 control-label">Fabricante</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputFabricante" name="inputFabricante">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputModelo" class="col-sm-2 control-label">Modelo</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputModelo" name="inputModelo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputNumSerie" class="col-sm-2 control-label">Número de Série</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNumSerie" name="inputNumSerie">
                    </div>
                </div>
             <div class="form-group">
                    <label for="inputStatus" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                        <?php echo $_smarty_tpl->tpl_vars['selStEquipamento']->value;?>

                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="Continuar">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script>
    
    function checkCaptcha(value, validator) {
        alert("rafael");
        return false;
    };
    $("#form1").submit(function(event) {
        alert("A");
        event.preventDefault();
    });
</script><?php }} ?>