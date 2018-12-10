{include file="novoCabecalho.tpl" titulo="Log de Operações" logsActive="active"}

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Logs de Operações
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-search"></i> Logs</a></li>
            <li><a href="#">Pesquisar</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box box-primary">
            <div class="box-header with-border">Filtros</div>
            <FORM class="form-horizontal" role="form" data-toggle="validator" method="POST" action="{$smarty.session.baseURL}/log/main">
                <input type="hidden" name="form" value="Sim">
                <TABLE Class="table">
                    <THEAD>
                    </THEAD>
                    <TFOOT>
                    </TFOOT>
                    <TBODY>
                        <TR>
                            <TD class="label-primary" style="width: 30%">Integrante</TD><TD>{$selIntegrantes}</TD>
                        </TR>
                        <TR>
                            <TD class="label-primary">Bandas</TD><TD><input type="text" class="form-control" name="Bandas" value="{$request.Bandas}" /></TD>
                        </TR>
                        <TR>
                            <TD class="label-primary">Músicas</TD><TD><input type="text" class="form-control" name="Musicas" value="{$request.Musicas}" /></TD>
                        </TR>
                        <TR>
                            <TD class="label-primary">Data Inicial</TD><TD>                        
                                <div class="input-group input-append date" id="datePicker">
                                    <input type="text" class="form-control" name="dataInicial" value="{$request.dataInicial}"/>
                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>                            
                            </TD>
                        </TR>
                        <TR>
                            <TD class="label-primary">Data Final</TD><TD>                        
                                <div class="input-group input-append date" id="datePicker1">
                                    <input type="text" class="form-control" name="dataFinal" value="{$request.dataFinal}"/>
                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>                            
                            </TD>
                        </TR>
                        <TR>
                            <TD colspan="2">
                                <input type="submit" class="btn btn-info center-block" value="Pesquisar">
                            </TD>
                        </TR>

                    </TBODY>
                </TABLE>
            </FORM>                    
        </div>
        {if $request.form eq "Sim"}                                
            <div class="box box-primary">
                <div class="box-header with-border">Resultado</div>
                    {if count($logs) gt 0}
                            <TABLE id="tabela1" class="table table-bordered table-striped">
                                <THEAD>
                                    <TR>
                                        <TH>Data</TH>
                                        <TH>Integrante</TH>
                                        <TH>Operação</TH>
                                        <TH>Objeto</TH>
                                        <TH>Música</TH>
                                        <TH>Descrição</TH>
                                    </TR>
                                </THEAD>
                                <TBODY>
                                    {foreach $logs as $log}
                                        <tr>
                                            <TD>{$log->getDatahora()}</TD>
                                            <TD>{$log->getIntegrante()}</TD>
                                            <TD>{$log->getOperacao()}</TD>
                                            <TD>{$log->getObjeto()}</TD>
                                            <TD><A HREF="{$smarty.session.baseURL}/musicas/detalha/{$log->getIdMusica()}">{$log->getMusica()}</A></TD>
                                            <TD>{$log->getTexto()}</TD>
                                        </tr>
                                    {/foreach}
                                </TBODY>
                                <TFOOT>
                                    <TR>
                                        <TH>Data</TH>
                                        <TH>Integrante</TH>
                                        <TH>Operação</TH>
                                        <TH>Objeto</TH>
                                        <TH>Música</TH>
                                        <TH>Descrição</TH>
                                    </TR>
                                </TFOOT>

                            </TABLE>
                    {else}
                        Nenhum resultado encontrado
                    {/if}            
            </div>
        {/if}

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->                       

{include file="novoRodape.tpl"}


<script type="text/javascript">
    $(document).ready(function() {
        $('#datePicker')
                .datepicker({
            format: 'dd/mm/yyyy'
        });
        $('#datePicker1')
                .datepicker({
            format: 'dd/mm/yyyy'
        });
        $.fn.dataTable.moment( 'DD/MM/YYYY' );
        $('#tabela1').dataTable($configuraDataTable);
        var table = $('#tabela1').DataTable();
        table.order( [0 , 'desc'] ).draw();
    });
</script>  