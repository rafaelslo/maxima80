{include file="novoCabecalho.tpl" titulo="Lista de Equipamentos"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Locais
            <small>{if $local->getId() eq ''}Adicionar{else}Alterar{/if} Local</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li><a href="{$smarty.session.baseURL}/cadastros/locais">Locais</a></li>
            <li class="active">{if $local->getId() eq ''}Adicionar{else}Alterar{/if}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="{$smarty.session.baseURL}/cadastros/incluirLocal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputCodigo" class="col-sm-2 control-label">Código</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCodigo" name="inputCodigo" value="{$local->getId()}" placeholder="Código do Circuito" {if $local->getId() eq ''}required{else}readonly{/if}>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputSigla" class="col-sm-2 control-label">Sigla</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputSigla" name="inputSigla" value="{$local->getSigla()}" placeholder="Sigla do local">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTpLocal" class="col-sm-2 control-label">Tipo de Local</label>
                    <div class="col-sm-10">
                        {$selTpLocais}
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTom" class="col-sm-2 control-label">Código TOM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTom" name="inputTom" value="{$local->getCodTom()}" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputDescricao" name="inputDescricao" value="{$local->getNome()}" placeholder="Descreva o local">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputCNPJ" class="col-sm-2 control-label">CNPJ</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputCNPJ" name="inputCNPJ" value="{$local->getCnpj()}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputResp" class="col-sm-2 control-label">Responsável</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputResp" name="inputResp" value="{$local->getResponsavel()}">
                    </div>
                </div>                <div class="form-group">
                    <label for="inputPai" class="col-sm-2 control-label">Unidade Pai</label>
                    <div class="col-sm-10">
                        <input type="number" required readonly class="form-control" id="inputPai" name="inputPai" value="{$local->getLocalAcimaId()}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="inputEquipamentos" {if $local->getPermiteVincularEquipamento() eq 1}checked{/if}> Permite alocar equipamentos?
                            </label>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="{if $local->getId() eq ''}Adicionar{else}Alterar{/if}">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{include file="novoRodape.tpl"}
