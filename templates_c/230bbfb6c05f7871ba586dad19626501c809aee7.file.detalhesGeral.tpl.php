<?php /* Smarty version Smarty-3.1.8, created on 2015-10-27 15:41:39
         compiled from ".\templates\detalhes\detalhesGeral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208255627b86fb77c29-99444682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '230bbfb6c05f7871ba586dad19626501c809aee7' => 
    array (
      0 => '.\\templates\\detalhes\\detalhesGeral.tpl',
      1 => 1445967697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208255627b86fb77c29-99444682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5627b86fe2fcd9_84926178',
  'variables' => 
  array (
    'ide' => 0,
    'garantia' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627b86fe2fcd9_84926178')) {function content_5627b86fe2fcd9_84926178($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("novoCabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Lista de Equipamentos"), 0);?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $_smarty_tpl->tpl_vars['ide']->value->getTipo()->getDescricao();?>

            <small><?php echo $_smarty_tpl->tpl_vars['ide']->value->getStatus()->getDescricao();?>
</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-plug"></i> Equipamentos</a></li>
            <li><a href="<?php echo $_SESSION['baseURL'];?>
/equipamentos/<?php echo $_smarty_tpl->tpl_vars['ide']->value->getTipo()->getDescricao();?>
"><?php echo $_smarty_tpl->tpl_vars['ide']->value->getTipo()->getDescricao();?>
</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">Dados Gerais</div>
                    <TABLE Class="table">
                        <THEAD>
                        </THEAD>
                        <TFOOT>
                        </TFOOT>
                        <TBODY>
                            <TR>
                                <TD class="label-primary">Tipo</TD><TD> <?php echo $_smarty_tpl->tpl_vars['ide']->value->getTipo()->getDescricao();?>
 </TD>
                                <TD class="label-primary">Status</TD><TD> <?php echo $_smarty_tpl->tpl_vars['ide']->value->getStatus()->getDescricao();?>
 </TD>
                            </TR>
                            <TR>
                                <TD class="label-primary">Nome</TD><TD> <?php echo $_smarty_tpl->tpl_vars['ide']->value->getNome();?>
 </TD>
                                <TD class="label-primary">Descrição</TD><TD> <?php echo $_smarty_tpl->tpl_vars['ide']->value->getDescricao();?>
 </TD>
                            </TR>
                            <TR>
                                <TD class="label-primary">Fabricante</TD><TD> <?php echo $_smarty_tpl->tpl_vars['ide']->value->getFabricante();?>
 </TD>
                                <TD class="label-primary">Modelo</TD><TD> <?php echo $_smarty_tpl->tpl_vars['ide']->value->getModelo();?>
 </TD>
                            </TR>
                            <TR>
                                <TD class="label-primary">Número de Série</TD><TD> <?php echo $_smarty_tpl->tpl_vars['ide']->value->getNrserie();?>
 </TD>
                                <TD class="label-primary">Patrimônio</TD><TD> <?php echo $_smarty_tpl->tpl_vars['ide']->value->getPatrimonio();?>
 </TD>
                            </TR>
                        </TBODY>
                    </TABLE>

                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">Contratos<span class="badge pull-right bg-light-blue"><?php echo count($_smarty_tpl->tpl_vars['ide']->value->getGarantias()->getGarantias());?>
</span></div>
                    <TABLE class="table">
                        <THEAD>
                            <TR>
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
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">Características</div>
                    <TABLE class="table">
                        <TBODY>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ide']->value->getCaracteristicas()->getCrEquipamentos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <TR>
                                    <TD class="label-primary"><?php echo $_smarty_tpl->tpl_vars['item']->value->getCaracteristica()->getNm();?>
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
                <div class="box box-primary">
                    <div class="box-header with-border">Interfaces<span class="badge pull-right bg-light-blue"><?php echo count($_smarty_tpl->tpl_vars['ide']->value->getInterfaces()->getInterfacesRede());?>
</span></div>
                    <TABLE Class="table" id='tabela1'>
                        <THEAD>
                            <TR class="colunas">
                                <TH>Mac</TH>
                                <TH>Tipo</TH>
                                <TH>IP</TH>
                                <TH>Descrição</TH>
                                <TH>Ativa</TH>
                                <TH>&nbsp;</TH>
                            </TR>
                        </THEAD>
                        <TBODY>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ide']->value->getInterfaces()->getInterfacesRede(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <TR>
                                    <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getMac();?>
 </TD>
                                    <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getTipo();?>
  </TD>
                                    <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getIp();?>
 </TD>
                                    <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getDescricao();?>
 </TD>
                                    <TD> <?php echo $_smarty_tpl->tpl_vars['item']->value->getAtiva();?>
</TD>
                                    <TD>
                                        <A HREF='' target='_blank'><IMG SRC='<?php echo $_SESSION['baseURL'];?>
/templates/img/b_alt.png' ALT='Atualizar informaÃ§Ãµes' WIDTH='16' HEIGHT='16' BORDER=0></A>
                                        &nbsp;
                                        <A HREF='mailto:Rafael.reichow@receita.fazenda.gov.br?subject=Abertura de Chamado de Manutencao&body=Solicito abertura de chamado de manutencao para o equipamento com o seguinte numero de serie: SN83737%0A%0ADefeito: tertreter%0A%0AUsuario: %0A%0A'><IMG SRC='<?php echo $_SESSION['baseURL'];?>
/templates/img//b_mail2.png' ALT='Gerar e-mail' WIDTH='19' HEIGHT='14' border=0></A>
                                        &nbsp;
                                        <A HREF='' target='_blank'><IMG SRC='<?php echo $_SESSION['baseURL'];?>
/templates/img/b_indef2.png' ALT='Informa&ccedil;&otilde;es Garantia' WIDTH='16' HEIGHT='16' BORDER=0></A>
                                    </TD>
                                </TR>
                            <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
                                Nenhuma Interface Cadastrada  
                            <?php } ?>

                        </TBODY>
                    </TABLE>    
                </div>

            </div>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">Historico<span class="badge pull-right bg-light-blue"><?php echo count($_smarty_tpl->tpl_vars['ide']->value->getHistoricos()->getHistoricos());?>
</span></div>
            <TABLE class ="table" id='tabela1'>
                <THEAD>
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
        <div class="box box-primary">
            <div class="box-header with-border">Chamados<span class="badge pull-right bg-light-blue"><?php echo count($_smarty_tpl->tpl_vars['ide']->value->getChamados()->getChamados());?>
</span></div>
            <TABLE Class="table" id='tabela1'>
                <THEAD>
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
/templates/img/b_alt.png' ALT='Atualizar informaÃ§Ãµes' WIDTH='16' HEIGHT='16' BORDER=0></A>
                                &nbsp;
                                <A HREF='mailto:Rafael.reichow@receita.fazenda.gov.br?subject=Abertura de Chamado de Manutencao&body=Solicito abertura de chamado de manutencao para o equipamento com o seguinte numero de serie: SN83737%0A%0ADefeito: tertreter%0A%0AUsuario: %0A%0A'><IMG SRC='<?php echo $_SESSION['baseURL'];?>
/templates/img//b_mail2.png' ALT='Gerar e-mail' WIDTH='19' HEIGHT='14' border=0></A>
                                &nbsp;
                                <A HREF='' target='_blank'><IMG SRC='<?php echo $_SESSION['baseURL'];?>
/templates/img/b_indef2.png' ALT='Informa&ccedil;&otilde;es Garantia' WIDTH='16' HEIGHT='16' BORDER=0></A>
                            </TD>
                        </TR>
                    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
                        Nenhum Chamado Encontrado    
                    <?php } ?>
                </TBODY>
            </TABLE>                    
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->                       

<?php echo $_smarty_tpl->getSubTemplate ("novoRodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>





<?php }} ?>