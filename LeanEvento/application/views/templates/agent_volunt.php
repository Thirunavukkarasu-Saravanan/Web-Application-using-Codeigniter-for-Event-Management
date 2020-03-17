<div id= "hdd">
		<p id="hddt"> Lista de Volunteer </p>
	</div>	
	<?php echo form_close(); ?>
	<?php echo $this->session->flashdata('msg'); ?>
	<div id="cont" >
		</div>
		<table id='tb' style='width: 100%;'>
		<tr id="tabh" >

				<th class="tabhh" colspan=1 style="width:50px;"> </th> 
				<th class="tabhh" colspan=1>  ID</th> 
				<th class="tabhh" colspan=1> CORREO</th> 
				<th class="tabhh" colspan=1 >PLACE </th>
				<th class="tabhh" colspan=1> RESPONSIBLE</th> 
				 
				<th class="tabhh" colspan=1> NOMBRE</th> 
				<th class="tabhh" colspan=1> ADDRESS</th>

				<th class="tabhh" colspan=1 >MAIL </th> 
		</tr>
		<?php 
		//echo  $get_data_myevent;
		if($fetch_volunteer->num_rows() > 0)
		{
			foreach($fetch_volunteer->result() as $row)
			{
		?>
			<tr>
				<?php $imgSrc ="imagenes/bannerlean3.jpg"; ?>
				<td><img src="<?php echo base_url(); ?>imagenes/user.png" style='height:50px; width:50px;'/> </td>
				<td><div class='phpb b1'><?php echo $row->eventid; ?></div></td>
				<td><div class='phpb b1'><?php echo $row->eventname?></div></td>
			
			<td><div class='phpb b3' ><?php echo $row->eventplace; ?></div></td>
			
			<td><div class='phpb b3' ><?php echo $row->responsible; ?></div></td>
			<td><div class='phpb b3' ><?php echo $row->fullname; ?></div></td>
			<td><div class='phpb b3' ><?php echo $row->address; ?></div></td>
			<td><div class='phpb b3' ><?php echo $row->mail; ?></div></td>

			
				
			</tr>	 
		<?php 
		 	
			} 
		}

		?>


	</table>
