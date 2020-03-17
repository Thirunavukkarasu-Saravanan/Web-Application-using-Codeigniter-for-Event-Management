<div id="compticket">
    <img id="comprarimg" src="<?php echo base_url(); ?>imagenes/bannercontacto.jpg">
      <div id="comprarquo"> <h1> PERFIL </h1> </div>
      <div id="comprarquot"> 
        <span class="comprarnextprfl"> <a href="inciar.php"> INICIO </a> </span>
        <span class="comprarnextprfl"> <a href="profileindinextpage.php" > PERFIL </a> </span>
      </div>
  </div>
  <div id="proflemaindiv">
	<table>
		<tr>
			<td colspan="3"><h1>Tu Informacion del perfil</h1></td>
		</tr>
		<tr>
			<td>
				<span class="prfim" ><img src="<?php echo base_url(); ?>imagenes/book.png" class="prfal" >Nombre del inscrito</span>
			</td>
			<td>
				<span class="prfim" ><img class="prfal" src="<?php echo base_url(); ?>imagenes/location.png">196 West 21st Street<br>Suite 721 New York, NY 10016</span>
			</td>
			<td rowspan="3">
				<img class="prfal" src="<?php echo base_url(); ?>imagenes/nologo.png" id="suempresa">
			</td>
		</tr>
		<tr>
			<td>
				<span class="prfim" ><img class="prfal" src="<?php echo base_url(); ?>imagenes/book.png" >Apellidos del inscrito</span>
			</td>
			<td>
				<span class="prfphnicn" ><img class="prfal" src="<?php echo base_url(); ?>imagenes/phone.png" ><b>+1 235 235598</b></span>
			</td>
		</tr>
		<tr>
			<td>
				<span class="prfim" ><img class="prfal" src="<?php echo base_url(); ?>imagenes/contact.png" >Nombre del Usario</span>
			</td>
			<td>
				<span class="prfphnicn" ><img class="prfal" src="<?php echo base_url(); ?>imagenes/paper-plane.png"><b>Nombredecorreogmail.com</b></span>
			</td>
		</tr>
	</table>
  </div>
  <div id="prflemaindiv2">
  <table >
		<tr>
			<td colspan="3">
				<h1>Estar En Contacto</h1>
			</td>
		</tr>
		<tr>
			<?php foreach($fetch_us as $post){?>
     <tr>
         <td><?php  $ml=$post->mail;?></td>
         <?php// echo $ml ?> 
         <td><?php  $pwd=$post->password;?></td>
         <td><?php $pos= $post->pin;?></td>
         <td><?php $nombu= $post->fname;?></td>
         <td><?php $lombu= $post->lname;?></td>
         <td><?php $ut= $post->usertype;?></td>
      </tr>     
     <?php }?>  


		
	
			<td colspan="2">Nombres<br>
				<input placeholder="Tu Nombres" type="text" class="prfltitle1"
				  value="<?php echo $nombu;  ?>"
				>
			</td>
			<td rowspan="2">
				<img src="<?php echo base_url(); ?>imagenes/nologo.png" id="prflnologo2">
			</td>
		</tr>
		<tr>
			<td colspan="2">Numero de Registro del Inscrito<br>
				<input placeholder="Numero de Registro del Inscrito" type="text" class="prfltitle1" value="<?php echo $lombu;?>"
				

				/>
				</td>
		</tr>
		<tr>
			<td colspan ="2"></td>
			<td><button id="prfltitlebtn">Seleccionar Logo</button></td>
		</tr>
		<tr>
			<td colspan="3">Correo<br><input placeholder="Tu Correo Electronico"  type="text" class="prfltitle2" value="<?php echo $ml;  ?>"></td>
		</tr>
		<tr>
			<td colspan="1">Telefono<br><input placeholder="Telefono"  type="text" class="prfltitle3"  value="<?php echo $pos;  ?>" 
				></td>
			<td colspan="1">Usario<br><input placeholder="Nombre de Usario" type="text" class="prfltitle3" value="<?php echo $ut;  ?>"></td>
			<td colspan="1">Contrasena<br><input placeholder="Contrasena" type="password" class="prfltitle3" value="<?php echo $pwd;  ?>" ></td>
		</tr>
		<tr>
			<td colspan="3"><button id="notabtn">Nota</button><br>Solo puede cambiar los datos(Telefonoo, Contrasena y Foto)</td>
		</tr>
		<tr>
			<td colspan="3"><button id="gaurdarbtn">Gaurdar Combios</button></td>
		</tr>
    </table>    
   </div>