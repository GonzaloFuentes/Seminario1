<?php include('pagina_inicio.php'); ?>
 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Stock</h2>   
                    </div>
                </div>
                 <hr />
        <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#nuevoUsuario">
                              Nuevo
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="nuevoUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input class="form-control">
                                                    <label>Apellido</label>
                                                    <input class="form-control">
                                                     <label>DNI</label>
                                                    <input class="form-control">
                                                     <label>Tel&eacute;fono</label>
                                                    <input class="form-control">
                                                    <label>E-mail</label>
                                                    <input class="form-control">
                                                    <lclass="form-control">
                                             </div>
                                            </form>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#Tecnico</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>DNI</th>
                                            <th>Telefono</th>
                                            <th>E-mail</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                     <tr class="odd gradeX">
                                            <td>00001</td>
                                            <td>Maria Florencia</td>
                                            <td>Sardi</td>
                                            <td>30303030</td>
                                            <td>0303456</td>
                                            <td>mfsardi@uade.edu.com.net</td>
                                            <td class="center">
                                                <!--Editar -->
                                               <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                &nbsp;
                                                <!--Eliminar -->
                                               <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>00002</td>
                                            <td>Maria Florencia</td>
                                            <td>Sardi</td>
                                            <td>30303030</td>
                                            <td>0303456</td>
                                            <td>mfsardi@uade.edu.com.net</td>
                                           <td class="center">
                                                <!--Editar -->
                                               <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                &nbsp;
                                                <!--Eliminar -->
                                               <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>00003</td>
                                            <td>Maria Florencia</td>
                                            <td>Sardi</td>
                                            <td>30303030</td>
                                            <td>0303456</td>
                                            <td>mfsardi@uade.edu.com.net</td>
                                           <td class="center">
                                                <!--Editar -->
                                               <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                &nbsp;
                                                <!--Eliminar -->
                                               <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>00004</td>
                                            <td>Maria Florencia</td>
                                            <td>Sardi</td>
                                            <td>30303030</td>
                                            <td>0303456</td>
                                            <td>mfsardi@uade.edu.com.net</td>
                                           <td class="center">
                                                <!--Editar -->
                                               <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                &nbsp;
                                                <!--Eliminar -->
                                               <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>00005</td>
                                            <td>Maria Florencia</td>
                                            <td>Sardi</td>
                                            <td>30303030</td>
                                            <td>0303456</td>
                                            <td>mfsardi@uade.edu.com.net</td>
                                           <td class="center">
                                                <!--Editar -->
                                               <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                &nbsp;
                                                <!--Eliminar -->
                                               <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>00006</td>
                                            <td>Maria Florencia</td>
                                            <td>Sardi</td>
                                            <td>30303030</td>
                                            <td>0303456</td>
                                            <td>mfsardi@uade.edu.com.net</td>
                                            <td class="center">
                                                <!--Editar -->
                                               <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                &nbsp;
                                                <!--Eliminar -->
                                               <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                
          
         
        </div>
               
    </div>
            
			
			<?php include('pagina_fin.php') ?>