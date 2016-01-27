{include file="novoCabecalho.tpl" titulo="Lista de Músicas" musicasActive="active"}

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
                        <TH> Código </TH>
                        <TH> Nome </TH>
                        <TH> Banda </TH>
                        <TH> Duração </TH>
                        <TH> Status </TH>
                    </tr>
                </thead>
                <tbody>
                    {foreach $musicas as $musica}
                        <TR>
                            <TD>{$musica->getId()} </TD>
                            <TD><a href="{$smarty.session.baseURL}/musicas/detalha/{$musica->getId()}">{$musica->getNome()}</a></TD>
                            <TD>{$musica->getBanda()} </TD>
                            <TD>{$musica->getDuracao()} </TD>
                            <TD class="{$musica->getStatus()->getCor()}">{$musica->getStatus()->getNome()} </TD>
                        </TR>
                    {/foreach}
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Código </TH>
                        <TH> Nome </TH>
                        <TH> Banda </TH>
                        <TH> Duração </TH>
                        <TH> Status </TH>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{include file="novoRodape.tpl"}


<script type="text/javascript">
    $(document).ready(function() {
        $('#tabela1').dataTable($configuraDataTable);
    });
</script>
   
