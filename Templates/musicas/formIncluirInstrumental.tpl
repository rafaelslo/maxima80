{include file="novoCabecalho.tpl" titulo="Incluir Instrumental" musicasActive="active"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Música
            <small>Incluir Instrumental</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-music"></i> Músicas</a></li>
            <li class="active">Incluir Instrumental</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="{$smarty.session.baseURL}/musicas/incluirInstrumental">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputIntegrante" class="col-sm-2 control-label">Integrante</label>
                    <input type="hidden" id="inputId" name="inputId" value="{$musica}">
                    <div class="col-sm-10">
                        <select class="form-control" id="inputIntegrante" name="inputIntegrante">
                            {foreach $integrantes->getIntegrantes() as $integ}
                                    <option value="{$integ->getId()}">{$integ->getNome()}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputInstrumento" class="col-sm-2 control-label">Instrumento</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="inputInstrumento" name="inputInstrumento">
                            {foreach $instrumentos->getInstrumentos() as $inst}
                                    <option value="{$inst->getId()}">{$inst->getNome()}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" value="Adicionar">
            </div><!-- /.box-footer -->
        </form>        

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{include file="novoRodape.tpl"}
