<?php 
$pagina_ativa = "Cadastro-Funcionario";
?>
<!DOCTYPE html>
<html  lang="pt-br">
<head>
 <?php require_once'../include/meta-tags.php' ?>
</head>
<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">
    <!-- incluindo menuTOPO -->
    <?php require_once'../include/menuTopo.php' ?> 
    <!-- incluindo sidebar ESQUERDO (MENU LATERAL) -->
    <?php require_once'../include/sidebar-esquerdo.php' ?>


    <!--HEADER DO CONTEUDO-->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Cadastro de Funcionários
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
          <li class="active">Here</li>
        </ol>
      </section>

      <!-- CONTEUDO PRINCIPAL -->
      <section class="content container-fluid">

       <div class="row">
        <!-- left column -->
        <div class="col-md-6 col-md-offset-3 ">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          




        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <?php require_once'../include/footer.php' ?>
      
      <?php require_once'../include/control-sidebar.php' ?>

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    <?php require_once'../include/scripts-footer.php' ?>
  </body>
  </html>