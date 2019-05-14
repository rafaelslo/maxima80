<?php /* Smarty version Smarty-3.1.8, created on 2019-05-14 16:15:09
         compiled from ".\Templates\shows\showDetalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285156a0ce5c6c0065-55550148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '589af1ff552e22a141c7e6c63afd5f77359e5a83' => 
    array (
      0 => '.\\Templates\\shows\\showDetalhes.tpl',
      1 => 1557861306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285156a0ce5c6c0065-55550148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56a0ce5c829473_41864996',
  'variables' => 
  array (
    'show' => 0,
    'prontas' => 0,
    'pronta' => 0,
    'inst' => 0,
    'bloco1' => 0,
    'bloco' => 0,
    'bloco2' => 0,
    'bis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a0ce5c829473_41864996')) {function content_56a0ce5c829473_41864996($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Detalhes de Show",'showsActive'=>"active"), 0);?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $_smarty_tpl->tpl_vars['show']->value->getLocal();?>

            <small><?php echo $_smarty_tpl->tpl_vars['show']->value->getData();?>
</small>
            <a class="btn btn-danger" style="" href= "<?php echo $_SESSION['baseURL'];?>
/shows/apagarShow/<?php echo $_smarty_tpl->tpl_vars['show']->value->getId();?>
" role="button">Apagar Show</a>

        </h1>
        <ol class="breadcrumb" id="<?php echo $_smarty_tpl->tpl_vars['show']->value->getId();?>
">
            <li><a href="#"><i class="fa fa-users"></i> Show</a></li>
            <li><a href="#">Detalhes</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="row">

            <div class="col-md-3">
                <div class="box box-solid box-success">
                    <div class="box-header with-border">Musicas Prontas </div>
                    <ul id="sortable4" class="connectedSortable list-group">
                        <?php  $_smarty_tpl->tpl_vars['pronta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pronta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prontas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pronta']->key => $_smarty_tpl->tpl_vars['pronta']->value){
$_smarty_tpl->tpl_vars['pronta']->_loop = true;
?>
                            <li class="list-group-item list-group-item-success" style="padding: 5px 15px !important;" id="<?php echo $_smarty_tpl->tpl_vars['pronta']->value->getId();?>
"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['pronta']->value->getDuracao();?>
</span><span class="bg-primary label label-primary float-left"><?php echo count($_smarty_tpl->tpl_vars['pronta']->value->getShows());?>
</span> 
                                <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pronta']->value->getInstrumental()->getInstrumental(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value){
$_smarty_tpl->tpl_vars['inst']->_loop = true;
?>
                                    <img height="30" width="30" src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/<?php echo $_smarty_tpl->tpl_vars['inst']->value->getInstrumento()->getIcone();?>
" title="<?php echo $_smarty_tpl->tpl_vars['inst']->value->getIntegrante()->getNome();?>
">&nbsp;
                                <?php } ?>
                                <?php echo $_smarty_tpl->tpl_vars['pronta']->value->getNome();?>

                            </li>
                        <?php } ?>                        
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box box-solid box-primary">
                    <div class="box-header with-border" id="bloco1">Bloco 1 <span class="badge pull-right bg-light-blue">00:00</span></div>
                    <ul id="sortable1" class="connectedSortable list-group">
                        <?php  $_smarty_tpl->tpl_vars['bloco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bloco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bloco']->key => $_smarty_tpl->tpl_vars['bloco']->value){
$_smarty_tpl->tpl_vars['bloco']->_loop = true;
?>
                            <li class="list-group-item list-group-item-success" style="padding: 5px 15px !important;" id="<?php echo $_smarty_tpl->tpl_vars['bloco']->value->getId();?>
"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['bloco']->value->getDuracao();?>
</span> 
                                <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco']->value->getInstrumental()->getInstrumental(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value){
$_smarty_tpl->tpl_vars['inst']->_loop = true;
?>
                                    <img height="30" width="30" src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/<?php echo $_smarty_tpl->tpl_vars['inst']->value->getInstrumento()->getIcone();?>
" title="<?php echo $_smarty_tpl->tpl_vars['inst']->value->getIntegrante()->getNome();?>
">&nbsp;
                                <?php } ?>
                                <?php echo $_smarty_tpl->tpl_vars['bloco']->value->getNome();?>

                            </li>
                        <?php } ?>                        
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box box-solid box-primary">
                    <div class="box-header with-border" id="bloco2">Bloco 2 <span class="badge pull-right bg-light-blue">00:00</span></div>
                    <ul id="sortable2" class="connectedSortable list-group">
                        <?php  $_smarty_tpl->tpl_vars['bloco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bloco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bloco']->key => $_smarty_tpl->tpl_vars['bloco']->value){
$_smarty_tpl->tpl_vars['bloco']->_loop = true;
?>
                            <li class="list-group-item list-group-item-success" style="padding: 5px 15px !important;" id="<?php echo $_smarty_tpl->tpl_vars['bloco']->value->getId();?>
"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['bloco']->value->getDuracao();?>
</span> 
                                <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco']->value->getInstrumental()->getInstrumental(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value){
$_smarty_tpl->tpl_vars['inst']->_loop = true;
?>
                                    <img height="30" width="30" src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/<?php echo $_smarty_tpl->tpl_vars['inst']->value->getInstrumento()->getIcone();?>
" title="<?php echo $_smarty_tpl->tpl_vars['inst']->value->getIntegrante()->getNome();?>
">&nbsp;
                                <?php } ?>
                                <?php echo $_smarty_tpl->tpl_vars['bloco']->value->getNome();?>

                            </li>
                        <?php } ?>                        
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box box-solid box-primary">
                    <div class="box-header with-border" id="bis">Bis <span class="badge pull-right bg-light-blue">00:00</span></div>
                    <ul id="sortable3" class="connectedSortable list-group">
                        <?php  $_smarty_tpl->tpl_vars['bloco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bloco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bloco']->key => $_smarty_tpl->tpl_vars['bloco']->value){
$_smarty_tpl->tpl_vars['bloco']->_loop = true;
?>
                            <li class="list-group-item list-group-item-success" style="padding: 5px 15px !important;" id="<?php echo $_smarty_tpl->tpl_vars['bloco']->value->getId();?>
"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['bloco']->value->getDuracao();?>
</span> 
                                <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco']->value->getInstrumental()->getInstrumental(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value){
$_smarty_tpl->tpl_vars['inst']->_loop = true;
?>
                                    <img height="30" width="30" src="<?php echo $_SESSION['baseURL'];?>
/Templates/img/<?php echo $_smarty_tpl->tpl_vars['inst']->value->getInstrumento()->getIcone();?>
" title="<?php echo $_smarty_tpl->tpl_vars['inst']->value->getInstrumento()->getNome();?>
">
                                <?php } ?>    
                                <?php echo $_smarty_tpl->tpl_vars['bloco']->value->getNome();?>

                            </li>
                        <?php } ?>                        
                    </ul>
                </div>
                <BR>
                <div class="btn-danger panel panel-heading panel-title hidden" id="msg">Projeto não está salvo!!! </div>
                <form method="POST" action="<?php echo $_SESSION['baseURL'];?>
/shows/gravaSetlist">
                    <input type="hidden" name="id_show" value="<?php echo $_smarty_tpl->tpl_vars['show']->value->getId();?>
">
                    <input type="hidden" name="srtb1" id="srtb1">
                    <input type="hidden" name="srtb2" id="srtb2">
                    <input type="hidden" name="srtb3" id="srtb3">
                    <button class="btn btn-default btn-block hidden" type="submit" id="grava">Gravar Alterações</button>
                </form>
                <BR>
                <a class="btn btn-default btn-block" href= "<?php echo $_SESSION['baseURL'];?>
/shows/imprimir/<?php echo $_smarty_tpl->tpl_vars['show']->value->getId();?>
" role="button" target="_blank">Imprimir Padrão 1</a>
                <a class="btn btn-default btn-block" href= "<?php echo $_SESSION['baseURL'];?>
/shows/imprimirHorizontal/<?php echo $_smarty_tpl->tpl_vars['show']->value->getId();?>
" role="button" target="_blank">Imprimir Padrão 2</a>
                <a class="btn btn-default btn-block" href= "<?php echo $_SESSION['baseURL'];?>
/shows/imprimirHorizontalPequeno/<?php echo $_smarty_tpl->tpl_vars['show']->value->getId();?>
" role="button" target="_blank">Imprimir Padrão 3</a>
            </div>  
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->                       

<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
    atualizaTempos();
    
    $(function() {
        $("#sortable1, #sortable2, #sortable3, #sortable4").sortable({
            connectWith: ".connectedSortable",
            placeholder: "list-group-item list-group-item-warning",
            cache: false,
            stop: function(event, ui) {
                var sortedIDs1 = $("#sortable1").sortable( "toArray" );
                var sortedIDs2 = $("#sortable2").sortable( "toArray" );
                var sortedIDs3 = $("#sortable3").sortable( "toArray" );
                $("#srtb1").val(sortedIDs1.join("#"));
                $("#srtb2").val(sortedIDs2.join("#"));
                $("#srtb3").val(sortedIDs3.join("#"));
                $("#grava").removeClass('hidden');
                $("#msg").removeClass('hidden');
                atualizaTempos();

            }
        }).disableSelection();
    });
    function calculaTempos(elemento) {
        var total = "00:00";
        $(elemento + " li span").each(function(index) {
            horaIni = total.split(':');
            horaSom = $(this).text().split(':');

            horasTotal = parseInt(horaIni[0], 10) + parseInt(horaSom[0], 10);
            minutosTotal = parseInt(horaIni[1], 10) + parseInt(horaSom[1], 10);

            if (minutosTotal >= 60) {
                minutosTotal -= 60;
                horasTotal += 1;
            }
            total = pad(horasTotal,2) + ":" + pad(minutosTotal,2);

        });
        return total;
    }
    
    function atualizaTempos() {
        $("#bloco1 span").text(calculaTempos("#sortable1"));
        $("#bloco2 span").text(calculaTempos("#sortable2"));
        $("#bis span").text(calculaTempos("#sortable3"));    
    }
    
    function preencheZeros(param) {
        var numero = parseInt(param);
        console.log("Parametro:" + numero);
        if (numero > 99) {
            return param;
        } else if (numero > 9) {
            return "0" + param;
        } else {
            return "00" + param;
        }
    }
    function pad(num, size) {
        var s = "000000000" + num;
        return s.substr(s.length-size);
    }
</script>



<?php }} ?>