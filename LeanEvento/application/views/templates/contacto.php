
  </div>
    <div id="contactomain">
        <img id="contactoimg" src="<?php echo base_url(); ?>imagenes/bannercontacto.jpg">
        <div id="contactoquo"> <h1> CONTACTO <h1> </div>
        <div id="contactoquot"> 
            <span class="contactonext"> <a href="D:\D\Course work\Sem 2 (Spring - 19)\5335 Web data management\Project\phase 2\Thirunavukkarasu_LEANEVENTO\inciar.html" > INICIO </a> </span>
            <span class="contactonext"> <a href="contacto.html" > CONTACTO </a> </span>
        </div>
        <div id="secentireb">
            <div id="contactdet">
                <h2 id="contactdeth"> Informacion del contacto </h2>
                <span class="contactoicn" ><img class="contactoclip" src="<?php echo base_url(); ?>imagenes/location.png" >196 West 21st Street</br> Suite 721 New York, NY 10016</span>
                <span class="contactoicn" ><img class="contactoclips" src="<?php echo base_url(); ?>imagenes/phone.png" ><b>+1 235 2355 98</b></span>
                <span class="contactoicn" ><img class="contactoclips" src="<?php echo base_url(); ?>imagenes/paper-plane.png" >info@diazapp.com</span>
                <span class="contactoicn" ><img class="contactoclips" src="<?php echo base_url(); ?>imagenes/earth.png" >diazapps.com</span>
            </div>  
            <div id="contactalmfm">
                <h2 id="contactoh">  LEAN en las redes sociales </h2> 
                <table id="contactpic">
                    <tr id="cntctr">
                        <td > <img class="cntctdat" src="<?php echo base_url(); ?>imagenes/facebook.png"> <br>LEAN Ayuda Humaniteria</span> </td>
                        <td > <img class="cntctdat" src="<?php echo base_url(); ?>imagenes/twitter.png"><br> @LeanEmergente </td>
                        <td > <img class="cntctdat" src="<?php echo base_url(); ?>imagenes/instagram.png"><br> @LEANAyudaHumaniteria</td>
                        <td > <img  class="cntctdat" src="<?php echo base_url(); ?>imagenes/correo.png"><br> lean.emergente@gmail.com    </td>
                    </tr>
                </table>
            </div>
            <div id="contactfmldiv"> 
    
                <form method="post">
                <table id="formtable" style="margin-left: 100px;" >
                    <tr>
                        <td><h2>Estar En Contacto</h2></td>
                    </tr>  
                    <tr>
                        
                        <td>Nombre <span class="errorText" > <?php echo form_error('Nombre'); ?> </span>
                            <br><input type="text" name="Nombre" id="jsnombre" placeholder="Tu nombre"></td>
                      
                        <td>Appellido <span class="errorText" id="errFN"><?php echo form_error('Appelido'); ?></span><br><input type="text" name="Appelido" id="jsapp" placeholder="Tu Appellido">  </td>
                    </tr>
                    <tr>
                        <td colspan="2">Correo <span class="errorText" id="errFN"><?php echo form_error('Correo'); ?></span><br><input type="text" name="Correo" id="jscorreo" placeholder="Tu correo electronico"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Tema <span class="errorText" id="errFN"><?php echo form_error('Tema'); ?></span><br><input type="text" name="Tema" id="jstema" placeholder="Su asunto de este mensaje"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Mensaje <span class="errorText" id="errFN"><?php echo form_error('Mensaje'); ?></span><br><textarea style="height: 150px;width: 100%;" id="jsmensa" name="Mensaje" placeholder="Di algo sobre nosotros "></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;"> <input type = "submit" value="Submit" name="consub" id="consubm" style="padding:10px 20px;background-color:yellow;font-weight: 800;border-radius: 20px;border:0 solid black;"> </td>
                        <?php echo form_close(); ?>
                        <?php echo $this->session->flashdata('msg'); ?>
                    </tr> 
                </table>

                        
            </form>
            </div>
            <div id="contactofooter">
                <p id=contactoftext> Regestirese para recibir un <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;boletin</p>
                <input  type="text" class="dsgncnt">
                <span> <button id="dsgnbtn">Suscribe</button> </span>
            </div>
            <div id="contactoftlast">
                <div id="contactoftfooter">
                    <p id="contactofintext">LEAN EN LAS REDES SOCIALES</p>
                    <img src="<?php echo base_url(); ?>imagenes/Main_Fotter_Icon_twitter.png" id="twitter">
            <img src="<?php echo base_url(); ?>imagenes/Main_Fotter_Icon_facebook.png" id="facebook">
            <img src="<?php echo base_url(); ?>imagenes/Main_Fotter_Icon_insta.png" id="facebook"><br>
                    <p id ="copyright">Copyright &copy;2019 All rights reserved. This web page is made with &hearts; by</p>
                </div>
            </div>
        </div>
    </div>