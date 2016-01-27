<?php /* Smarty version Smarty-3.1.8, created on 2016-01-25 13:55:58
         compiled from ".\Templates\shows\showDetalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285156a0ce5c6c0065-55550148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '589af1ff552e22a141c7e6c63afd5f77359e5a83' => 
    array (
      0 => '.\\Templates\\shows\\showDetalhes.tpl',
      1 => 1453737356,
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
    'bloco1' => 0,
    'bloco' => 0,
    'bloco2' => 0,
    'bis' => 0,
    'prontas' => 0,
    'pronta' => 0,
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
            <div class="col-md-6">

                <div class="box box-solid box-primary">
                    <div class="box-header with-border" id="bloco1">Bloco 1 <span class="badge pull-right bg-light-blue">00:00</span></div>
                    <ul id="sortable1" class="connectedSortable list-group">
                        <?php  $_smarty_tpl->tpl_vars['bloco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bloco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bloco']->key => $_smarty_tpl->tpl_vars['bloco']->value){
$_smarty_tpl->tpl_vars['bloco']->_loop = true;
?>
                            <li class="list-group-item list-group-item-success" id="<?php echo $_smarty_tpl->tpl_vars['bloco']->value->getId();?>
"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['bloco']->value->getDuracao();?>
</span> <?php echo $_smarty_tpl->tpl_vars['bloco']->value->getNome();?>
</li>
                            <?php } ?>                        
                    </ul>
                </div>

                <div class="box box-solid box-primary">
                    <div class="box-header with-border" id="bloco2">Bloco 2 <span class="badge pull-right bg-light-blue">00:00</span></div>
                    <ul id="sortable2" class="connectedSortable list-group">
                        <?php  $_smarty_tpl->tpl_vars['bloco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bloco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bloco2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bloco']->key => $_smarty_tpl->tpl_vars['bloco']->value){
$_smarty_tpl->tpl_vars['bloco']->_loop = true;
?>
                            <li class="list-group-item list-group-item-success" id="<?php echo $_smarty_tpl->tpl_vars['bloco']->value->getId();?>
"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['bloco']->value->getDuracao();?>
</span> <?php echo $_smarty_tpl->tpl_vars['bloco']->value->getNome();?>
</li>
                            <?php } ?>                        
                    </ul>
                </div>

                <div class="box box-solid box-primary">
                    <div class="box-header with-border" id="bis">Bis <span class="badge pull-right bg-light-blue">00:00</span></div>
                    <ul id="sortable3" class="connectedSortable list-group">
                        <?php  $_smarty_tpl->tpl_vars['bloco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bloco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bloco']->key => $_smarty_tpl->tpl_vars['bloco']->value){
$_smarty_tpl->tpl_vars['bloco']->_loop = true;
?>
                            <li class="list-group-item list-group-item-success" id="<?php echo $_smarty_tpl->tpl_vars['bloco']->value->getId();?>
"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['bloco']->value->getDuracao();?>
</span> <?php echo $_smarty_tpl->tpl_vars['bloco']->value->getNome();?>
</li>
                            <?php } ?>                        
                    </ul>
                </div>

            </div>
            <div class="col-md-6">

                <div class="box box-solid box-success">
                    <div class="box-header with-border">Musicas Prontas </div>
                    <ul id="sortable4" class="connectedSortable list-group">
                        <?php  $_smarty_tpl->tpl_vars['pronta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pronta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prontas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pronta']->key => $_smarty_tpl->tpl_vars['pronta']->value){
$_smarty_tpl->tpl_vars['pronta']->_loop = true;
?>
                            <li class="list-group-item list-group-item-success" id="<?php echo $_smarty_tpl->tpl_vars['pronta']->value->getId();?>
"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['pronta']->value->getDuracao();?>
</span> <?php echo $_smarty_tpl->tpl_vars['pronta']->value->getNome();?>
</li>
                            <?php } ?>                        
                    </ul>
                </div>


            </div>  
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->                       

<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
    $(function() {
        $("#sortable1, #sortable2, #sortable3, #sortable4").sortable({
            connectWith: ".connectedSortable",
            placeholder: "list-group-item list-group-item-warning",
            cache: false,
            update: function(event, ui) {
                //Atualiza banco de dados
                var musica = preencheZeros(ui.item[0].id);
                var show = preencheZeros($(".breadcrumb").attr("id"));
                var bloco = this.id.substr(8, 1);
                var posicao = preencheZeros(ui.item.index());
                //console.log("<?php echo $_SESSION['baseURL'];?>
/shows/setlist/1" + show + musica + bloco + posicao);
                $.ajax({
                    url: "<?php echo $_SESSION['baseURL'];?>
/shows/setlist/1" + show + musica + bloco + posicao,
                });
                //Recalcula tempos totais
                $("#bloco1 span").text(calculaTempos("#sortable1"));
                $("#bloco2 span").text(calculaTempos("#sortable2"));
                $("#bis span").text(calculaTempos("#sortable3"));
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
            total = horasTotal + ":" + minutosTotal;

        });
        return total;
    }
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