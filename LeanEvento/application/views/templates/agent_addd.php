<div id="compticket">
  <?php echo $this->session->flashdata('msg'); ?>
    <img id="comprarimg" src="<?php echo base_url(); ?>imagenes/bannerregistro.jpg">
      <div id="comprarquoa"> <h1> REGISTRO DE EVENTO </h1> </div>
      <div id="comprarquot"> 
        <span class="comprarnextprfl"> <a href="<?php echo site_url("lean/agent_add"); ?>"> EVENTOS </a> </span>
        <span class="comprarnextprfl"> <a href="<?php echo site_url("leanadd/mainn"); ?>" > REGISTRO </a> </span>
      </div>
  </div>
  <div id="addeventdiv">
    
  </div>
  <div id="addeventdiv2">
    <form name="agaddev" method="post" novalidate>
      <table >
        <tr>
          <td colspan="3"><h1 >Registro de Evento</h1></td>
        </tr>
        <tr>
          <td colspan="2">Nombre<span class="errorText" ><?php echo form_error('nombre'); ?></span> <br> <input placeholder="Nombre del evento" type="text" class="nombreclass" name="nombre" required 
                <?php //if (!empty($e_name)) { echo "value='".$e_name."'"; } ?>
            ></td>
          <td rowspan="2"><img src="<?php echo base_url(); ?>imagenes/imagensubir.png" id="subirimg"></td>
        </tr>
        <tr>
          <td colspan="2">Responsable<span class="errorText" ><?php echo form_error('resp'); ?></span> <br><input placeholder="Nombre del Responsable" name="resp" type="text" class="nombreclass " required
                <?php //if (!empty($e_resp )) { echo "value='".$e_resp."'"; } ?>
            ></td>
        </tr>
        <tr>
          <td colspan ="2"></td><td><button id="seleccionarbtn">Seleccionar Foto</button></td>
        </tr>
        <tr>
          <td colspan="3">Lugar<span class="errorText" ><?php echo form_error('lugar'); ?></span><br><input placeholder="direction del lugar del eventos" type="text" class="lugartitle" name="lugar" 
                <?php //if (!empty($e_place)) { echo "value='".$e_place."'"; } ?>
            ></td>
        </tr>
        <tr>
          <td colspan="1">Fetcha<span class="errorText" ><?php echo form_error('fetcha'); ?></span><br><input  placeholder="00/00/0000"  type="date" class="last3title" name="fetcha" required min="2018-01-01" max="2020-12-31"
                <?php ///if (!empty( $e_date)) { echo "value='". $e_date."'"; } ?>
            ></td>
          <td colspan="1">Hora<span class="errorText" ><?php echo form_error('hora'); ?></span><br><input  placeholder="00:00"  type="time" class="last3title" name="hora" required >
                 </td>


          <td colspan="1">Valor de Boleto<span class="errorText" ><?php echo form_error('valor'); ?></span><br><input  placeholder="$000.00"  type="number" class="last3title" name="valor" min="0.00" max="10000.00" step="0.01" required
                <?php //if (!empty($e_price)) { echo "value='".$e_price."'"; } ?>
                ></td>
        </tr>
        <tr>
          <td colspan="3"><button id="gaurdarbtn" >Gaurdar</button></td>
        </tr>
      </table> 
      </form>   
</div>
<div id="prflediv"></div>
    <div id="ggfooter">
        <p >Copyright &copy;2019 All rights reserved. This web is made by </p>
    </div>