{include file="novoCabecalho.tpl" titulo="Lista de Bandas" bandasActive="active"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Bandas
            <small>Lista de Bandas</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-headphones"></i> Bandas</a></li>
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
                        <TH> Músicas </TH>
                    </tr>
                </thead>
                <tbody>
                    {foreach $bandas as $banda}
                        <TR>
                            <TD>{$banda->getId()} </TD>
                            <TD>{$banda->getNome()} </TD>
                            <TD>{$banda->getNumMusicas()} </TD>
                        </TR>
                    {/foreach}
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Código </TH>
                        <TH> Nome </TH>
                        <TH> Músicas </TH>
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
   
