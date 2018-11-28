{include file="novoCabecalho.tpl" titulo="Lista de Bandas" integrantesActive="active"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Bandas
            <small>Lista de Integrantes</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Integrantes</a></li>
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
                        <TH> e-mail </TH>
                        <TH> Status </TH>
                    </tr>
                </thead>
                <tbody>
                    {foreach $integrantes as $integrante}
                        <TR>
                            <TD><a href="{$smarty.session.baseURL}/integrantes/detalha/{$integrante->getId()}">{$integrante->getNome()}</a></TD>
                            <TD>{$integrante->getMail()} </TD>
                            <TD>{$integrante->getStatus()} </TD>
                        </TR>
                    {/foreach}
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Nome </TH>
                        <TH> e-mail </TH>
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
   
