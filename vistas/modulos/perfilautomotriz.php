<?php
// $registro = new ControladorTrackingAutomotriz();
// $datos = $registro->ctrMostrarmdlMostrarPostventaAutomotriz();
?>
<style>
    .info-box {
        cursor: pointer;
    }

    .border-red {
        border: 3px solid #007bff !important;
    }

    .d-none {
        display: none;
    }

    .d-block {
        display: block;
    }
</style>
<form method="POST">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <img src="../tracking/vistas/img/plantilla/logo.png" class="float-right" width="150" height="150">
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <h1 class="text-center display-4 float-left">
                            <p style="font-weight: bold; font-size: smaller; padding-top:11%;">PERFIL AUTOMOTRIZ</p>
                        </h1>
                    </div>
                </div>
                <br>
                <br>
                <!-- row start -->
                <div class="card">
                    <div class="row">
                        <!-- Left col start-->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">¿Buscar un carro principalmente para?</h3>
                                </div>
                                <div id="profile" class="card-body p-2">
                                    <!-- Info Boxes Style 2 -->
                                    <div class="info-box mb-3 bg-warning" onclick="fnProfile(0, 'Familia')">
                                        <span class="info-box-icon"><i class="fa fa-users"></i></span>

                                        <div class="info-box-content">
                                            <p class="p-1">Moverme con toda <b>mi familia</b>.!Necesito espacio para todos¡</p>
                                        </div>
                                    </div>
                                    <!-- /.info-box -->
                                    <div class="info-box mb-3 bg-success" onclick="fnProfile(1, 'Emprendedor')">
                                        <span class="info-box-icon"><i class="fa fa-child"></i></span>

                                        <div class="info-box-content">
                                            <p class="p-1"><b>Emprender</b>, quiero un carro confiable y rendidor para mi negocio.</p>
                                        </div>
                                    </div>
                                    <!-- /.info-box -->
                                    <div class="info-box mb-3 bg-danger" onclick="fnProfile(2, 'Trabajar o Salir')">
                                        <span class="info-box-icon"><i class="fa fa-user-tie"></i></span>

                                        <div class="info-box-content">
                                            <p class="p-1">Ir a <b>trabajar o salir</b> los fines de semana, Algo cómodo pero con estilo.</p>
                                        </div>
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- Left col end -->

                        <!-- medium col start-->
                        <div class="col-md-4">
                            <div class="card">
                                <div id="option-title" class="card-header d-none">
                                    <h3 class="card-title"></h3>
                                </div>
                                <!-- /.card-header -->
                                <div id="first-options" class="card-body p-0">
                                    <div class="options d-none">
                                        <div class="col-12 col-sm-12 col-md-12" onclick="fnFirstOption(0, 0, '>= 6')">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-info elevation-1" style="background-color: #0bdf80!important;"><i class="fas fa-cog"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text font-weight-bold"> Mayor o igual a 6</span>
                                                </div>
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12" onclick="fnFirstOption(0, 1, '<= 5')">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-info elevation-1" style="background-color:#6f42c1!important;"><i class="fas fa-cog"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text font-weight-bold">
                                                        Menor o igual a 5</span>
                                                </div>
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                    </div>
                                    <div class="options d-none">
                                    </div>
                                    <div class="options d-none">
                                        <div class="col-12 col-sm-12 col-md-12" onclick="fnFirstOption(2, 0, 'SI')">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-light elevation-1"><i class="fas fa-cog"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text font-weight-bold">SI</span>

                                                </div>
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12" onclick="fnFirstOption(2, 1, 'NO')">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-light elevation-1"><i class="fas fa-cog"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text font-weight-bold">NO</span>
                                                </div>
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                        <!-- medium col end -->

                        <!-- ritght col start-->
                        <div class="col-md-4">
                            <div class="card" id="autosuenos">
                                <div id="optSecond-title" class="card-header d-none">
                                    <h3 class="card-title"></h3>
                                </div>
                                <!-- /.card-header -->
                                <div id="second-options" class="card-body p-0">
                                    <div class="options d-none">

                                    </div>
                                    <div class="options d-none">
                                    </div>
                                    <div class="options d-none">
                                        <div class="options-two d-none">
                                            <div class="col-12 col-sm-12 col-md-12" onclick="fnSecondOption(2, 0, 0, 'Nuevo adulto')">
                                                <div class="info-box">
                                                    <span class="info-box-icon bg-info elevation-1" style="background-color: #fd7e14!important;"><i class="fas fa-cog"></i></span>

                                                    <div class="info-box-content">
                                                        <span class="info-box-text font-weight-bold">Independencia / Comodidad / Seguridad</span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12" onclick="fnSecondOption(2, 0, 1, 'Aspiracional')">
                                                <div class="info-box">
                                                    <span class="info-box-icon bg-info elevation-1" style="background-color: #007bff!important;"><i class="fas fa-cog"></i></span>

                                                    <div class="info-box-content">
                                                        <span class="info-box-text font-weight-bold">Refleja personalidad / Estilo de vida</span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                        </div>
                                        <div class="options-two d-none">
                                            <div class="col-12 col-sm-12 col-md-12" onclick="fnSecondOption(2, 1, 0, '< USD 14,9999')">
                                                <div class="info-box">
                                                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                                    <div class="info-box-content">
                                                        <span class="info-box-text font-weight-bold">
                                                            Menor a USD 14,9999</span>
                                                    </div>
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12" onclick="fnSecondOption(2, 1, 1, '>= USD 15,000')">
                                                <div class="info-box">
                                                    <span class="info-box-icon bg-info elevation-1" style="background-color: #af09b5!important;"><i class="fas fa-cog"></i></span>

                                                    <div class="info-box-content">
                                                        <span class="info-box-text font-weight-bold"> Mayor o igual a USD 15,000</span>
                                                    </div>
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- ritght col end -->
                    </div>
                    <div id="formDNI" class="row d-none">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input id="formDNI" type="text" placeholder="DNI" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <button class="btn btn-success" id="saveForm">Guardar</button>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                </div>
                <!-- row end -->


            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</form>

<script src="vistas/js/perfilautomotriz.js"></script>