<aside class="main-sidebar">

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
            <li class="treeview {$musicasActive}">
                <a href="#"><i class="fa fa-music"></i> <span>Músicas</span></a>
                <ul class="treeview-menu">
                    <li><a href="{$smarty.session.baseURL}/musicas/main">Todas</a></li>
                    <li><a href="{$smarty.session.baseURL}/musicas/votar">Votar</a></li>
                    <li><a href="{$smarty.session.baseURL}/musicas/prontas">Prontas</a></li>
                    <li><a href="{$smarty.session.baseURL}/musicas/preparacao">Preparação</a></li>
                    <li><a href="{$smarty.session.baseURL}/musicas/formIncluirMusica"><i class="fa fa-plus"></i> Adicionar Música</a></li>
                    <li><a href="{$smarty.session.baseURL}/musicas/imprimirMusicas" target="_blank"><i class="fa fa-print"></i> Imprimir Músicas</a></li>
                </ul>
            </li>
            <li class="treeview {$bandasActive}">
                <a href="#"><i class="fa fa-headphones"></i> <span>Bandas</span></a>
                <ul class="treeview-menu">
                    <li><a href="{$smarty.session.baseURL}/bandas/main">Todas</a></li>
                    <li><a href="{$smarty.session.baseURL}/bandas/formIncluirBanda"><i class="fa fa-plus"></i> Adicionar Banda</a></li>
                </ul>
            </li>
            <li class="treeview {$showsActive}">
                <a href="#"><i class="fa fa-users"></i> <span>Shows</span></a>
                <ul class="treeview-menu">
                    <li><a href="{$smarty.session.baseURL}/shows/main">Todos</a></li>
                    <li><a href="{$smarty.session.baseURL}/shows/formIncluirShow"><i class="fa fa-plus"></i> Adicionar Show</a></li>
                </ul>
            </li>
            <li class="treeview {$integrantesActive}">
                <a href="#"><i class="fa fa-user"></i> <span>Integrantes</span></a>
                <ul class="treeview-menu">
                    <li><a href="{$smarty.session.baseURL}/integrantes/main">Todos</a></li>
                    <li><a href="{$smarty.session.baseURL}/integrantes/formIncluirintegrante"><i class="fa fa-plus"></i> Adicionar Integrante</a></li>
                </ul>
            </li>
            <li class="treeview {$logActive}">
                <a href="{$smarty.session.baseURL}/log/main"><i class="fa fa-search"></i> <span>Log</span></a>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

