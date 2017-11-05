<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>NOME DO CLIENTE</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">

       <!-- EXEMPLO DROPDOWN -->
        <!-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->

        <li <?php if($pagina_ativa == "Dashboard"){echo " class=\"active\"";} ?> ><a href="starter.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>



         <!-- LINK DE TITULO  --> <!-- Pode-se adicionar icones nos links SITE ->> http://fontawesome.io/icons/-->
        <li class="header">CADASTROS </li>
          
          <!-- PRIMEIRO CADASTRO -->
        <li <?php if($pagina_ativa == "Cadastro-Funcionario"){echo " class=\"active\"";} ?> ><a href="cadastro-funcionario.php"><i class="fa fa-link"></i> <span>Cadastro de Funcionário</span></a></li>


        <!-- SEGUNDO CADASTRO -->
        <li <?php if($pagina_ativa == "Cadastro-Fazendas"){echo " class=\"active\"";} ?> ><a href="#"><i class="fa fa-envelope-o"></i> <span>Cadastro de Fazendas</span></a></li>

        <!-- LINK DE TITULO  --> <!-- Pode-se adicionar icones nos links SITE ->> http://fontawesome.io/icons/-->
        <li class="header">Pesquisar </li>


        <li <?php if($pagina_ativa == "Tabelas"){echo " class=\"active\"";} ?>><a href="tabelas.php"><i class="ion ion-ios-search-strong"></i> <span>Tabelas</span></a></li>


         <!-- LINK DE TITULO  --> <!-- Pode-se adicionar icones nos links SITE ->> http://fontawesome.io/icons/-->
        <li class="header">CONTATO </li>


        <li <?php if($pagina_ativa == "Entre-Em-Contato"){echo " class=\"active\"";} ?>><a href="#"><i class="fa fa-envelope-o"></i> <span>Envie um email</span></a></li>





      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>