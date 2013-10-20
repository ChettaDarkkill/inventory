<center><h1>Inventory Process</h1></center>


<div id="demo">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead align="left">
		<tr>
			<th>Description</th>
			<th>Quantity</th>
			<th>Cost <br> Center</th>
			<th>Department</th>
			<th>Manager</th>
			<th>Owner</th>
			<th>En</th>
			<th>Ext</th>
			<th>Date</th>
			<th width="8px">Choose</th>
		</tr>
	</thead>
<!--	<tfoot>
		<tr>

			<th>No.</th>
			<th>Product Code</th>
			<th>Type</th>
			<th>Brand</th>
			<th>Quantity</th>
		</tr>

	</tfoot>
-->
	<tbody>
		<?php
			$base = base_url();
			foreach($result_process as $row){ //$result of template.php(controller)
				echo "<tr>";
				echo "<td>$row->Description</td>
					<td width='8px'>$row->Quantity</td>
					<td>$row->Cost_Center</td>
					<td>$row->Department</td>
					<td>$row->Manager</td>
					<td>$row->Owner</td>
					<td>$row->En</td>
					<td>$row->Ext</td>
					<td>$row->Date</td>";
		?>
			<td align='center'>
				<a href="#"><img src="<?php echo base_url(); ?>assets/images/edit2.png" height="20" width="18" class="down" title="Edit" style="border:none;"></a> &nbsp;
				<a onclick="return confirm('Are you sure?','Delete')" href='<?php echo site_url(); ?>/process_store/delProcess/<?php echo base64_encode($row->ID); ?>'><img src="<?php echo base_url(); ?>assets/images/delete.png" height="20" width="18" class="down" title="Delete" style="border:none;"></a>	
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<div class="spacer"></div>
