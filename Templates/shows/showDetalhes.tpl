{include file="novoCabecalho.tpl" titulo="Detalhes de Show" showsActive="active"}

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {$show->getLocal()}
            <small>{$show->getData()}</small>
        </h1>
        <ol class="breadcrumb" id="{$show->getId()}">
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
                        {foreach $bloco1 as $bloco}
                            <li class="list-group-item list-group-item-success" id="{$bloco->getId()}"><span class="badge">{$bloco->getDuracao()}</span> {$bloco->getNome()}</li>
                            {/foreach}                        
                    </ul>
                </div>

                <div class="box box-solid box-primary">
                    <div class="box-header with-border" id="bloco2">Bloco 2 <span class="badge pull-right bg-light-blue">00:00</span></div>
                    <ul id="sortable2" class="connectedSortable list-group">
                        {foreach $bloco2 as $bloco}
                            <li class="list-group-item list-group-item-success" id="{$bloco->getId()}"><span class="badge">{$bloco->getDuracao()}</span> {$bloco->getNome()}</li>
                            {/foreach}                        
                    </ul>
                </div>

                <div class="box box-solid box-primary">
                    <div class="box-header with-border" id="bis">Bis <span class="badge pull-right bg-light-blue">00:00</span></div>
                    <ul id="sortable3" class="connectedSortable list-group">
                        {foreach $bis as $bloco}
                            <li class="list-group-item list-group-item-success" id="{$bloco->getId()}"><span class="badge">{$bloco->getDuracao()}</span> {$bloco->getNome()}</li>
                            {/foreach}                        
                    </ul>
                </div>

            </div>
            <div class="col-md-6">

                <div class="box box-solid box-success">
                    <div class="box-header with-border">Musicas Prontas </div>
                    <ul id="sortable4" class="connectedSortable list-group">
                        {foreach $prontas as $pronta}
                            <li class="list-group-item list-group-item-success" id="{$pronta->getId()}"><span class="badge">{$pronta->getDuracao()}</span> {$pronta->getNome()}</li>
                            {/foreach}                        
                    </ul>
                </div>
                <BR>
                <div class="btn-danger panel panel-heading panel-title hidden" id="msg">Projeto não está salvo!!! </div>
                <form method="POST" action="{$smarty.session.baseURL}/shows/gravaSetlist">
                    <input type="hidden" name="id_show" value="{$show->getId()}">
                    <input type="hidden" name="srtb1" id="srtb1">
                    <input type="hidden" name="srtb2" id="srtb2">
                    <input type="hidden" name="srtb3" id="srtb3">
                    <button class="btn btn-default btn-block hidden" type="submit" id="grava">Gravar Alterações</button>
                </form>
                <BR>
                <a class="btn btn-default btn-block" href= "{$smarty.session.baseURL}/shows/imprimir/{$show->getId()}" role="button" target="_blank">Imprimir</a>
            </div>  
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->                       

{include file="novoRodape.tpl"}

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
            total = horasTotal + ":" + minutosTotal;

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
</script>



