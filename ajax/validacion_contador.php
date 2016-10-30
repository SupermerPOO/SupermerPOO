<?php
	switch ($_GET['accion']) {
		case '1':
		?>
			
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center">Creacion de cuenta exitosa</h4>
                      </div>
                      <div class="modal-body" style="padding: 50px 300px 50px 180px;">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" id='btn-cemodal' data-dismiss="modal">Cerrar</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <?php
			break;
      case '2':
      ?>
              <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center">Crear Cuenta</h4>
                      </div>
                      <div class="modal-body" style="padding: 50px 300px 50px 180px;">
                      <table class="table table-hover" align="center"> 
                      <tr>
                        <td >
                        Naturaleza:
                          
                        </td>
                        <td>
                        <select name="slc-naturaleza" id="slc-naturaleza" style="width: 150px" class="form-control" required="" autofocus="" >
                          <option>Deudora</option>
                          <option>Acreedora</option>
                        </select>
                          
                        </td>


                      </tr>
                          <tr>
                        <td>
                        Nombre:
                          
                        </td>
                        <td>
                       <input type="text" name="txt-nombre" class="form-control" id="txt-nombre" required="" autofocus="">
                          
                        </td>


                      </tr>
                      <tr style="width: 150px" > <td id="td-natu" colspan="2"></td> <td></td></tr>

                      </table>
                       
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="btn-cemodal" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" name="guardarModal" id="guardarModal">Guardar</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.mo-->
                  <?php
      break;
		
		default:
			# code...
			break;
	}
	

?>