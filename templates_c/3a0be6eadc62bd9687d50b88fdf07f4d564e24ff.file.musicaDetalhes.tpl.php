<?php /* Smarty version Smarty-3.1.8, created on 2016-01-22 15:50:13
         compiled from ".\Templates\musicas\musicaDetalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2048856a0c267193370-21721737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a0be6eadc62bd9687d50b88fdf07f4d564e24ff' => 
    array (
      0 => '.\\Templates\\musicas\\musicaDetalhes.tpl',
      1 => 1453485011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2048856a0c267193370-21721737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56a0c2674bab57_30896533',
  'variables' => 
  array (
    'musica' => 0,
    'voto' => 0,
    'recurso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a0c2674bab57_30896533')) {function content_56a0c2674bab57_30896533($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Detalhes de Música",'musicasActive'=>"active"), 0);?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $_smarty_tpl->tpl_vars['musica']->value->getNome();?>

            <small><?php echo $_smarty_tpl->tpl_vars['musica']->value->getBanda();?>
</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-music"></i> Musicas</a></li>
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
                        <TD class="label-primary">Duracao</TD><TD> <?php echo $_smarty_tpl->tpl_vars['musica']->value->getDuracao();?>
 </TD>
                    </TR>
                    <TR>
                        <TD class="label-primary">Status</TD><TD class="<?php echo $_smarty_tpl->tpl_vars['musica']->value->getStatus()->getCor();?>
"> <?php echo $_smarty_tpl->tpl_vars['musica']->value->getStatus()->getNome();?>
 </TD>
                    </TR>
                    <TR>
                        <TD class="label-primary">Ações</TD><TD> <?php echo $_smarty_tpl->getSubTemplate ("musicas/musicasAcoes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('acao'=>($_smarty_tpl->tpl_vars['musica']->value->getStatus()->getNome()),'id'=>($_smarty_tpl->tpl_vars['musica']->value->getId())), 0);?>
 </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">Votação</div>
            <TABLE Class="table">
                <THEAD>
                    <tr>
                        <TH> Rafael </TH>
                        <TH> Rodrigo </TH>
                        <TH> Vanio </TH>
                        <TH> Marcio </TH>
                        <TH> Emerson </TH>
                    </tr>                </THEAD>
                <TFOOT>
                </TFOOT>
                <TBODY>
                    <TR>
                        <?php  $_smarty_tpl->tpl_vars['voto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['musica']->value->getVotos()->getVotos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voto']->key => $_smarty_tpl->tpl_vars['voto']->value){
$_smarty_tpl->tpl_vars['voto']->_loop = true;
?>
                            <TD class=""><?php echo $_smarty_tpl->tpl_vars['voto']->value;?>
 </TD>
                            <?php } ?>
                    </TR>
                </TBODY>
            </TABLE>
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">Recursos <a class="btn btn-primary btn-sm pull-right" href= "<?php echo $_SESSION['baseURL'];?>
/musicas/formIncluirRecurso/<?php echo $_smarty_tpl->tpl_vars['musica']->value->getId();?>
" role="button">Adicionar Recurso</a></div>
            <?php  $_smarty_tpl->tpl_vars['recurso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recurso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['musica']->value->getRecursos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recurso']->key => $_smarty_tpl->tpl_vars['recurso']->value){
$_smarty_tpl->tpl_vars['recurso']->_loop = true;
?>
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Adicionado em <?php echo $_smarty_tpl->tpl_vars['recurso']->value->getData();?>
 por <?php echo $_smarty_tpl->tpl_vars['recurso']->value->getIntegrante();?>
</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <a class="btn btn-danger btn-sm" href= "<?php echo $_SESSION['baseURL'];?>
/musicas/removerRecurso/<?php echo $_smarty_tpl->tpl_vars['recurso']->value->getId();?>
" role="button">Remover Recurso</a>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <?php if ($_smarty_tpl->tpl_vars['recurso']->value->getTipo()=='1'){?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['recurso']->value->getRecurso();?>
" allowfullscreen></iframe>
                            </div> 
                        <?php }else{ ?>
                            <textarea class="form-control" rows="10" readonly><?php echo $_smarty_tpl->tpl_vars['recurso']->value->getRecurso();?>
</textarea>
                        <?php }?>  </div><!-- /.box-body -->
                </div><!-- /.box -->
            <?php } ?>
        </div>


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->                       

<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
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