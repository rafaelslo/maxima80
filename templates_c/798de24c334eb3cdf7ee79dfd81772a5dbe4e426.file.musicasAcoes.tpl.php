<?php /* Smarty version Smarty-3.1.8, created on 2019-05-14 16:03:56
         compiled from ".\Templates\musicas\musicasAcoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1321756a0c2674e3db2-07799054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '798de24c334eb3cdf7ee79dfd81772a5dbe4e426' => 
    array (
      0 => '.\\Templates\\musicas\\musicasAcoes.tpl',
      1 => 1557860614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1321756a0c2674e3db2-07799054',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56a0c2677ea7b2_63813697',
  'variables' => 
  array (
    'acao' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a0c2677ea7b2_63813697')) {function content_56a0c2677ea7b2_63813697($_smarty_tpl) {?>
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
    <a class="btn btn-warning" href= "<?php echo $_SESSION['baseURL'];?>
/musicas/status/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
1" role="button">Retornar para Proposta</a>
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