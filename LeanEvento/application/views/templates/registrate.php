

</!DOCTYPE html>
<html>
<head>
	<title>L.E.A.N.</title>
	<meta charset = utf-8 />
    <link rel= "stylesheet" href="CSS/leanevent.css" type="text/css">
    <Style>
      #register_types {
        background-color: lightgrey;
        padding: 30px;
        width: 80%;
        margin: 10%;
    }

    #register_types>#register_type_list {
        background-color: transparent;
        display: flex;
        justify-content: stretch;
        text-align: center;
    }
    #register_types>#register_type_list .register_regType {
        margin: 5%;
        padding: 15px 30px;
        background-color: #ffc300;
        color: white;
        text-align: center;
        border-radius: 50px;
        font-size: .9em;
        display: inline-block;
    }

    #register_types>#register_type_list>#register_reg_indi {
        flex: 1 1 50px;
    }

    #register_types>#register_type_list>#register_reg_buss {
        flex: 1 1 200px;
    }

    #register_types>#register_type_list>#register_reg_lean {
        flex: 1 1 100px;
    }

    #register_form_popUp {
        position: fixed;
        width: 100%;
        height: 100%;        
        background-color: rgba(0, 0, 0, .5);
        top: 0;
        left: 0;
        z-index: 100;
        display: none;
    }

    #register_form_popUp>#register_form {
        position: relative;
        top: calc(50% - 300px);
        left: calc(25%);
        min-width: 500px;
        width: 40%;
        height: 650px;
        background-color: white;
        border: 0px solid black;
        box-shadow: 0 5px 20px black;
        border-radius: 5px;
        font-size: 1em;
    }
    #register_form>#register_form_header {
        padding: 15px 10px 15px 20px;
        border-bottom: 1px solid lightgrey;  
    }

    #register_form>#register_form_details {
        padding: 0;
        margin: 10px;
    }

    #register_form_details>.register_container_2,
    #register_form_details>.register_container_1 {
        display: block;
        width: calc(100% - 20px);
        margin: 10px;
    }

    #register_form_details>.register_container_2>.register_input_container {
        display: inline-block;
        width: calc(50% - 20px);
        margin: 7px;
    }

    #register_form_details>.register_container_2>.register_input_container>.register_input_header {
        display: inline-block;
        width: 100%;
        font-weight: 900;
        font-size: .8em;
        color: grey;
    }


    #register_form_details>.register_container_2>.register_input_container>.register_input_userInput {
        display: block;
        width: calc(100% - 0px);
        padding: 5px 10px;
        border: 1px solid lightgrey;
    }

    #register_form_details>.register_container_1>.register_input_container {
        display: inline-block;
        width: calc(100% - 20px);
        margin: 7px;
    }

    #register_form_details>.register_container_1>.register_input_container>.register_input_header {
        display: inline-block;
        width: 100%;
        font-weight: 900;
        font-size: .8em;
        color: grey;
    }

    #register_form_details>.register_container_1>.register_input_container>.register_input_userInput {
        display: block;
        width: calc(100% - 0px);
        padding: 5px 10px;
        border: 1px solid lightgrey;
    }
    #register_form_details>.register_container_1>.register_input_container>.register_input_userInput_chk{
        display: inline-block;
        width:calc(33% - 10px);
    }
    #register_form_details>.register_container_1>.register_input_container>.errText,
    #register_form_details>.register_container_2>.register_input_container>.errText{
      float:right;
      color:red;
      padding:0;
      margin:0;
      font-size: 10px;
    }

    #register_form_footer{
        padding: 10px 20px;
        border-top: 1px solid lightgrey;
    }

    .register_btn{
        padding: 5px 20px;
        background-color: lightgray;
        border-radius: 50px;
        margin-top:10px;
        display: inline-block;
    }

    .btn_ok{
        background-color: #ffc300;;
        color:white;
        font-weight: 500;
        font-size: 1.1em;
    }    
    .btn_ok:hover{
        box-shadow: 0 0 10px  #ffc300;;
    }

    .btn_clear{
        background-color: lightgrey;;
        color:rgba(100,100,100,0.85);
        font-weight: 500;        
        float: right;
    }
    .btn_clear:hover{
        background-color:rgba(200,200,200,0.95);
        color:rgba(255,255,255,1);
    }
    </Style>

  <div id="compticket">
    <img id="comprarimg" src="<?php echo base_url(); ?>imagenes/bannerregistro.jpg">
      <div id="comprarquo"> <h1> REGISTRATE </h1> </div>
      <div id="comprarquot"> 
        <span class="comprarnext"> <a href="inciar.php"> INICIO </a> </span>
        <span class="comprarnext"> <a href="registrate.php" > REGISTRATE </a> </span>
      </div>
  </div>
  <div id="register_types">
        <span><b>Elija el tipo de usuario para registrarse</b></span>
        <div id="register_type_list">
            <div id="register_reg_indi" onclick="OpenPopUp('individual')">
                <span id="jsindi" name="phpindi"></span>
                <div class="register_regType" >Como individual</div>
            </div>
            <div id="register_reg_buss" onclick="OpenPopUp('business')">
              <span id="jsbusi" name="phpbusi"></span>
                <div class="register_regType">Como Negocio o Fundacion</div>
            </div>
            <div id="register_reg_lean" onclick="OpenPopUp('agent')">
              <span id="jsagent" name="phpagent"></span>
                <div class="register_regType">Como agente LEAN</div>
            </div>
        </div>
    </div>


   <div id="register_form_popUp">
        <form id="register_form"  novalidate method="post">
            <div id="register_form_header" >
                <span>Registro Negocio o Funcdacion</span>
            </div>
            <input type="hidden" name="userType" value=""  id="hdnUserTypeField"/>
            <div id="register_form_details">
                <div class="register_container_1">
                    <div class="register_input_container">
                        <span class="register_input_header">
                            Correo <span class="errorText" ><?php echo form_error('Email'); ?></span>
                        </span>
                         
                        <input class="register_input_userInput" required placeholder="Correo" name="Email" id="jsrcor" required />
                    </div>
                    <div class="register_input_container">
                        <span class="register_input_header">
                            Contraseña <span class="errorText"><?php echo form_error('Password'); ?></span>
                        </span>                       
                       
                        <input class="register_input_userInput"  placeholder="Contraseña" type="password" id="jsrcont" required name="Password"/>
                    </div>
                </div>
                <div class="register_container_2">
                    <div class="register_input_container">
                        <span class="register_input_header">
                            Nombre <span class="errorText"><?php echo form_error('Nombre'); ?></span>
                        </span>                        
                         
                        <input class="register_input_userInput" placeholder="Nombre" name="Nombre" id="jsrnomb" required minlength="3" />
                    </div>
                    <div class="register_input_container">
                        <span class="register_input_header">
                            Apellido <span class="errorText"><?php echo form_error('Apellido'); ?></span>
                        </span>
                         
                        <input class="register_input_userInput" placeholder="Apellido" name="Apellido" id="jsrapel" required minlength="3" />
                    </div>
                </div>
                <div class="register_container_1">
                    <div class="register_input_container">
                        <span class="register_input_header">
                            Dirección  <span class="errorText"><?php echo form_error('Address'); ?></span>
                        </span>                        
                        
                        <input class="register_input_userInput" placeholder="Dirección" name ="Address" id="jsrdirecc" required minlength="3"/>
                    </div>
                </div>
                <div class="register_container_1">
                    <div class="register_input_container">
                        <span class="register_input_header">
                            Ciudad <span class="errorText"><?php echo form_error('City'); ?></span>
                        </span>
                        
                        <input class="register_input_userInput" placeholder="Ciudad" name="City"  id="jsrciu" required minlength="3"/>
                    </div>
                </div>
                <div class="register_container_2">
                    <div class="register_input_container" style="width:calc(100% - 240px)">
                        <span class="register_input_header">
                            Estado
                        </span>
                        <select class="register_input_userInput" name="phpopt" required >
                            <option>Texas</option>
                            <option>Illinois</option>
                            <option>California</option>
                            <option>Washington</option>
                            <option>New york</option>
                        </select>
                    </div>
                    <div class="register_input_container" style="width:200px">
                        <span class="register_input_header">
                            Código Postal <span class="errorText"><?php echo form_error('Postal'); ?></span>
                        </span>
                        
                        <input class="register_input_userInput" placeholder="Ciudad" name="Postal" id="jsrpin" minlength ="1" maxlength="5"  required;  />
                    </div>
                </div>
                <div id="register_type_bussiness" class="register_container_1">
                    <div class="register_input_container">
                        <div class="register_input_userInput_chk">
                             <p><span name="rolebusi"> </span></p>
                            <input class="register_input_userInput" type="radio" name="bussType" id="bussType_1" />
                            <label for="bussType_1">Tipo de negocio 1</label>
                        </div>
                        <div class="register_input_userInput_chk">
                            <input class="register_input_userInput" type="radio" name="bussType" id="bussType_1" />
                            <label for="bussType_1">Tipo de negocio 1</label>
                        </div>
                        <div class="register_input_userInput_chk">
                            <input class="register_input_userInput" type="radio" name="bussType" id="bussType_1" />
                            <label for="bussType_1">Tipo de negocio 1</label>
                        </div>
                    </div>
                </div>
                <div class="register_container_1">
                   <!--<span class="register_btn btn_ok">Registrarse</span> ?> -->
                   <input type = "submit" name="subm" value="Register" class="register_btn btn_ok ">
                   <?php echo form_close(); ?>
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
            </div>

            <div id="register_form_footer">
                <span class="register_btn btn_clear" onclick="ClosePopUp();">Cerrar</span>
            </div>
    </form>
    </div>
