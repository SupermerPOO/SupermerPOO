<?php
echo '<script type="text/javascript" src="../js/funciones.js"></script>';
	switch ($_GET['accion']) {
		case '1':
echo "";

		            ?>
			
         
                <?php
			break;
      case '2':
      ?>
               <table class="table table-hover" align="center"> 
                      <tr>
                        <td >
                        Naturaleza:
                          
                        </td>
                        <td>
                        <select name="slc-naturaleza" id="slc-naturaleza" style="width: 150px" class="form-control" required="" autofocus="" >
                          <option value="2">Deudora</option>
                          <option value="1">Acreedora</option>
                        </select>
                          
                        </td>


                      </tr>
                          <tr>
                        <td>
                        Nombre:
                          
                        </td>
                        <td>
                       <input type="text" name="txt-nombre" class='form-control' id="txt-nombre" required="" autofocus="">
                          
                        </td>


                      </tr>
                      <tr style="width: 150px" > <td id="td-natu" colspan="2"></td> <td></td></tr>

                      </table>
                  <?php
      break;
		
		default:
			# code...
			break;
	}
	

?>