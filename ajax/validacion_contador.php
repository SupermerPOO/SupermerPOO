<?php
	switch ($_GET['accion']) {
		case '1':
		echo "llegue hasta aqui";
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
		
		default:
			# code...
			break;
	}
	}

?>