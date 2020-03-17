</div>
    <div id="comprarmain">
    	<img id="comprarimg" src="<?php echo base_url(); ?>imagenes/bannercboleto.jpg">
    	<div id="comprarquo"> <h1> COMPRAR BOLETOS <h1> </div>
    	<div id="comprarquot"> 
    		<span class="comprarnext"> <a href="inciar.php"> INICIO </a> </span>
    		<span class="comprarnext" style="padding-left: 10px"> <a href="comprarboletos.php" > COMPRAR BOLETOS </a> </span>
    	</div>	
        <?php echo $this->session->flashdata('msg'); ?>
    	<div id="comprarcont">
    		<h1 id="comprart"> NUESTROS EVENTS </h1>
    		<p id="comrarfol"> Tu assistencia es importante para nosotros visitanos en ios estarnos realizando </p>
    	</div>	 

        
       
        <?php 
        
        if($fetch_data->num_rows() > 0)
        {
            foreach($fetch_data->result() as $row)
            {
        ?>
            
                <?php $imgSrc ="imagenes/bannerlean3.jpg"; ?>
                
               
                <?php $ei = $row->eventid; //echo $ei; ?>
                <?php $en = $row->eventname; //echo $en;?>
            
            <?php $pr = $row->price.' $ '; //echo $pr;; ?>
            
            <?php $ep =  $row->eventplace;// echo $ep; ?>
            
            <?php $edt= $row->date; //echo $edt;?>
            <table id='comprartabim'   style="float:left;" >
            <tr id="comprarrowhead"> 
           <th class="comprarrowdata">

              <?php $ei ?>
              <a href="<?php echo base_url( ).'placeor/comprartic?eventid='.$ei ?>"><img  class="imgtile" src="<?php echo base_url(); ?>imagenes/minibaner4.jpg" style="height:150px;width:150px;" ></a>
            </th>
            </tr>
            <tr>
                <td class="textd"><?php echo $en ?></td>
            </tr>
             <tr>
                <td class="tickp"><?php echo $pr ?></td>

             </tr>   

               
            

            
                
                    <?php 
            
            } 
        }

        ?> 


    </table>
  


<div id="social_footer">
    <p id="footer_text"></p>
    <img src="<?php echo base_url(); ?>imagenes/twitter.jpg" id="twitter"><img src="<?php echo base_url(); ?>imagenes/Facebook.png" id="facebook"><img src="imagenes/insta_icon.png" id="facebook"><br>
    
</div>
</footer>