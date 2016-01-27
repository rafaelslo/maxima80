{include file="novoCabecalho.tpl" titulo="Lista de Equipamentos"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Circuitos
            <small>{if $circuito->getCodigo() eq ''}Adicionar{else}Alterar{/if} Circuito</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li><a href="{$smarty.session.baseURL}/cadastros/circuitos">Circuitos</a></li>
            <li class="active">{if $circuito->getCodigo() eq ''}Adicionar{else}Alterar{/if}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="{$smarty.session.baseURL}/cadastros/incluirCircuito">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputCodigo" class="col-sm-2 control-label">Código</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCodigo" name="inputCodigo" value="{$circuito->getCodigo()}" placeholder="Código do Circuito" {if $circuito->getCodigo() eq ''}required{else}readonly{/if}>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputDescricao" name="inputDescricao" value="{$circuito->getDesignacao()}" placeholder="Descreva o circuito">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputVelocidade" class="col-sm-2 control-label">Velocidade</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputVelocidade" name="inputVelocidade" value="{$circuito->getVelocidade()}" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputOperadora" class="col-sm-2 control-label">Operadora</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputOperadora" name="inputOperadora" value="{$circuito->getOperadora()}" placeholder="Oi, Vivo, GVT, etc...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTecnologia" class="col-sm-2 control-label">Tecnologia</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputTecnologia" name="inputTecnologia" value="{$circuito->getTecnologia()}" placeholder="ATM, FrameRelay">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputIP" class="col-sm-2 control-label">IP Wan</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputWan" name="inputWan" value="{$circuito->getIpWAN()}" placeholder="Endereço IP do Roteador">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="inputUrbano" {if $circuito->getUrbano() eq 1}checked{/if}> Urbano?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="inputProprio" {if $circuito->getProprio() eq 1}checked{/if}> Próprio?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="inputLatencia" {if $circuito->getAltaLatencia() eq 1}checked{/if}> Alta Latência?
                            </label>
                        </div>
                    </div>
                </div>
             <div class="form-group">
                    <label for="inputCusto" class="col-sm-2 control-label">Custo Mensal (R$)</label>
                    <div class="col-sm-10">
                        <input type="number" required class="form-control" id="inputCusto" name="inputCusto" value="{$circuito->getCustoMensal()}" >
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="{if $circuito->getCodigo() eq ''}Adicionar{else}Alterar{/if}">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{include file="novoRodape.tpl"}
