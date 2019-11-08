<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UMG| TIPO DE CAMBIO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="">
<div class="">




  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Tipo De Cambio
        <small>WEB Serv BANGUAT</small>
      </h1>
      <ol class="breadcrumb">

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">TIPO DE CAMBIO BANGUAT</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tipo de Servicio</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tipo de Cambio hoy en Dolares">
                </div>
                <!-- textarea -->
              <!--  <div class="form-group">
                  <label>Resultado de Servicio</label>
                  <textarea class="form-control" rows="20" placeholder="Enter ...">

                    <?php
                      /*$client = new soapclient("http://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?wsdl", ["trace" => 1,"exceptions" => true,]);

                      var_dump($client->TipoCambioDiaString());
                    */?>
                  </textarea>
                </div>-->

              </div>
              <!-- /.box-body -->
              <?php

                //esta libreria se puede descargar de http://sourceforge.net/projects/nusoap/
              //	include("nusoap/lib/nusoap.php");



            // parametros a pasar al metodo
            //	$url = "https://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?WSDL";
            //	    $client = new nusoap_client('https://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?WSDL');
                //$client = new \SoapClient("https://demo.l1nda.nl/api/webservice/?wsdl", ["trace" => 1,"exceptions" => true,]);
                $client = new soapclient("http://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?wsdl", ["trace" => 1,"exceptions" => true,]);
                //var_dump($client->__getFunctions());



                var_dump($client->TipoCambioDiaString());



              //	echo "el cambio actual es: ".$valorCambio." Dolares";
              ?>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Consultar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
