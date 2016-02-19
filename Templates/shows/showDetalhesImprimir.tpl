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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!-- Content Wrapper. Contains page content -->
        <div>
            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                <div class="row">
                    <div class="col-md-6">

                        <h1>
                            {$show->getLocal()}
                            <small>{$show->getData()}</small>
                        </h1>

                        <div class="box box-solid box-primary">
                            <div class="box-header with-border" id="bloco1">Bloco 1 <span class="badge pull-right bg-light-blue">00:00</span></div>
                            <ul id="sortable1">
                                {foreach $bloco1 as $bloco}
                                    <li class="list-group-item" id="{$bloco->getId()}"><span class="badge">{$bloco->getDuracao()}</span> {$bloco->getNome()}</li>
                                    {/foreach}                        
                            </ul>
                        </div>

                        <div class="box box-solid box-primary">
                            <div class="box-header with-border" id="bloco2">Bloco 2 <span class="badge pull-right bg-light-blue">00:00</span></div>
                            <ul id="sortable2">
                                {foreach $bloco2 as $bloco}
                                    <li class="list-group-item" id="{$bloco->getId()}"><span class="badge">{$bloco->getDuracao()}</span> {$bloco->getNome()}</li>
                                    {/foreach}                        
                            </ul>
                        </div>

                        <div class="box box-solid box-primary">
                            <div class="box-header with-border" id="bis">Bis <span class="badge pull-right bg-light-blue">00:00</span></div>
                            <ul id="sortable3">
                                {foreach $bis as $bloco}
                                    <li class="list-group-item" id="{$bloco->getId()}"><span class="badge">{$bloco->getDuracao()}</span> {$bloco->getNome()}</li>
                                    {/foreach}                        
                            </ul>
                        </div>

                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->                       

    {include file="novoRodape.tpl"}
    
    <script type="text/javascript">
        $("#bloco1 span").text(calculaTempos("#sortable1"));
        $("#bloco2 span").text(calculaTempos("#sortable2"));
        $("#bis span").text(calculaTempos("#sortable3"));

        window.print();
        function calculaTempos(elemento) {
            var total = "00:00";
            $(elemento + " li span").each(function(index) {
                horaIni = total.split(':');
                horaSom = $(this).text().split(':');

                horasTotal = parseInt(horaIni[0], 10) + parseInt(horaSom[0], 10);
                minutosTotal = parseInt(horaIni[1], 10) + parseInt(horaSom[1], 10);

                if (minutosTotal >= 60) {
                    minutosTotal -= 60;
                    horasTotal += 1;
                }
                total = horasTotal + ":" + minutosTotal;

            });
            return total;
        }
    </script>



