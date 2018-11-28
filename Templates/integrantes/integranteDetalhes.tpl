{include file="novoCabecalho.tpl" titulo="Detalhes de Integrante" integrantesActive="active"}

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {$integrante->getNome()}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Integrantes</a></li>
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
                        <TD class="label-primary">Nome</TD><TD> {$integrante->getNome()} </TD>
                    </TR>
                    <TR>
                        <TD class="label-primary">Email</TD><TD> {$integrante->getMail()} </TD>
                    </TR>
                    <TR>
                        <TD class="label-primary">Status</TD><TD> {$integrante->getStatus()} </TD>
                    </TR>
                    <TR>
                        <TD class="label-primary">Mudança de Status</TD><TD> 
                            {if $integrante->getStatus() eq 'Ativo'}
                                <a class="btn btn-danger" href= "{$smarty.session.baseURL}/integrantes/status/{$integrante->getId()}1" role="button">Desativar</a>
                            {else}
                                <a class="btn btn-info" href= "{$smarty.session.baseURL}/integrantes/status/{$integrante->getId()}0" role="button">Reativar</a>
                            {/if}
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->                       

{include file="novoRodape.tpl"}


