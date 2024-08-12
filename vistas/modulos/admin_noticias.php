<section class="container-fluid">

    <div class="col-lg-12 mgt-1">
        <form action="" id="formNoticiasEventos" class="forms-all">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="modo-contenedor-selva">

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

                    <button class="btn btn-primary" id="btnGuardar">GUARDAR</button>

                </div>

            </div>
    </div>

    </form>
    </div>

</section>