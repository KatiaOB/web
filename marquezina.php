<marquee onMouseover="this.stop();" height="103" width="500"  onMouseout="this.start()" scrolldelay="200" >
		<?php
			include("conexion.php"); 
			$consulta="select rfc from clientes"; 
			$result1=mysql_query($consulta,$conexion);
			if (mysql_num_rows($result1)>=1) {$c=0;
				while ($row=mysql_fetch_array($result1) and $c<5)
				{
						$c++;
						echo '<a href="modificarclientes.php?rfc5='.$row["rfc"].'"><img  src="mostrarfoto.php?rfc='.$row["rfc"].'" width="100" height="100" align="absmiddle"></a>';
				}
			}else{echo "<h1>No hay datos<h1>";}
		?>
	</marquee>
