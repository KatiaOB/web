<script type="text/javascript"  src="javascript/validaciones.js"></script>
<form name="form1" action="datos.php" method="post" enctype="multipart/form-data">
			<table cols="2" border="0" align="center">
				<tr align="center"><td colspan="2"><H1>Datos del cliente</H1></td></tr>
				<tr align="right"><td>RFC:</td><td align="left"><input name="rfc" type="text" value="<?php if (isset($rfc))echo $rfc; ?>" maxlength="15"/></td></tr>
				<tr align="right"><td>NOMBRE:</td><td align="left"><input name="nombre" type="text" value="<?php if (isset($nombre))echo $nombre; ?>" maxlength="30"/></td></tr>
				<tr align="right"><td>EDAD:</td><td align="left">
				<select name="edad">
					<?php for($i=18;$i<=60;$i++){?>
				  <option value="<?php echo $i ;?>"><?php echo $i ;?>
				  <?php } ?>
				  </select>
				</td></tr>
				<tr align="right"><td>SEXO:</td>
				  <td align="left"><label>
				  <select name="sexo">
				        <option value="M">M</option>
				        <option value="H">H</option>
		              </select>
				  </label></td>
				</tr>
				<tr align="right"><td>DIRECCION:</td><td align="left"><input type="text" maxlength="60" name="direccion" value="<?php if (isset($direccion))echo $direccion; ?>"/></td></tr>				
				<tr align="right"><td>TELEFONO:</td><td align="left"><input name="telefono" type="text" onblur="" value="<?php if (isset($telefono))echo $telefono; ?>" maxlength="15" /></td></tr>				
				<tr align="right"><td>E_MAIL:</td><td align="left"><input name="email" type="text" value="<?php if (isset($email))echo $email; ?>" maxlength="60"/></td></tr>
				<tr align="right"><td>FOTO:</td><td align=""><input name="file" type="file" class="" size="10" maxlength="80"></td></tr>				
				<tr align="center"><td colspan="2">
                <input name="error" type="hidden" id="error" value="<?php echo $error ?>">
				<input type="button" name="enviar" value="Enviar" onclick="valida()"/>
				<input type="reset" name="reestablecer"/>
				<input type="hidden" name="ncapa" value="<?php echo $ncapa;?>" />
				</td></tr>	
			</table>
		</form>	
