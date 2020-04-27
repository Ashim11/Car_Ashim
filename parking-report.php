<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `parking`,`space` WHERE parking_space_id = space_id";
	$rs=mysql_query($SQL) or die(mysql_error());
?>

	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1" style="width:100%">
		<div class="contact">
			<h4 class="heading colr">Parking Reports</h4>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
			<?php
			}
			if(mysql_num_rows($rs)) {
			?>
			<form name="frm_parking" action="" method="post">
				<div class="static">
					<table style="width:100%">
					  <tbody>
					  <tr class="tablehead bold">
						<td scope="col">ID</td>
						<td scope="col">Car No</td>
						<td scope="col">Space</td>
						<td scope="col">Slot No</td>
						<td scope="col">Entry Date</td>
						<td scope="col">Entry Time</td>
						<!--
						<td scope="col">Exit Date</td>
						<td scope="col">Exit Time</td>    -->
						
						<td scope="col">Status</td>
						<td scope="col">Action</td>
					  </tr>
					<?php 
					$sr_no=1;
					while($data = mysql_fetch_assoc($rs))
					{
						if($data[parking_status] == 1)
							$sts = "Allocated";
						else
							$sts = "Deallocated";
					?>
					  <tr>
						<td><?=$data[parking_id]?></td>
						<td><?=$data[parking_car_no]?></td>
						<td><?=$data[space_title]?></td>
						<td><?=$data[parking_slot_number]?></td>
						<td><?=$data[parking_entry_date]?></td>
						<td><?=$data[parking_intime]?></td>
						<td><?=$sts?></td>
						<td style="text-align:center">
						<a href="parking.php?parking_id=<?php echo $data[parking_id] ?>">Edit</a> | 
						<a href="Javascript:delete_parking(<?=$data[parking_id]?>)">Delete</a></td>
					  </tr>
					<?php } ?>
					</tbody>
					</table>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="parking_id" />
			</form>
			<?php } else {?>
				<div class="msg">You Parking Added Yet.</div>
			<?php } ?>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
