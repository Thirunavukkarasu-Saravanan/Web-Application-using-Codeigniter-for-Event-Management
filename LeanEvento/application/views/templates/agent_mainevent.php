<div id= "hdd">
	<?php echo $this->session->flashdata('msg'); ?>
		<p id="hddt"> Lista de Eventos <br> <button id="confag" style="float:right;margin-right: 120px;margin-top: 50px;background-color: lightgreen;border-radius:20px;height: 40px;padding: 5px 20px;border: none;right:40px;"> <a href="<?php echo site_url("leanadd/mainn"); ?>">Agregar</a> </button> </p>


	</div>
	<div id="cont" >
		</div>
		<table id='tb' style='width: 100%;'>
		<tr id="tabh" >

				 
				<th class="tabhh" colspan=1>  ID</th> 
				<th class="tabhh" colspan=1>EVENT NAME</th> 
				<th class="tabhh" colspan=1 > PRICE (USD) </th>
				<th class="tabhh" colspan=1> PLACE</th> 
				 
				<th class="tabhh" colspan=1> DATE</th> 
				<th class="tabhh" colspan=1> RESPONSIBLE</th>

				<th class="tabhh" colspan=1 >CREATED BY </th>
				<th class="tabhh" colspan=1 >CHANGE </th>
				<th class="tabhh" colspan=1 >DROP </th> 
				<th>
			

		</tr>
		<?php 
		//echo  $get_data_myevent;
		if($fetch_data->num_rows() > 0)
		{
			foreach($fetch_data->result() as $row)
			{
		?>
			<tr>
				<?php $imgSrc ="imagenes/bannerlean3.jpg"; ?>
				
				<td><div class='phpb b1'><?php echo $row->eventid; ?></div></td>
				<td><div class='phpb b1'><?php echo $row->eventname?></div></td>
			
			<td><div class='phpb b3' ><?php echo $row->price.' $ '; ?></div></td>
			
			<td><div class='phpb b3' ><?php echo $row->eventplace; ?></div></td>
			
			<td><div class='phpb b3' ><?php echo $row->date; ?></div></td>
			<td><div class='phpb b3' ><?php echo $row->responsible; ?></div></td>
			<td><div class='phpb b3' ><?php echo $row->eventcreatedby; ?></div></td>
			<td>
			<form method="post">
			<input type='hidden' name='eventid' value="<?php echo $row->eventid?>" />
			<button class='confb'>EDIT</button>
			</form>	
			</td> 
			<td>
			<form method="post">
			<input type='hidden' name='deleid' value="<?php echo $row->eventid?>" />
			<button class='confb' style='background-color:red;' > DELETE</button>
			</form>	
			</td>

			
				
			</tr>	 
		<?php 
		 	
			} 
		}

		?>


	</table>