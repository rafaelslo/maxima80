<?php /* Smarty version Smarty-3.1.8, created on 2016-01-26 09:47:21
         compiled from ".\Templates\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30734569fd65d069fc2-53531310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e1af8173814b0b2f769a9b7cc20c97bbe48d9b8' => 
    array (
      0 => '.\\Templates\\sidebar.tpl',
      1 => 1453808838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30734569fd65d069fc2-53531310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_569fd65d28d2a6_13301453',
  'variables' => 
  array (
    'musicasActive' => 0,
    'bandasActive' => 0,
    'showsActive' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569fd65d28d2a6_13301453')) {function content_569fd65d28d2a6_13301453($_smarty_tpl) {?><aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div id="prefetch" class="input-group">
                <input type="text" name="q" id="birds" class="form-control" placeholder="Localizar Música..." />
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview <?php echo $_smarty_tpl->tpl_vars['musicasActive']->value;?>
">
                <a href="#"><i class="fa fa-music"></i> <span>Músicas</span></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $_SESSION['baseURL'];?>
/musicas/main">Todas</a></li>
                    <li><a href="<?php echo $_SESSION['baseURL'];?>
/musicas/votar">Votar</a></li>
                    <li><a href="<?php echo $_SESSION['baseURL'];?>
/musicas/prontas">Prontas</a></li>
                    <li><a href="<?php echo $_SESSION['baseURL'];?>
/musicas/preparacao">Preparação</a></li>
                    <li><a href="<?php echo $_SESSION['baseURL'];?>
/musicas/formIncluirMusica"><i class="fa fa-plus"></i> Adicionar Música</a></li>
                </ul>
            </li>
            <li class="treeview <?php echo $_smarty_tpl->tpl_vars['bandasActive']->value;?>
">
                <a href="#"><i class="fa fa-headphones"></i> <span>Bandas</span></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $_SESSION['baseURL'];?>
/bandas/main">Todas</a></li>
                    <li><a href="<?php echo $_SESSION['baseURL'];?>
/bandas/formIncluirBanda"><i class="fa fa-plus"></i> Adicionar Banda</a></li>
                </ul>
            </li>
            <li class="treeview <?php echo $_smarty_tpl->tpl_vars['showsActive']->value;?>
">
                <a href="#"><i class="fa fa-users"></i> <span>Shows</span></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $_SESSION['baseURL'];?>
/shows/main">Todos</a></li>
                    <li><a href="<?php echo $_SESSION['baseURL'];?>
/shows/formIncluirShow"><i class="fa fa-plus"></i> Adicionar Show</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

<?php }} ?>