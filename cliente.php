<?php include('header.php');?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>CLIENTE</h1>
			</div>
			<div class="articulo">
				<article>
					<p>Si deseas solicitar un serivicio o consultar la informacion 
						acerca de nuestro negocio, por favor rellena los siguentes datos
						del formulario y quedate a la espera de algun correo.
					</p>
				<br>	
				<center><h1>Formulario de servico</h1></center><br><br>
				<form action="welcome.php" method="post">
					-Nombre: <input type="text" name="name"><br><br>
				    -Apellido: <input type="text" name="lastname"><br><br>
					<p>-Genero</p><br>
					Hombre<input type = "radio" name = "genero" value = "hombre"> ||
					Mujer<input type = "radio" name = "genero" value = "hombre"><br><br>
					-Edad: <input type="text" name="edad"><br><br>
					-E-mail: <input type="text" name="email"><br><br>
				    -Telefono: <input type="number" name="fon"><br><br>
			    </form>
				<form>
					<p>*Escribe en el siguiente recuadro el motivo por el que decidiste 
						contactarnos. Ejemplo informacon de trabajos /conatcar ayuda /solicitar 
						un servicio.
					</p>
					<textarea name="comment" rows=10 cols=80></textarea><br><br>
					<input type="submit">
				</form>
				<br>
				<p>"Mediante este mensaje te prometemos que cualquier tipo de informacion que 
					ayas ingresado en esta pagina sera usado de manera responsable, y no 
					sera compartido con terceros."  
				</p>
				<br>
				<p>Atte: Taller Electrico -VOLTAGE-</p>
				<br>
				<center><img src="img/like.png" alt="LIKE" height="130px" width="108px" ></center>
				</article>
			</div>
            <?php include('sidebar.php');?>
		</div>
	</section>
    <?php include('footer.php');?>
</body>
</html>