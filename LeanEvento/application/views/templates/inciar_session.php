<div id="compticket">
    <img id="comprarimg" src="<?php echo base_url(); ?>imagenes/bannerlogin.jpg">
      <div id="comprarquo"> <h1> INICIAR SESSION </h1> </div>
      <div id="comprarquot"> 
        <span class="comprarnext"> <a href="inciar.php"> INICIO </a> </span>
        <span class="comprarnext"> <a href="iniciarsession.php" > INICIAR SESSION </a> </span>
      </div>
  </div>
  <div id="forget_password">
	<table id="inicifin">
		<tr>
			<td>Correo</td>
		</tr>
		<tr>
			<td><input type="text"></td>
		</tr>
	</table>    
  </div>
  <div class="row" id="table_div_inciar">
    <h2 style="margin-left: 1px;" ></h2>
    <?php// echo form_open('lean/login'); ?>
    <form method="post">
    <table id="inciartab">

      <tr>
        <th><h2 id="incih2"> Iniciar Session</h2></th>
         <td> <p style="color:red;text-align: right;"></p> </td>
      </tr>
      <tr>


        <td>
         
          
           <label><b>Nombre de Usario</b></label> <span class="errorText" ><?php echo form_error('Email'); ?></span>
          <input type="email" name="Email">
        </td>
        <td>
          
          <label><b>Password</b></label> 
          <input type="password" name="lgnpwd">

          
        </td>
      </tr>
    	<tr>

    		<td colspan=2 style="text-align: center;">
          <a id="frgtpswd" href="#">Olivido su contrasena?</a>
        </td>
    	</tr>
    	<tr>
    		<td colspan=2 style="text-align: center;">
          <!--<button id="inciarbtn" name="entra">Entra</button>-->
          <input type="submit" value="Entrae" name="entra">
          <?php echo $this->session->flashdata('msg'); ?>
        </td>
    	</tr>    
    </table>
  <?php echo form_close(); ?>
           

           
  </form>
    </div>
    <div id ="spacediv"></div>
 		<div id="contactoftlast">
			<div id="contactoftfooter">
    			<p id="contactofintext">LEAN EN LAS REDES SOCIALES</p>
    			<img src="<?php echo base_url(); ?>imagenes/Main_Fotter_Icon_twitter.png" id="twitter">
      <img src="<?php echo base_url(); ?>imagenes/Main_Fotter_Icon_facebook.png" id="facebook">
      <img src="<?php echo base_url(); ?>imagenes/Main_Fotter_Icon_insta.png" id="facebook"><br>
    			<p id="copyright">Copyright &copy;2019 All rights reserved. This web page is made with &hearts; by  </p>
			</div>