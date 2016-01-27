{include file="novoCabecalho.tpl" titulo="Lista de Equipamentos"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edificações
            <small>Lista de Edificações</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li class="active">Edificações</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <div class="box">
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> Sigla </TH>
                        <TH> Descrição </TH>
                        <TH> Cidade </TH>
                        <TH> UF </TH>
                    </tr>
                </thead>
                <tbody>
                    {foreach $edificacoes as $edif}
                        <TR>
                            <TD><a href="{$smarty.session.baseURL}/cadastros/formIncluirEdificacao/{$edif->getSigla()}">{$edif->getSigla()}</a></TD>
                            <TD>{$edif->getDescricao()} </TD>
                            <TD>{$edif->getCidade()} </TD>
                            <TD>{$edif->getUf()} </TD>
                        </TR>
                    {/foreach}
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Sigla </TH>
                        <TH> Descrição </TH>
                        <TH> Cidade </TH>
                        <TH> UF </TH>
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
            <a class="btn btn-block btn-primary" href="{$smarty.session.baseURL}/cadastros/formIncluirEdificacao">Adicionar Edificação</a>
        </li>
    </DIV>
</div>


