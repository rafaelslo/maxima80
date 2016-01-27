{include file="novoCabecalho.tpl" titulo="Incluir Show" showsActive="active"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Show
            <small>Incluir Show</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> Shows</a></li>
            <li class="active">Incluir</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <form class="form-horizontal" role="form" data-toggle="validator" method="POST" action="{$smarty.session.baseURL}/shows/incluirShow">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputLocal" class="col-sm-2 control-label">Local</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="inputLocal" name="inputLocal" placeholder="Local do Show">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputData" class="col-sm-2 control-label">Data</label>
                    <div class="col-sm-10">
                        <div class="input-group input-append date" id="datePicker">
                            <input type="text" required class="form-control" name="date" />
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#datePicker')
                .datepicker({
            format: 'dd/mm/yyyy'
        });
    });
</script>        