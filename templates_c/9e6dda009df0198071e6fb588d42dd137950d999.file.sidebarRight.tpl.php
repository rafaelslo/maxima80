<?php /* Smarty version Smarty-3.1.8, created on 2015-10-23 10:22:28
         compiled from ".\templates\sidebarRight.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9890562a238315a6a6-91968212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e6dda009df0198071e6fb588d42dd137950d999' => 
    array (
      0 => '.\\templates\\sidebarRight.tpl',
      1 => 1445602946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9890562a238315a6a6-91968212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_562a2383168541_80126828',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562a2383168541_80126828')) {function content_562a2383168541_80126828($_smarty_tpl) {?><!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-wrench"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Operações</h3>
            <ul class="control-sidebar-menu" ID="_menuAcoes">

            </ul><!-- /.control-sidebar-menu -->

        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">Minhas Configurações</h3>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Receber notificações por email
                        <input type="checkbox" class="pull-right" checked />
                    </label>
                </div><!-- /.form-group -->
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Receber notificações por SMS
                        <input type="checkbox" class="pull-right" checked />
                    </label>
                    <p>
                        Some information about this general settings option
                    </p>
                </div><!-- /.form-group -->
            </form>
        </div><!-- /.tab-pane -->
    </div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div><?php }} ?>