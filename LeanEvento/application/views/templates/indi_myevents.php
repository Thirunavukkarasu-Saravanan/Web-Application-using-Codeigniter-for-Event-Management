<div id= "hdd">
		<p id="hddt"> Lista de Eventos </p>
	</div>	
	<?php echo form_close(); ?>
	<?php echo $this->session->flashdata('msg'); ?>
	<div id="cont" >
		</div>
		<table id='tb' style='width: 100%;'>
		<tr id="tabh" >

				<th class="tabhh" colspan=1 style="width:50px;"> </th> 
				<th class="tabhh" colspan=1> Event ID</th> 
				<th class="tabhh" colspan=1> DETALLES DEL EVENTOS</th> 
				<th class="tabhh" colspan=1 >Date </th>
				<th class="tabhh" colspan=1> Event</th> 
				 
				<th class="tabhh" colspan=1> Event Place</th> 
				<th class="tabhh" colspan=1 style="width:50px;"> </th> 
		</tr>
	<?php 
		//echo  $get_data_myevent;
		if($get_data_myevent->num_rows() > 0)
		{
			foreach($get_data_myevent->result() as $row)
			{
		?>
			<tr>
				<?php $imgSrc ="imagenes/bannerlean3.jpg"; ?>
				<td><img src="<?php echo base_url(); ?>imagenes/bannerlean3.jpg" style='height:50px; width:50px;'/> </td>
				<td><div class='phpb b1'><?php echo $row->_uniqueid; ?></div></td>
				<td><div class='phpb b1'><?php echo $row->eventname?></div></td>
			
			<td><div class='phpb b3' ><?php echo $row->date; ?></div></td>
			
			<td><div class='phpb b3' ><?php echo $row->eventplace; ?></div></td>
			<td>
			<form method="post">
			<input type='hidden' name='delid' value="<?php echo $row->_uniqueid?>" />
			<button class='confb'>Delete</button>

			</form>	

			</td>
				
			</tr>	 
		<?php 
		 	
			} 
		}

		?>


	</table>
