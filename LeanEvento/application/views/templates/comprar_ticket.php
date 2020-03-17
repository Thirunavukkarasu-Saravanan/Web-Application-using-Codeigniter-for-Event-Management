 <div id="compticket">
    <img id="comprarimg" src="<?php echo base_url(); ?>imagenes/bannercboleto.jpg">
      <div id="comprarquo"> <h1> COMPRAR BOLETOS </h1> </div>
      <div id="comprarquot"> 
        <span class="comprarnext"> <a href="inciar.html"> INICIO </a> </span>
        <span class="comprarnext" > <a href="D:\D\Course work\Sem 2 (Spring - 19)\5335 Web data management\Project\phase 2\Thirunavukkarasu_LEANEVENTO\comprarboletos.html" > COMPRAR BOLETOS </a> </span>
      </div>
  </div>
  <div id="ticketdet">
    <?php echo $this->session->flashdata('msg'); ?>

    <table id="ticketbuytab" cellspacing="0">
        <tr>
          <td rowspan="5" colspan="2"><img id="ticketbuyimg" src="<?php echo base_url(); ?>imagenes/minibaner4.jpg" ></td>
          <td colspan="2"><h4> <?php echo $fetch_comp[0]->eventname ?></h4></td>
        </tr>
        <tr>
            <td colspan="3"><h4>$<?php echo $fetch_comp[0]->price ?></h4></td>
        </tr>
        <tr>
            <td colspan="3">
            <p>LEAN es una asociación civil sin fines de lucro conformada por gente con gran sensibilidad social, dedicada a la defensa de los derechos humanos y la consecución de ayuda humanitaria, favoreciendo directamente o a través de otras asociaciones o agrupaciones</p>
            </td>
        </tr>
        <tr>
            <td>
              <form method="POST" >
                <table>
                  <tr>
                    <td>
               <label for="buy_name">Mail : <span class="errorText" ><?php echo form_error('buyer_name'); ?></span> </label> 
                </td> <td> <input type="email" name="buyer_name" id="buy_name"/> </td>
               </tr>
                <tr><td> 
               <label for="buy_name">Numero de Entradas :<span class="errorText" ><?php echo form_error('ticket_num'); ?></span> </label></td> <td>  <input type="number" name="ticket_num"  id="tic_num"/></td>
               </tr>
                <tr> <td colspan="2">             
            <input type="submit" id="buybtn" value="Comparer"/>
            <input type="hidden" name="event_id" value="<?php echo $fetch_comp[0]->eventid ?>" />
           <input type="hidden" name="event_price" value="<?php echo $fetch_comp[0]->price ?>" />
             </td> 
            </tr>
               
            </table>
          </form>
            </td>
        </tr>
    
    </table>
  </div>
  <div id="buyticketdesc">
     <table id="desctable" cellspacing="0">
        <tr>
         <td colspan="3">
          <button class="inscell">Description</button>
          <button class="inscell">Description</button>
          <button class="inscell">Description</button>
         </td>
        </tr>
        <tr>
         <td colspan="4">
            <textarea id="insidecont" placeholder="LEAN es una asociación civil sin fines de lucro conformada por gente con gran sensibilidad social, dedicada a la defensa de los derechos humanos y la consecución de ayuda humanitaria, favoreciendo directamente o a través de otras asociaciones o agrupaciones provinciales a venezolanos residentes en España y a quienes viven en Venezuela" READONLY></textarea>
         </td>
        </tr>
      </table>   
  </div>