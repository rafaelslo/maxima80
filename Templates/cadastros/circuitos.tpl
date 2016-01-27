{include file="novoCabecalho.tpl" titulo="Lista de Equipamentos"}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Circuitos
            <small>Lista de circuitos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-table"></i> Cadastros</a></li>
            <li class="active">Circuitos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <div class="box">
            <table id="tabela1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <TH> Código </TH>
                        <TH> Designação </TH>
                        <TH> Velocidade (kbps) </TH>
                        <TH> Tecnologia </TH>
                        <TH> IP WAN </TH>
                        <TH> Urbano? </TH>
                        <TH> Próprio? </TH>
                        <TH> Alta Latência? </TH>
                        <TH> Custo Mensal (R$) </TH>
                    </tr>
                </thead>
                <tbody>
                    {foreach $circuitos as $circuito}
                        <TR>
                            <TD><a href="{$smarty.session.baseURL}/cadastros/formIncluirCircuito/{$circuito->getCodigo()}">{$circuito->getCodigo()}</a></TD>
                            <TD>{$circuito->getDesignacao()} </TD>
                            <TD>{$circuito->getVelocidade()} </TD>
                            <TD>{$circuito->getTecnologia()} </TD>
                            <TD>{$circuito->getIpWan()} </TD>
                            <TD>{if $circuito->getUrbano() eq '1'}Sim{else}Não{/if} </TD>
                            <TD>{if $circuito->getProprio() eq '1'}Sim{else}Não{/if} </TD>
                            <TD>{if $circuito->getAltaLatencia() eq '1'}Sim{else}Não{/if} </TD>
                            <TD>{$circuito->getCustoMensal()} </TD>
                        </TR>
                    {/foreach}
                </tbody>
                <tfoot>
                    <tr>
                        <TH> Código </TH>
                        <TH> Designação </TH>
                        <TH> Velocidade (kbps) </TH>
                        <TH> Tecnologia </TH>
                        <TH> IP WAN </TH>
                        <TH> Urbano? </TH>
                        <TH> Próprio? </TH>
                        <TH> Alta Latência? </TH>
                        <TH> Custo Mensal (R$) </TH>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


{include file="novoRodape.tpl"}


<script type="text/javascript">
    $(document).ready(function() {
        $('#tabela1').dataTable($configuraDataTable);
        $("#_menuAcoes").html($("#menuAcoes").html());
    });
</script>

<div class="hidden">
    <DIV ID="menuAcoes">
        <li>
            <a class="btn btn-block btn-primary" href="{$smarty.session.baseURL}/cadastros/formIncluirCircuito">Adicionar Circuito</a>
        </li>
    </DIV>
</div>    
<!-- TODO: remover. Era apenas teste 
<button type="button" class="btn btn-block btn-primary " data-toggle="modal" data-target="#myModal">Adicionar Circuito</button>
-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Adicional Circuito</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" required class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Sign in</button>
                    </div><!-- /.box-footer -->
                </form>        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Adicionar</button>
            </div>
        </div>
    </div>
</div>    
