{include file="novoCabecalho.tpl" titulo="Lista de Equipamentos"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Circuitos
            <small>Lista de Contratos de Garantia</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li class="active">Contratos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <div class="box">
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> ID </TH>
                        <TH> Descrição </TH>
                        <TH> Local </TH>
                        <TH> Contrato </TH>
                        <TH> Início </TH>
                        <TH> Términio </TH>
                        <TH> Fiscais </TH>
                    </tr>
                </thead>
                <tbody>
                    {foreach $contratos as $contrato}
                        <TR>
                            <TD><a href="{$smarty.session.baseURL}/cadastros/formIncluirContrato/{$contrato->getId()}">{$contrato->getId()}</a></TD>
                            <TD>{$contrato->getDescricao()} </TD>
                            <TD>{$contrato->getLocal()->getNome()} </TD>
                            <TD>{$contrato->getContrato()} </TD>
                            <TD>{$contrato->getDataInicio()} </TD>
                            <TD>{$contrato->getDataFim()} </TD>
                            <TD>{$contrato->getFiscais()} </TD>
                        </TR>
                    {/foreach}
                </tbody>
                <tfoot>
                    <tr>
                        <TH> ID </TH>
                        <TH> Descrição </TH>
                        <TH> Local </TH>
                        <TH> Contrato </TH>
                        <TH> Início </TH>
                        <TH> Términio </TH>
                        <TH> Fiscais </TH>
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
        $("#_menuAcoes").html($("#menuAcoes").html());
    });
</script>

<div class="hidden">
    <DIV ID="menuAcoes">
        <li>
            <a class="btn btn-block btn-primary" href="{$smarty.session.baseURL}/cadastros/formIncluirContrato">Adicionar Contrato</a>
        </li>
    </DIV>
</div>    
