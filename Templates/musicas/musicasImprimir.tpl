<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <TITLE>..:: {$titulo} ::..</TITLE>
        <link rel="icon" href="{$smarty.session.baseURL}/maxima80.png" type="image/x-icon">
        <link rel="shortcut icon" href="{$smarty.session.baseURL}/maxima80.png" type="image/x-icon">

        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="{$smarty.session.baseURL}/Templates/includes/bootstrap/css/bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{$smarty.session.baseURL}/Templates/includes/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="{$smarty.session.baseURL}/Templates/includes/plugins/iCheck/square/blue.css">
        <!-- Folha de Estilos para o datatables -->
        <link rel="stylesheet" href="{$smarty.session.baseURL}/Templates/includes/plugins/datatables/dataTables.bootstrap.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!-- Main content -->
        <section class="content">

            <!-- Your Page Content Here -->
            <div class="box">
                <table id="tabela1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <TH> Nome </TH>
                            <TH> Banda </TH>
                            <TH> Duração </TH>
                            <TH> Status </TH>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $musicas as $musica}
                            <TR>
                                <TD>{$musica->getNome()}</TD>
                                <TD>{$musica->getBanda()} </TD>
                                <TD>{$musica->getDuracao()} </TD>
                                <TD class="{$musica->getStatus()->getCor()}">{$musica->getStatus()->getNome()} </TD>
                            </TR>
                        {/foreach}
                    </tbody>
                    <tfoot>
                        <tr>
                            <TH> Nome </TH>
                            <TH> Banda </TH>
                            <TH> Duração </TH>
                            <TH> Status </TH>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section><!-- /.content -->

        {include file="novoRodape.tpl"}


        <script type="text/javascript">
            $(document).ready(function() {
                $('#tabela1').dataTable($configuraDataTablePrint);
            });
        </script>

