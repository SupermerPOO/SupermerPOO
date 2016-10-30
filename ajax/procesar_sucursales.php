<?php
	switch ($_GET['accion']) {
		case '1':
			sleep(2);
				if (isset($_POST["input_casilla"])==null ) {
					echo '"<div id="modal" class="modal fade" tabindex="-1" role="dialog">
				  			<div class="modal-dialog" role="document">
				    		<div class="modal-content">
				      			<div class="modal-header">
				        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        			<h4 class="modal-title">Al parecer hay un error</h4>
				      			</div>
					      			<div class="modal-body">
								        <p>Ingrese el numero de Sucursal</p>
				    	  			</div>
				      				<div class="modal-footer">
				        				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
				      				</div>
				    		</div>
				  		</div>
					</div>"';
				}
				else if (isset($_POST["input_nombre"])==null) {
					echo '"<div id="modal" class="modal fade" tabindex="-1" role="dialog">
				  			<div class="modal-dialog" role="document">
				    		<div class="modal-content">
				      			<div class="modal-header">
				        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        			<h4 class="modal-title">Al parecer hay un error</h4>
				      			</div>
					      			<div class="modal-body">
								        <p>Ingrese el nombre de la nueva sucursal</p>
				    	  			</div>
				      				<div class="modal-footer">
				        				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
				      				</div>
				    		</div>
				  		</div>
					</div>"';
				}
				else if (isset($_POST["input_direccion"])==null) {
					echo '"<div id="modal" class="modal fade" tabindex="-1" role="dialog">
				  			<div class="modal-dialog" role="document">
				    		<div class="modal-content">
				      			<div class="modal-header">
				        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        			<h4 class="modal-title">Al parecer hay un error</h4>
				      			</div>
					      			<div class="modal-body">
								        <p>Ingrese direccion de la sucursal</p>
				    	  			</div>
				      				<div class="modal-footer">
				        				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
				      				</div>
				    		</div>
				  		</div>
					</div>"'; 
				}
				else if (isset($_POST["input_telefono"])==null) {
					echo '"<div id="modal" class="modal fade" tabindex="-1" role="dialog">
				  			<div class="modal-dialog" role="document">
				    		<div class="modal-content">
				      			<div class="modal-header">
				        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        			<h4 class="modal-title">Al parecer hay un error</h4>
				      			</div>
					      			<div class="modal-body">
								        <p>Ingrese telefono de la sucursal</p>
				    	  			</div>
				      				<div class="modal-footer">
				        				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
				      				</div>
				    		</div>
				  		</div>
					</div>"'; 
				}
			break;

		case '2':
			//Aqui se realizara la funcion del boton guardar
			break;

		case '3':
			//funciones del boton actualizar
			break;

		case '4':
			//Funcion del boton eliminar
			break;
		default:
			# code...
			break;
	}
?>