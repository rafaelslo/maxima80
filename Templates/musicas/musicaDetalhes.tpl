{include file="novoCabecalho.tpl" titulo="Detalhes de Música" musicasActive="active"}

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {$musica->getNome()}
            <small>{$musica->getBanda()}</small>
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
                        <TD class="label-primary">Duracao</TD><TD> {$musica->getDuracao()} </TD>
                    </TR>
                    <TR>
                        <TD class="label-primary">Status</TD><TD class="{$musica->getStatus()->getCor()}"> {$musica->getStatus()->getNome()} </TD>
                    </TR>
                    <TR>
                        <TD class="label-primary">Mudança de Status</TD><TD> {include file="musicas/musicasAcoes.tpl" acao="{$musica->getStatus()->getNome()}" id="{$musica->getId()}"} </TD>
                    </TR>
                    {if $musica->podeApagar()}
                        <TR>
                            <TD class="label-primary">Ações</TD><TD> <a class="btn btn-danger" href= "{$smarty.session.baseURL}/musicas/apagarMusica/{$musica->getId()}" role="button">Apagar Música</a> </TD>
                        </TR>
                    {/if}

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
                        {foreach $musica->getVotos()->getVotos() as $voto}
                            <TD class="">{$voto} </TD>
                            {/foreach}
                    </TR>
                </TBODY>
            </TABLE>
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">Recursos <a class="btn btn-primary btn-sm pull-right" href= "{$smarty.session.baseURL}/musicas/formIncluirRecurso/{$musica->getId()}" role="button">Adicionar Recurso</a></div>
            {foreach $musica->getRecursos() as $recurso}
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Adicionado em {$recurso->getData()} por {$recurso->getIntegrante()}</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <a class="btn btn-danger btn-sm" href= "{$smarty.session.baseURL}/musicas/removerRecurso/{$recurso->getId()}" role="button">Remover Recurso</a>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        {if $recurso->getTipo() eq '1'}
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{$recurso->getRecurso()}" allowfullscreen></iframe>
                            </div> 
                        {else}
                            <textarea class="form-control" rows="10" readonly>{$recurso->getRecurso()}</textarea>
                        {/if}  </div><!-- /.box-body -->
                </div><!-- /.box -->
            {/foreach}
        </div>


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->                       

{include file="novoRodape.tpl"}

<script type="text/javascript">
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



