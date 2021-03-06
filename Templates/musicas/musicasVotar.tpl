{include file="novoCabecalho.tpl" titulo="Lista de Músicas para Votação" musicasActive="active"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Musicas
            <small>Lista de Músicas para Votação</small>
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
                        {foreach $integrantes as $integ}
                            <TH>{$integ->getNome()}</TH>
                        {/foreach}
                    </tr>
                </thead>
                <tbody>
                    {foreach $musicas as $musica}
                        <TR>
                            <TD><a href="{$smarty.session.baseURL}/musicas/detalha/{$musica->getId()}">{$musica->getNome()}</a></TD>
                            <TD>{$musica->getBanda()} </TD>
                            <TD musica="{$musica->getId()}" class="{$musica->getStatus()->getCor()}">{$musica->getStatus()->getNome()}</TD>
                            {$voto = $musica->getVotos()->getVotos()}

                            {foreach $integrantes as $integ}
                                {if $voto[$integ->getId()] eq ""}
                                    <TD class=""> - </TD>
                                {else}
                                    <TD class="">{$voto[$integ->getId()]} </TD>
                                {/if}
                            {/foreach}
                        </TR>
                    {/foreach}
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Nome </TH>
                        <TH> Banda </TH>
                        <TH> Status </TH>
                        {foreach $integrantes as $integ}
                            <TH>{$integ->getNome()}</TH>
                        {/foreach}
                    </tr>
                </tfoot>
            </table>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{include file="novoRodape.tpl"}


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
            url: "{$smarty.session.baseURL}/musicas/procVoto/1" + musica + integrante + voto,
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

