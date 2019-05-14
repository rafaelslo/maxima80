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
        <style type="text/css">
            @page { 
                size: A4 landscape;
            }
            .coluna {    
                column-count: 2;
                -webkit-column-count: 2;
                -webkit-column-gap: 0.25in;
                -webkit-column-rule-width : 1px;
                -webkit-column-rule-style : solid;
                -webkit-column-rule-color : #eee;
            }
            h2 {
                column-span: all;
                text-align: center;
            }
            .padrao3 {
                border: none;
                font-family: "Arial Black";
                font-style: bold;
                font-size: 12;                
                padding-top: 5px !important;
                padding-bottom: 5px !important;
                
            }
            .direita {
                text-align: right;
            }
        </style>
    </head>
    <body>

        <!-- Content Wrapper. Contains page content -->
        <div class="coluna page" id="coluna">
            <h2>
                {$show->getLocal()}<BR>
                <small>{$show->getData()}</small>
            </h2>
                <ul id="sortable1">
                    {foreach $bloco1 as $bloco}
                        <li class="list-group-item padrao3" id="{$bloco->getId()}">
                            <!-- <span class="badge">{$bloco->getDuracao()}</span> -->
                            {foreach $bloco->getInstrumental()->getInstrumental() as $inst}
                                <img height="30" width="30" src="{$smarty.session.baseURL}/Templates/img/{$inst->getInstrumento()->getIcone()}" title="{$inst->getIntegrante()->getNome()}">&nbsp;
                            {/foreach}
                            {$bloco->getNome()}
                        </li>
                    {/foreach}                        
                    <li class="list-group-item padrao3"><hr style="border-top: 1px solid #8c8b8b"></hr></li>                            
                    {foreach $bloco2 as $bloco}
                        <li class="list-group-item padrao3" id="{$bloco->getId()}">
                            <!-- <span class="badge">{$bloco->getDuracao()}</span> -->
                            {foreach $bloco->getInstrumental()->getInstrumental() as $inst}
                                <img height="30" width="30" src="{$smarty.session.baseURL}/Templates/img/{$inst->getInstrumento()->getIcone()}" title="{$inst->getIntegrante()->getNome()}">&nbsp;
                            {/foreach}
                            {$bloco->getNome()}
                        </li>
                    {/foreach}                        
                    <li class="list-group-item padrao3"><hr style="border-top: 1px solid #8c8b8b"></hr></li>                            
                    {foreach $bis as $bloco}
                        <li class="list-group-item padrao3" id="{$bloco->getId()}">
                            <!-- <span class="badge">{$bloco->getDuracao()}</span> -->
                            {foreach $bloco->getInstrumental()->getInstrumental() as $inst}
                                <img height="30" width="30" src="{$smarty.session.baseURL}/Templates/img/{$inst->getInstrumento()->getIcone()}" title="{$inst->getIntegrante()->getNome()}">&nbsp;
                            {/foreach}
                            {$bloco->getNome()}
                        </li>
                    {/foreach}                        


                </ul>
        </div><!-- /.content-wrapper -->                       

    {include file="novoRodape.tpl"}
    
    <script type="text/javascript">
        $(document).ready(function() {        
            $(".padrao3").each(function(index) {
                if($(this).prop("offsetLeft")>100) {
                    $(this).addClass("direita");
                }
            });
        window.print();            
        });
    </script>



