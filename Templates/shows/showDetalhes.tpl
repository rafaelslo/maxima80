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


            </div>  
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->                       

{include file="novoRodape.tpl"}

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
                //console.log("{$smarty.session.baseURL}/shows/setlist/1" + show + musica + bloco + posicao);
                $.ajax({
                    url: "{$smarty.session.baseURL}/shows/setlist/1" + show + musica + bloco + posicao,
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



