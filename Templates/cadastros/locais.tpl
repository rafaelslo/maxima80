{include file="novoCabecalho.tpl" titulo="Lista de Equipamentos"}

<style>
.tree {
    min-height:20px;
    padding:19px;
    margin-bottom:20px;
    background-color:#fbfbfb;
    border:1px solid #999;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;


    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05)
}
.tree li {
    list-style-type:none;
    margin:0;
    padding:10px 5px 0 5px;
    position:relative
}
.tree li::before, .tree li::after {
    content:'';
    left:-20px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #999;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #999;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #999;
    border-radius:5px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none
}
.tree li.parent_li>span {
    cursor:pointer
}
.tree>ul>li::before, .tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:30px
}
.tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
    background:#eee;
    border:1px solid #94a0b4;
    color:#000
}
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Locais
            <small>Lista de Locais</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li class="active">Locais</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> ID </TH>
                        <TH> Sigla </TH>
                        <TH> Tom </TH>
                        <TH> Nome </TH>
                        <TH> Complemento </TH>
                        <TH> CNPJ </TH>
                        <TH> Responsável </TH>
                    </tr>
                </thead>
                <tbody>
                    {foreach $locais as $local}
                        <TR>
                            <TD><a href="{$smarty.session.baseURL}/cadastros/formIncluirLocal/{$local->getId()}">{$local->getId()}</a></TD>
                            <TD>{$local->getSigla()} </TD>
                            <TD>{$local->getCodTom()} </TD>
                            <TD>{$local->getNome()} </TD>
                            <TD>{$local->getComplemento()} </TD>
                            <TD>{$local->getCnpj()} </TD>
                            <TD>{$local->getResponsavel()} </TD>
                        </TR>
                    {/foreach}        
                </tbody>
                <tfoot>
                    <tr>
                        <TH> ID </TH>
                        <TH> Sigla </TH>
                        <TH> Tom </TH>
                        <TH> Nome </TH>
                        <TH> Complemento </TH>
                        <TH> CNPJ </TH>
                        <TH> Responsável </TH>
                    </tr>
                </tfoot>
            </table>
                
                {$tree}
       
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{include file="novoRodape.tpl"}


<script type="text/javascript">
    $(document).ready(function() {
        $("#_menuAcoes").html($("#menuAcoes").html());
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
        }
        e.stopPropagation();
    });        
    });
</script>

<div class="hidden">
    <DIV ID="menuAcoes">
        <li>
            <a class="btn btn-block btn-primary" href="{$smarty.session.baseURL}/cadastros/formIncluirLocal">Adicionar Local</a>
        </li>
    </DIV>
</div>    
