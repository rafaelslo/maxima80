{include file="novoCabecalho.tpl" titulo="Lista de Equipamentos"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contratos
            <small>{if $contrato->getId() eq ''}Adicionar{else}Alterar{/if} Contrato de Garantia</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li><a href="{$smarty.session.baseURL}/cadastros/contratos">Contratos</a></li>
            <li class="active">{if $contrato->getId() eq ''}Adicionar{else}Alterar{/if}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="{$smarty.session.baseURL}/cadastros/incluirContrato">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="inputCodigo" name="inputCodigo" value="{$contrato->getId()}">
                        <input type="text" class="form-control" id="inputDescricao" name="inputDescricao" value="{$contrato->getDescricao()}" placeholder="Descrição da garantia">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputLocal" class="col-sm-2 control-label">Local</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputLocal" name="inputLocal" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputContrato" class="col-sm-2 control-label">Contrato</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputContrato" name="inputContrato" value="{$contrato->getContrato()}" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputInicio" class="col-sm-2 control-label">Data Inicio</label>
                    <div class="col-sm-10">
                        <input type="date" required class="form-control" id="InputInicio" name="InputInicio" value="{$contrato->getDataInicio()}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFim" class="col-sm-2 control-label">Data Término</label>
                    <div class="col-sm-10">
                        <input type="date" required class="form-control" id="inputFim" name="inputFim" value="{$contrato->getDataFim()}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFiscais" class="col-sm-2 control-label">Fiscais do Contrato</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" required class="form-control" id="inputFiscais" name="inputFiscais" placeholder="Informe os nomes dos fiscais">{$contrato->getFiscais()}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputOBS" class="col-sm-2 control-label">Observações</label>
                    <div class="col-sm-10">
                        <input type="area" required class="form-control" id="inputOBS" name="inputOBS" value="{$contrato->getObservacaoChamado()}" placeholder="Orientações para a abertura do s chamados">
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="{if $contrato->getId() eq ''}Adicionar{else}Alterar{/if}">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{include file="novoRodape.tpl"}
