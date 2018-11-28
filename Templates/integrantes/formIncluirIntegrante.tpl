{include file="novoCabecalho.tpl" titulo="Incluir Integrante" integrantesActive="active"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Integrante
            <small>Incluir Integrante</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Integrantes</a></li>
            <li class="active">Incluir</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="{$smarty.session.baseURL}/integrantes/incluirIntegrante">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputNome" name="inputNome" placeholder="Nome do Integrante">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMail" class="col-sm-2 control-label">e-Mail</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputMail" name="inputMail" placeholder="eMail do Integrante">
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
