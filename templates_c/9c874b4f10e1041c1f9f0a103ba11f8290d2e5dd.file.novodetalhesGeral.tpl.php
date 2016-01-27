<?php /* Smarty version Smarty-3.1.8, created on 2015-10-21 14:08:13
         compiled from ".\templates\detalhes\novodetalhesGeral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232035627b86df28034-18761794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c874b4f10e1041c1f9f0a103ba11f8290d2e5dd' => 
    array (
      0 => '.\\templates\\detalhes\\novodetalhesGeral.tpl',
      1 => 1375388952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232035627b86df28034-18761794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'raiz' => 0,
    'ide' => 0,
    'item' => 0,
    'interf' => 0,
    'garantia' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5627b86f82fe31_93178681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627b86f82fe31_93178681')) {function content_5627b86f82fe31_93178681($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tab'=>"2",'titulo'=>"Detalhes de Equipamento"), 0);?>

<DIV class="ui-widget-header ui-corner-top">Detalhes de Equipamento</DIV>
<DIV class="ui-widget-content">
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['raiz']->value)."/detalhesGeral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Características (<?php echo count($_smarty_tpl->tpl_vars['ide']->value->getCaracteristicas()->getCrEquipamentos());?>
)</a></li>
            <li><a href="#tabs-2">Histórico (<?php echo count($_smarty_tpl->tpl_vars['ide']->value->getHistoricos()->getHistoricos());?>
)</a></li>
            <li><a href="#tabs-3">Chamados (<?php echo count($_smarty_tpl->tpl_vars['ide']->value->getChamados()->getChamados());?>
)</a></li>
            <li><a href="#tabs-4">Coletas WMI</a></li>
            <li><a href="#tabs-5">Interfaces (<?php echo count($_smarty_tpl->tpl_vars['ide']->value->getInterfaces()->getInterfacesRede());?>
)</a></li>
            <li><a href="#tabs-6">Controles</a></li>
            <li><a href="#tabs-7">Contratos (<?php echo count($_smarty_tpl->tpl_vars['ide']->value->getGarantias()->getGarantias());?>
)</a></li>
        </ul>
        <div id="tabs-1">
            <TABLE class="tabelaSimples">
                <TBODY>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ide']->value->getCaracteristicas()->getCrEquipamentos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <TR>
                        <TD Class=ui-state-default><?php echo $_smarty_tpl->tpl_vars['item']->value->getCaracteristica()->getNm();?>
</TD>
                        <TD><?php if ($_smarty_tpl->tpl_vars['item']->value->getCaracteristica()->getBooldescr()=="1"){?><?php echo $_smarty_tpl->tpl_vars['item']->value->getDescricao();?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value->getCaracteristica()->getBoolvalor()=="1"){?><?php echo $_smarty_tpl->tpl_vars['item']->value->getValor();?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['item']->value->getCaracteristica()->getUnidade();?>
 </TD>
                    </TR>
                    <?php } ?>
                </TBODY>
            </TABLE>
        </div>
        <div id="tabs-2">
            <TABLE id='tabela1'>
                <THEAD>
                    <TR class="titulo">
                        <TH colspan=10> (<?php echo count($_smarty_tpl->tpl_vars['ide']->value->getHistoricos()->getHistoricos());?>
) Registros de Histórico </TH>
                    </TR>
                    <TR>
                        <TH>Data/hora</TH>
                        <TH>Operação</TH>
                        <TH>Responsável</TH>
                        <TH>IP</TH>
                        <TH>Descrição</TH>
                    </TR>
                </THEAD>
                <TBODY>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ide']->value->getHistoricos()->getHistoricos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <TR>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getDtalteracao();?>
 </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getTipoalteracao();?>
</TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getCpfalteracao();?>
 </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getIpalteracao();?>
 </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getAlteracoes();?>
</TD>
                    </TR>
                    <?php } ?>
                </TBODY>
            </TABLE>

        </div>
        <div id="tabs-3">
            <TABLE id='tabela2'>
                <THEAD>
                    <TR class="titulo">
                        <TH colspan=10> (<?php echo count($_smarty_tpl->tpl_vars['ide']->value->getChamados()->getChamados());?>
) Chamados </TH>
                    </TR>
                    <TR class="colunas">
                        <TH>Data Abertura</TH>
                        <TH>Primeiro Atendimento</TH>
                        <TH>Encerramento</TH>
                        <TH>N. Chamado</TH>
                        <TH>Defeito</TH>
                        <TH>Solução</TH>
                        <TH>&nbsp;</TH>
                    </TR>
                </THEAD>
                <TBODY>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ide']->value->getChamados()->getChamados(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <TR>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getDtabertura();?>
 </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getDtatendimento();?>
  </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getDtencerramento();?>
 </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getNumero();?>
 </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getDefeito();?>
</TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getSolucao();?>
</TD>
                        <TD>
                            <A HREF='' target='_blank'><IMG SRC='<?php echo $_SESSION['baseURL'];?>
/templates/img/b_alt.png' ALT='Atualizar informações' WIDTH='16' HEIGHT='16' BORDER=0></A>
                            &nbsp;
                            <A HREF='mailto:Rafael.reichow@receita.fazenda.gov.br?subject=Abertura de Chamado de Manutencao&body=Solicito abertura de chamado de manutencao para o equipamento com o seguinte numero de serie: SN83737%0A%0ADefeito: tertreter%0A%0AUsuario: %0A%0A'><IMG SRC='<?php echo $_SESSION['baseURL'];?>
/templates/img//b_mail2.png' ALT='Gerar e-mail' WIDTH='19' HEIGHT='14' border=0></A>
                            &nbsp;
                            <A HREF='#'><IMG SRC='<?php echo $_SESSION['baseURL'];?>
/templates/img/b_indef2.png' ALT='Informações Garantia' WIDTH='16' HEIGHT='16' BORDER=0 TITLE="<?php echo $_smarty_tpl->tpl_vars['item']->value->getInformacoes();?>
"></A>
                        </TD>
                    </TR>
                    <?php } ?>
                </TBODY>
            </TABLE>
        </div>
        <div id="tabs-4">
            Botão de Coletar
        </div>
        <div id="tabs-5"> 
            <TABLE id='tabela3'>
                <THEAD>
                    <TR class="titulo">
                        <TH colspan=10> (<?php echo count($_smarty_tpl->tpl_vars['ide']->value->getInterfaces());?>
) Interfaces </TH>
                    </TR>
                    <TR class="colunas">
                        <TH>Mac Address</TH>
                        <TH>Tipo</TH>
                        <TH>IP</TH>
                        <TH>Descrição</TH>
                        <TH>Ativa</TH>
                        <TH>Rede</TH>
                        <TH>Reservas</TH>
                    </TR>
                </THEAD>
                <TBODY>
                    <?php  $_smarty_tpl->tpl_vars['interf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['interf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ide']->value->getInterfaces()->getInterfacesRede(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['interf']->key => $_smarty_tpl->tpl_vars['interf']->value){
$_smarty_tpl->tpl_vars['interf']->_loop = true;
?>
                    <TR ID="<?php echo $_smarty_tpl->tpl_vars['interf']->value->getId();?>
">
                        <TD> <?php echo $_smarty_tpl->tpl_vars['interf']->value->getMac();?>
 </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['interf']->value->getTipo();?>
  </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['interf']->value->getIp();?>
 </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['interf']->value->getDescricao();?>
 </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['interf']->value->getAtiva();?>
</TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['interf']->value->getRede();?>
</TD>
                         
                         <?php if ($_smarty_tpl->tpl_vars['interf']->value->getReservas()==1){?>
                            <TD class="abreDetalhe">
                                <img src="<?php echo $_SESSION['baseURL'];?>
/templates/img/details_open.png"> 
                                <DIV ID="conteudo_<?php echo $_smarty_tpl->tpl_vars['interf']->value->getId();?>
" class="detalheOculto">
                                    Buscar via Ajax
                                
                                </DIV>
                            </TD>
                        <?php }else{ ?>
                            <TD></TD>
                        <?php }?>
                    </TR>
                    <?php } ?>
                </TBODY>
            </TABLE>
        </div>        
        <div id="tabs-6"> 
            Em desenvolvimento
        </div>
       <div id="tabs-7">
            <TABLE id='tabela7'>
                <THEAD>
                    <TR class="titulo">
                        <TH colspan=10> (<?php echo count($_smarty_tpl->tpl_vars['ide']->value->getGarantias()->getGarantias());?>
) Contratos </TH>
                    </TR>
                    <TR class="colunas">
                        <TH>Descrição</TH>
                        <TH>Contrato</TH>
                        <TH>Inicio</TH>
                        <TH>Fim</TH>
                    </TR>
                </THEAD>
                <TBODY>
                    <?php  $_smarty_tpl->tpl_vars['garantia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['garantia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ide']->value->getGarantias()->getGarantias(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['garantia']->key => $_smarty_tpl->tpl_vars['garantia']->value){
$_smarty_tpl->tpl_vars['garantia']->_loop = true;
?>
                    <TR ID="<?php echo $_smarty_tpl->tpl_vars['garantia']->value->getId();?>
">
                        <TD> <?php echo $_smarty_tpl->tpl_vars['garantia']->value->getDescricao();?>
 </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['garantia']->value->getContrato();?>
  </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['garantia']->value->getDataInicio();?>
 </TD>
                        <TD> <?php echo $_smarty_tpl->tpl_vars['garantia']->value->getDataFim();?>
 </TD>
                    </TR>
                    <?php } ?>
                </TBODY>
            </TABLE>           
        </div>                
    </div>
                    
<?php if (($_smarty_tpl->tpl_vars['ide']->value->getTipo()->getDescricao()=="Desktop"||$_smarty_tpl->tpl_vars['ide']->value->getTipo()->getDescricao()=="Notebook")&&$_smarty_tpl->tpl_vars['ide']->value->getStatus()->getDescricao()=="Ativo"){?>
    <DIV ID="menuAcoes">
        <ul class="listaMenu">
            <li><a class="modal" title="Mover para manutençao" href="#" link="<?php echo $_SESSION['baseURL'];?>
/acoes/formManutencao/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
">OK - Mover para Manutenção</a></li>
            <li><a class="modal" title="Alterar Dados" href="#" link="<?php echo $_SESSION['baseURL'];?>
/acoes/formAlterarDados/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
">OK - Alterar Dados Básicos</a></li>
            <li><a class="modal" title="Abrir Chamado" href="#" link="<?php echo $_SESSION['baseURL'];?>
/acoes/formAbreChamado/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
">OK - Abrir Chamado</a></li>
            <li><a class="modal" title="Vincular Controle" href="#" link="<?php echo $_SESSION['baseURL'];?>
/acoes/formVincularControle/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
">TESTE - Vincular Controle</a></li>
            <li><a class="modal" title="Alterar Características" href="#" link="<?php echo $_SESSION['baseURL'];?>
/acoes/formAlterarCaracteristicas/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
">Alterar Características</a></li>
            <li><a class="modal" title="Agregar Hardware" href="#" link="<?php echo $_SESSION['baseURL'];?>
/acoes/formAgregarHardware/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
">Agregar Hardware - DESENVOLVENDO</a></li>
            <li><a>---------------</a></li>
            <li><a href="#" onclick="ajaxAcoes(<?php echo $_SESSION['baseURL'];?>
/acoes/aceitatransito/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
)">Aceita Trânsito</a></li>
            <li><a href="#" onclick="ajaxAcoes(<?php echo $_SESSION['baseURL'];?>
/acoes/desagregarHardware/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
)">Desagregar Hardware</a></li>
            <li><a href="#" onclick="ajaxAcoes(<?php echo $_SESSION['baseURL'];?>
/acoes/desvincularControle/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
)">Desvincular Controle</a></li>
            <li><a href="#" onclick="ajaxAcoes(<?php echo $_SESSION['baseURL'];?>
/acoes/dhcp/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
)">Nova Reserva de DHCP</a></li>
            <li><a href="#" onclick="ajaxAcoes(<?php echo $_SESSION['baseURL'];?>
/acoes/estoque/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
)">Move para o Estoque</a></li>
            <li><a href="#" onclick="ajaxAcoes(<?php echo $_SESSION['baseURL'];?>
/acoes/estoqueAtivo/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
)">Move para Ativo (do estoque)</a></li>
            <li><a href="#" onclick="ajaxAcoes(<?php echo $_SESSION['baseURL'];?>
/acoes/registroManutencao/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
)">Registro de Manutenção</a></li>
            <li><a href="#" onclick="ajaxAcoes(<?php echo $_SESSION['baseURL'];?>
/acoes/removerEquipamento/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
)">Remover Equipamento</a></li>
            <li><a href="#" onclick="ajaxAcoes(<?php echo $_SESSION['baseURL'];?>
/acoes/transito/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
)">Move para outra unidade</a></li>
            <li><a href="#" onclick="ajaxAcoes(<?php echo $_SESSION['baseURL'];?>
/acoes/trocaContrato/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
)">Troca Contrato</a></li>
            <li><a href="#" onclick="ajaxAcoes(<?php echo $_SESSION['baseURL'];?>
/acoes/trocaRede/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
)">Troca Rede</a></li>
        </ul>
    </DIV>
<?php }elseif(($_smarty_tpl->tpl_vars['ide']->value->getTipo()->getDescricao()=="Desktop"||$_smarty_tpl->tpl_vars['ide']->value->getTipo()->getDescricao()=="Notebook")&&$_smarty_tpl->tpl_vars['ide']->value->getStatus()->getDescricao()=="Manutenção"){?>        
    <DIV ID="menuAcoes">
        <ul class="listaMenu">
            <li><a class="modal" title="Mover para Ativo" href="#" link="<?php echo $_SESSION['baseURL'];?>
/acoes/manutencaoAtivo/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
">OK - Mover para Ativo</a></li>
        </ul>        
    </DIV>
<?php }elseif($_smarty_tpl->tpl_vars['ide']->value->getTipo()->getDescricao()=="Switch"&&$_smarty_tpl->tpl_vars['ide']->value->getStatus()->getDescricao()=="Ativo"){?>        
    <DIV ID="menuAcoes">
        <ul class="listaMenu">
            <li><a class="modal" title="Agregar Switch" href="#" link="<?php echo $_SESSION['baseURL'];?>
/acoes/agregarSwitch/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
">Agregar Switch</a></li>
            <li><a class="modal" title="Desagregar Switch" href="#" link="<?php echo $_SESSION['baseURL'];?>
/acoes/desagregarSwitch/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getId();?>
">Desagregar Switch</a></li>
        </ul>        
    </DIV>
<?php }?>
</DIV>
<DIV class="ui-widget-footer ui-widget-header ui-corner-bottom"><img SRC="<?php echo $_SESSION['baseURL'];?>
/Templates/img/dica.png" width="16" height="16" >Espaço para colocar alguma dica</DIV>

<script type="text/javascript">
$( "#tabs" ).tabs();
$("#tabela1").dataTable($configuraDataTable);
$("#tabela2").dataTable($configuraDataTable);
$("#tabela7").dataTable($configuraDataTable);
var objTableInterfaces = $("#tabela3").dataTable($configuraDataTable);

$(document).ready(function() { 
    var anOpen = [];
    var baseUrl = "<?php echo $_SESSION['baseURL'];?>
";
    
    $('.abreDetalhe').click ( function() {
        var nTr = this.parentNode;
        var i = $.inArray( nTr, anOpen );

        if ( i === -1 ) {
           $('img', this).attr( 'src', baseUrl+"/templates/img/details_close.png" );
           objTableInterfaces.fnOpen( nTr, $("#conteudo_"+$(nTr).attr("id")).html(), 'details' );
           anOpen.push( nTr );
         }
         else {
           $('img', this).attr( 'src', baseUrl+"/templates/img/details_open.png" );
           objTableInterfaces.fnClose( nTr );
           anOpen.splice( i, 1 );
         }
    }); 
    
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>