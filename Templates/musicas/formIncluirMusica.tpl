{include file="novoCabecalho.tpl" titulo="Incluir Musica" musicasActive="active"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Música
            <small>Incluir Música</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-music"></i> Músicas</a></li>
            <li class="active">Incluir</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="{$smarty.session.baseURL}/musicas/incluirMusica">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputDescricao" class="col-sm-2 control-label">Título</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputDescricao" name="inputDescricao" placeholder="Título da Música">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputBanda" class="col-sm-2 control-label">Banda</label>
                    <div class="col-sm-10">
                        {$selBandas}
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDuracao" class="col-sm-2 control-label">Duração</label>
                    <div class="col-sm-10">
                        <input type="time" required class="form-control" id="inputDuracao" name="inputDuracao"  placeholder="00:00">
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
