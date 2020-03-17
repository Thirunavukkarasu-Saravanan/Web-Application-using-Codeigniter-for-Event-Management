<div id= "hdd">
		<p id="hddt"> Lista de Eventos </p>
	</div>	
	<div id="cont" >
					
		</div>
		<table id='tb' style='width: 100%;'>
		<tr id="tabh" >
				<th class="tabhh" colspan=1 style="width:50px;"> </th> 
				<th class="tabhh" colspan=1> UiD</th> 
				<th class="tabhh" colspan=1> DETALLES DEL EVENTOS</th> 
				<th class="tabhh" colspan=1 >Date </th>
				<th class="tabhh" colspan=1> Time</th> 
				<th class="tabhh" colspan=1>Date </th> 
				<th class="tabhh" colspan=1> Event Place</th> 
				<th class="tabhh" colspan=1 style="width:50px;"> </th> 
				</tr>	
			

		<?php 
		if($fetch_data->num_rows() > 0)
		{
			foreach($fetch_data->result() as $row)
			{
		?>
			<tr>
				<?php $imgSrc ="imagenes/bannerlean3.jpg"; ?>
				<td><?php echo $row->eventname; ?></td>
				<td><div class='phpb b1'><?php echo $row->eventid?></div></td>
			<td><div class='phpb b2'><?php echo $row->eventname; ?></div></td>
			<td><div class='phpb b3' ><?php echo $row->date; ?></div></td>
			<td><div class='phpb b3' ><?php echo $row->time; ?></div></td>
			<td><div class='phpb b3' ><?php echo $row->date; ?></div></td>
			<td><div class='phpb b3' ><?php echo $row->eventplace; ?></div></td>
			<td>
			<form method="post">
			<input type='hidden' name='eventid' value="<?php echo $row->eventid?>" />
			<button class='confb'>CONFIRMAR</button>
			</form>	
			</td>
				
			</tr>	 
		<?php 
		 	
			} 
		}

		?>
	</table>
