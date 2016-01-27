{include file="novoCabecalho.tpl" titulo="Lista de Shows" showsActive="active"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Shows
            <small>Lista de Shows</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> Shows</a></li>
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
                        <TH> Local </TH>
                        <TH> Data </TH>
                    </tr>
                </thead>
                <tbody>
                    {foreach $shows as $show}
                        <TR>
                            <TD>{$show->getId()} </TD>
                            <TD><a href="{$smarty.session.baseURL}/shows/detalha/{$show->getId()}">{$show->getLocal()}</a></TD>
                            <TD>{$show->getData()} </TD>
                        </TR>
                    {/foreach}
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Código </TH>
                        <TH> Local </TH>
                        <TH> Data </TH>
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
   
