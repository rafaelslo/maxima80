{include file="novoCabecalho.tpl" titulo="Incluir Recurso" musicasActive="active"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Música
            <small>Incluir Recurso</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-music"></i> Músicas</a></li>
            <li class="active">Incluir Recurso</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="{$smarty.session.baseURL}/musicas/incluirRecurso">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputTipo" class="col-sm-2 control-label">Tipo</label>
                    <input type="hidden" id="inputId" name="inputId" value="{$musica}">
                    <div class="col-sm-10">
                        <select class="form-control" id="inputTipo" name="inputTipo">
                            <option value="1">Video Youtube (apenas as letras que identificam o video)</option>
                            <option value="2">Texto (letras, Tablaturas, etc..)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputRecurso" class="col-sm-2 control-label">Recurso</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="inputRecurso" name="inputRecurso" rows="10" required></textarea>
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