</div>


<script>
      
        /////////////////////////////////////////////////////////////////////////////
        // For Register Page   
        /////////////////////////////////////////////////////////////////////////////
        function OpenPopUp(type) {

            var userType = document.getElementById('hdnUserTypeField');

            document.getElementById('register_form_popUp').style.display = 'block';
            if (type === 'business') {
                document.getElementById('register_type_bussiness').style.display = 'block';
                document.getElementById('register_form').style.height = '650px';
                userType.value = "3";
            }
            else if (type === 'individual') {
                document.getElementById('register_type_bussiness').style.display = 'none';
                document.getElementById('register_form').style.height = '600px';
                userType.value = "1";
            } 
            else if (type === 'agent') {
                document.getElementById('register_type_bussiness').style.display = 'none';
                document.getElementById('register_form').style.height = '600px';
                userType.value = "2";
            }
            else {
              ClosePopUp();
              userType.value = "";
              alert("Unknoen User Type ");
            }

        }

        function ClosePopUp() {
            document.getElementById('register_form_popUp').style.display = 'none';
        }
        // END
        /////////////////////////////////////////////////////////////////////////////
    </script>
  <div id ="spacediv"></div>
    <div id="contactoftlast">
      <div id="contactoftfooter">
          <p id="contactofintext">LEAN EN LAS REDES SOCIALES</p>
          <img src="<?php echo base_url(); ?>imagenes/Main_Fotter_Icon_twitter.png" id="twitter">
      <img src="<?php echo base_url(); ?>imagenes/Main_Fotter_Icon_facebook.png" id="facebook">
      <img src="<?php echo base_url(); ?>imagenes/Main_Fotter_Icon_insta.png" id="facebook"><br>
          <p id="copyright">Copyright &copy;2019 All rights reserved. This web page is made  with &hearts; by  </p>
      </div>