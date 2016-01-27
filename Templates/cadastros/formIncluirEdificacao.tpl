{include file="novoCabecalho.tpl" titulo="Lista de Equipamentos"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Circuitos
            <small>{if $edificacao->getSigla() eq ''}Adicionar{else}Alterar{/if} Edificação</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li><a href="{$smarty.session.baseURL}/cadastros/edificacoes">Edificação</a></li>
            <li class="active">{if $edificacao->getSigla() eq ''}Adicionar{else}Alterar{/if}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="{$smarty.session.baseURL}/cadastros/incluirEdificacao">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputCodigo" class="col-sm-2 control-label">Sigla</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCodigo" name="inputSigla" value="{$edificacao->getSigla()}" placeholder="Sigla da Edificação" {if $edificacao->getSigla() eq ''}required{else}disabled{/if}>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputDescricao" name="inputDescricao" value="{$edificacao->getDescricao()}" placeholder="Descreva a edificação">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEndereco" class="col-sm-2 control-label">Endereço</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEndereco" name="inputEndereco" value="{$edificacao->getEndereco()}" placeholder="Endereço da edificação">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputCidade" class="col-sm-2 control-label">Cidade</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputCidade" name="inputCidade" value="{$edificacao->getCidade()}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUF" class="col-sm-2 control-label">UF</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputUF" name="inputUF" value="{$edificacao->getUf()}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputCEP" class="col-sm-2 control-label">CEP</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputCEP" name="inputCEP" value="{$edificacao->getCep()}">
                    </div>
                </div>
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="{if $edificacao->getSigla() eq ''}Adicionar{else}Alterar{/if}">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{include file="novoRodape.tpl"}
