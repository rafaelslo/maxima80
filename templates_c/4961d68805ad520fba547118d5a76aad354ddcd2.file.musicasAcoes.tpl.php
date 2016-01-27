<?php /* Smarty version Smarty-3.1.8, created on 2016-01-19 14:22:41
         compiled from ".\templates\musicas\musicasAcoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13264569e375f17c9c9-24937639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4961d68805ad520fba547118d5a76aad354ddcd2' => 
    array (
      0 => '.\\templates\\musicas\\musicasAcoes.tpl',
      1 => 1453220557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13264569e375f17c9c9-24937639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_569e375f1fd8a8_32889286',
  'variables' => 
  array (
    'acao' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569e375f1fd8a8_32889286')) {function content_569e375f1fd8a8_32889286($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['acao']->value=='Proposta'){?>
    <a class="btn btn-primary" href= "<?php echo $_SESSION['baseURL'];?>
/musicas/status/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
4" role="button">Aprovar Música</a>
    <a class="btn btn-danger" href= "<?php echo $_SESSION['baseURL'];?>
/musicas/status/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
3" role="button">Rejeitar Música</a>
<?php }elseif($_smarty_tpl->tpl_vars['acao']->value=='Pronta'){?>
    <a class="btn btn-info" href= "<?php echo $_SESSION['baseURL'];?>
/musicas/status/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
5" role="button">Retornar para Preparação</a>
<?php }elseif($_smarty_tpl->tpl_vars['acao']->value=='Rejeitada'){?>
    <a class="btn btn-warning" href= "<?php echo $_SESSION['baseURL'];?>
/musicas/status/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
1" role="button">Retornar para Proposta</a>
<?php }elseif($_smarty_tpl->tpl_vars['acao']->value=='Aprovada'){?>
    <a class="btn btn-info" href= "<?php echo $_SESSION['baseURL'];?>
/musicas/status/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
5" role="button">Iniciar Preparação</a>
<?php }elseif($_smarty_tpl->tpl_vars['acao']->value=='Preparação'){?>
    <a class="btn btn-primary" href= "<?php echo $_SESSION['baseURL'];?>
/musicas/status/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
4" role="button">Retornar para Aprovada</a>
    <a class="btn btn-success" href= "<?php echo $_SESSION['baseURL'];?>
/musicas/status/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
2" role="button">Música Pronta</a>
<?php }?>
<?php }} ?>