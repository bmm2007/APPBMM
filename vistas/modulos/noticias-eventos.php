<section class="mgt-1">
    <div class="modo-contenedor-selva">

        <input type="checkbox" data-toggle="toggle" data-on="Noticias" data-off="Eventos" data-onstyle="success" id="noticiaEvento" name="noticiaEvento" data-offstyle="info" data-size="medium" data-width="160" idUsuario="" checked class="noticias-eventos" value="noticias">

    </div>
    <div class="box">

        <button class="btn btn-primary btn-lg btn-modal-crear float-right" data-toggle='modal' data-target='#modalCrear'>INSERTAR</button>
    </div>
    <div class="container-fluid contenedor-noticias-eventos">


    </div>
</section>



<!-- MODAL CREAR -->
<!-- Modal -->
<div id="modalCrear" class="modal fade fullscreen-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">CREAR</h4>

            </div>

            <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

            <div class="modal-body">

                <div class="box-body">
                    <form action="" id="formNEcrear" class="forms-all">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="modo-contenedor-selva conte-escoger">

                                    <input type="checkbox" data-toggle="toggle" data-on="Noticias" data-off="Eventos" data-onstyle="success" id="noticiaEvento" name="noticiaEvento" data-offstyle="warning" data-size="medium" data-width="160" idUsuario="" checked class="noticias-eventos">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">



                            <div class="form-group">
                                <input type="hidden" name="tipoenvio" id="tipoenvio" value="noticias">
                                <input type="text" class="form-control " name="titulo" id="titulo" placeholder="Ingresar título" required>

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingresar descripción">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group content-foto">

                                <div class="conte-previsualizar"><img src="" alt="" class="previsualizar-foto"></div>


                                <label for="foto" class="foto-logo"><i class="fas fa-camera-retro"></i></label>
                                <input type="file" id="foto" name="foto">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <!-- /.box-header -->
                                <div class="box-body pad">

                                    <textarea id="editor1" name="editor1" rows="10" cols="80">

                    </textarea>

                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">

                                <button class="btn btn-primary" id="btnGuardar" style="margin-bottom: 10px">GUARDAR</button>

                            </div>

                        </div>
                </div>

                </form>

            </div>
        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <!-- <div class="modal-footer">

          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="far fa-times-circle fa-lg"></i> Salir</button>

          <button type="submit" class="btn btn-primary btn-guardar-ne">Guardar</button>

        </div> -->

        <?php

        // $crearUsuario = ControladorUsuarios::ctrCrearUsuario();

        ?>

        </form>


    </div>
</div>
</div>






<!-- MODAL EDITAR -->
<!-- Modal -->
<div id="modalEditar" class="modal fade fullscreen-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">EDITAR</h4>

            </div>

            <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

            <div class="modal-body">

                <div class="box-body">
                    <form action="" id="formEditar" class="forms-all">
                        <div class="col-md-12">
                            <div class="form-group">

                            </div>
                        </div>
                        <div class="col-md-12">



                            <div class="form-group">

                                <input type="text" class="form-control " name="etitulo" id="etitulo" placeholder="Ingresar título" required>

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="edescripcion" id="edescripcion" placeholder="Ingresar descripción">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group content-foto">

                                <div class="conte-previsualizar"><img src="" alt="" class="previsualizar-foto"></div>


                                <label for="efoto" class="foto-logo"><i class="fas fa-camera-retro"></i></label>
                                <input type="file" id="efoto" name="efoto">
                                <input type="hidden" id="efotoActual" name="efotoActual">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <!-- /.box-header -->
                                <div class="box-body pad">

                                    <textarea id="editor2" name="editor2" rows="10" cols="80">

                    </textarea>

                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="hidden" id="id" name="id">
                                <input type="hidden" id="tabla" name="tabla" value="noticias">
                                <textarea name="textone" id="textone" cols="30" rows="10" style="display:none;">

 </textarea>
                                <button class="btn btn-primary" id="btnEditar">EDITAR</button>

                            </div>

                        </div>
                    </form>
                </div>


            </div>
        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <!-- <div class="modal-footer">

          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="far fa-times-circle fa-lg"></i> Salir</button>

          <button type="submit" class="btn btn-primary btn-guardar-ne">Guardar</button>

        </div> -->




    </div>
</div>
</div>